@extends('admin.layout.app')

@section('title')
    Manage VAIO Life Categories
@stop

@section('content')

    <div class="my-2">
        <a class="btn btn-info" href="{{ route('admin.news.index') }}">&lt; Back</a>
    </div>



    <div class="card mb-4">

        <div class="card-body">

            <div class="float-right" style="margin-bottom: 20px;">
                <a class="btn btn-sm btn-primary ml-3" href="{{ route('admin.news_categories.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 40px;">#</th>
                        <th>Category Name (EN)</th>
                        <th>Category Name (TC)</th>
                        <th style="width: 160px;">Manage</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $item)

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name_en }}</td>
                            <td>{{ $item->name_tc }}</td>

                            <td>

                                <a class="btn btn-link btn-xs" href="{{ route('admin.news_categories.edit', $item) }}">
                                    <i class="fa fa-fw fa-edit"></i>
                                </a>

                                <button type="button" class="btn btn-link btn-xs btn-delete" style="color: #FF0000;" data-news-id="{{ $item->id }}">
                                    <i class="fa fa-fw fa-trash"></i>
                                </button>


                            </td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
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

                    var url = '/admin/news_categories/' + news_id;
                    $("#delete-news-form").prop('action', url).submit();
                }
            });

        });

    </script>

@stop