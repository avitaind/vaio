@extends('admin.layout.app')

@section('title')
    Admins
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.users.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 70px;">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 100px;"></th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach( $admins as $admin )

                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>

                            <a class="btn btn-secondary btn-sm" href="{{ route('admin.users.edit', $admin) }}"><i class="fa fa-fw fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-delete" href="{{ route('admin.users.destroy', $admin) }}"><i class="fa fa-fw fa-times"></i></a>

                        </td>
                    </tr>

                    @endforeach

                    </tbody>


                </table>
            </div>


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