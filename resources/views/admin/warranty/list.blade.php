@extends('admin.layout.app')

@section('title')
    Warranty Terms
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                {{--<a class="btn btn-box-tool" href="{{ route('admin.warranties.create') }}">--}}
                    {{--<i class="fa fa-plus"></i> Add--}}
                {{--</a>--}}
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 40px;">#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th style="width: 100px;"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($terms as $term)

                        <tr>
                            <td>{{ $term->id }}</td>
                            <td>{{ $term->name }}</td>
                            <td><code>{{ $term->code }}</code></td>
                            <td>
                                <a href="{{ route('admin.warranties.edit', $term) }}">
                                    <i class="fa fa-fw fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $terms->links() }}
        </div>

    </div>

@stop
