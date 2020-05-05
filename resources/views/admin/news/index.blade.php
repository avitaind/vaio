@extends('admin.layout.app')

@section('title')

    @if( $type == 'offer' )
        Offer
    @elseif ( $type == 'life' )
        VAIO Life
    @elseif ( $type == 'news')
        News
    @else
        Offer / VAIO Life / News
    @endif


@stop

@section('content')

    <div class="my-2">
        <a class="btn btn-info" href="{{ route('admin.news_categories.index') }}">Manage VAIO Life Categories</a>
    </div>



    <div class="card mb-4">

        <div class="card-body">

            <div class="dropdown float-left" style="margin-bottom: 20px;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('admin.news.index') }}">All</a>
                    <a class="dropdown-item" href="{{ route('admin.news.index', ['type' => 'offer']) }}">Offer</a>
                    <a class="dropdown-item" href="{{ route('admin.news.index', ['type' => 'news']) }}">News</a>
                    <a class="dropdown-item" href="{{ route('admin.news.index', ['type' => 'life']) }}">VAIO Life</a>
                </div>
            </div>

            <div class="float-right" style="margin-bottom: 20px;">
                <a class="btn btn-primary ml-3" href="{{ route('admin.news.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>


            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 40px;">#</th>
                        <th style="width: 120px;">Date</th>
                        <th style="width: 250px;">Type</th>
                        <th style="width: 50px;">
                            Publish?
                        </th>
                        <th style="width: 50px;">
                            <i class="fa fa-star"></i>
                        </th>
                        <th>Name</th>
                        <th style="width: 200px;">Manage</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($news as $item)

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->eventDateString() }}</td>
                            <td>{{ $item->typeString() }}</td>
                            <td>@if( $item->is_publish ) <i class="fa fa-check"></i> @endif</td>

                            <td>@if( $item->is_feature ) <i class="fa fa-check"></i> @endif</td>
                            <td>{{ $item->title }}</td>

                            <td>
                                
                                <a class="btn btn-link btn-xs" href="{{ route('admin.news.edit', $item) }}">
                                    <i class="fa fa-fw fa-edit"></i>
                                </a>

                                <button type="button" class="btn btn-link btn-xs btn-delete" style="color: #FF0000;" data-news-id="{{ $item->id }}">
                                    <i class="fa fa-fw fa-trash"></i>
                                </button>


                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="5">No record found.</td>
                        </tr>

                    @endforelse
                    </tbody>


                </table>
            </div>

            <div class="text-center">
                {{ $news->appends(['type' => $type])->links() }}
            </div>
        </div>
    </div>




    <form id="delete-news-form" action="" method="POST" style="display: none;">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    </form>


@stop



@section('js')

    <script>

        $(function(){


            $(".btn-delete").click(function(e) {
                e.preventDefault();

                if (confirm('Confirm to delete? This cannot undo.') ) {
                    var news_id = $(this).data('newsId');

                    var url = '/admin/news/' + news_id;
                    $("#delete-news-form").prop('action', url).submit();
                }
            });

        });

    </script>

@stop