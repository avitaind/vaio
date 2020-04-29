@extends('admin.layout.app')

@section('title', 'Repair Terms & Conditions')

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn btn-box-tool" href="{{ route('admin.repair_tnc.create') }}">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>

            <table class="table">
                <thead>
                <tr>
                    {{--<th style="width: 100px;">Country</th>--}}
                    <th style="width: 100px;">Locale</th>
                    <th>Title</th>
                    <th style="width: 100px;"></th>
                </tr>
                </thead>
                <tbody>

                @foreach( $repair_terms as $term )
                    <tr>
                        {{--<td>{{ $term->countryString() }}</td>--}}
                        <td>{{ $term->localeText() }}</td>
                        <td>{{ $term->title }}</td>
                        <td>
                            <a href="{{ route('admin.repair_tnc.edit', $term) }}">Update</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>

    </div>

@stop
