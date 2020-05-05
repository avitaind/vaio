@extends('admin.layout.app')

@section('title')
    Customers
@endsection

@section('css')

    <style>

        .cms-table > tbody > tr > th:first-child {
            width: 140px;
        }

    </style>
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.customers.edit', $user) }}">
                    <i class="fa fa-edit"></i> Edit
                </a>
            </div>

            <table class="table cms-table">
                <tbody>
                <tr>
                    <th>First Name</th>
                    <td>{{ $user->first_name }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $user->last_name }}</td>
                </tr>
                <tr>
                    <th>Nickname</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $user->present()->gender }}</td>
                </tr>
                <tr>
                    <th>Birthday</th>
                    <td>{{ $user->present()->birthday }}</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>{{ $user->present()->country }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $user->mobile }}</td>
                </tr>
                <tr>
                    <th>Create time</th>
                    <td>{{ $user->created_at->format("Y-m-d H:i") }}</td>
                </tr>

                </tbody>
            </table>

        </div>

    </div>
@endsection