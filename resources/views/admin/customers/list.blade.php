@extends('admin.layout.app')

@section('title')
    Customers
@stop

{{--@section('content_header')--}}
    {{--<h1>Customers</h1>--}}
{{--@stop--}}

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.customers.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>

                <a class="btn btn-box-tool" href="{{ route('admin.customers.export') }}">
                    <i class="fa fa-download"></i> Export
                </a>

            </div>

            <div class="row">
                <div class="col-md-3 col-md-push-9">
                    <form method="get" style="margin-bottom: 3px">
                        <div class="input-group input-group-sm">
                            <input type="text" name="search" class="form-control" value="{{ $search or '' }}" placeholder="Search by email/phone/mobile">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info btn-flat">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>




            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nick Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Mobile</th>
                        <th>Country</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $customer)

                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->mobile }}</td>
                                <td>{{ $customer->present()->country }}</td>
                                <td>
                                    <a href="{{ route('admin.customers.show', $customer) }}">
                                        <i class="fa fa-fw fa-info"></i>
                                    </a>
                                </td>

                            </tr>

                        @endforeach
                    </tbody>


                </table>
            </div>

            {{ $users->links() }}
        </div>

    </div>

@stop
