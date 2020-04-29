@extends('admin.layout.app')

@section('title')
    Service Centers
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.service_centers.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 70px;">#</th>
                        {{--<th style="width: 100px;">Country</th>--}}
                        <th>Name</th>
                        <th>Address</th>
                        <th>Ordering</th>
                        <th style="width: 70px;"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($centers as $center)
                        <tr>
                            <td>{{ $center->id }}</td>
                            {{--<td>{{ $center->countryString() }}</td>--}}
                            <td>{{ $center->{'name:tc'} }}</td>
                            <td>{{ $center->{'address:tc'} }}</td>
                            <td>{{ $center->seq }}</td>
                            <td>
                                <a href="{{ route('admin.service_centers.edit', $center) }}">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>


                </table>
            </div>

            {{ $centers->links() }}
        </div>

    </div>

@stop
