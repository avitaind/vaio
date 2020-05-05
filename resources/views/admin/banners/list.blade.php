@extends('admin.layout.app')

@section('title')
    Banners
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.banners.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>


            <table class="table">

                <thead>
                <tr>
                    <th>Seq</th>
                    <th>Banner Location</th>
                    <th>Image Path</th>
                    <th style="width: 90px;">&nbsp;</th>
                </tr>
                </thead>


                <tbody>

                @foreach($banners as $banner)

                    <tr>
                        <td>{{ $banner->seq }}</td>
                        <td>{{ ucwords($banner->type) }}</td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    @if( $url = $banner->getBannerURLAttribute('en') )
                                        <img src="{{ $url }}" class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-3">
                                    @if( $url = $banner->getBannerURLAttribute('tc') )
                                        <img src="{{ $url }}" class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-3">
                                    @if( $url = $banner->getMobileBannerURLAttribute('en') )
                                        <img src="{{ $url }}" class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-3">
                                    @if( $url = $banner->getMobileBannerURLAttribute('tc') )
                                        <img src="{{ $url }}" class="img-fluid">
                                    @endif
                                </div>
                            </div>
                            
                            
                            








                        </td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{ route('admin.banners.edit', $banner) }}"><i class="fa fa-fw fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-delete" href="{{ route('admin.banners.destroy', $banner) }}"><i class="fa fa-fw fa-times"></i></a>

                        </td>
                    </tr>

                @endforeach

                </tbody>



            </table>

        </div>


    </div>


    <form id="delete-form" action="" method="POST" style="display: none;">
        {{ method_field('DELETE') }}
        @csrf
    </form>


@stop


@section('js')

    <script>

        $(function(){

            $("a.btn-delete").click(function(e) {
                e.preventDefault();
                if (confirm('Confirm to delete? This cannot undo.') ) {
                    $("#delete-form").prop('action', $(this).attr('href') ).submit();
                }
            });

        });

    </script>

@endsection