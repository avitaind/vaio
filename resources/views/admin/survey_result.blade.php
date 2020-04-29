@extends ('admin.layout.app')

@section('title')
    Product Survey
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn" href="{{route('admin.survey.excel')}}"><i class="fa fa-fw fa-download"></i> Export excel file</a>
            </div>

            <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Model Number</th>
            <th>Serial Number</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Age Group</th>
            <th>Gender</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Submit Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($forms as $form)
            <tr>
                <td>{{ $form->id }}</td>
                <td>{{ $form->model_number }}</td>
                <td>{{ $form->serial_number }}</td>
                <td>{{ $form->user->email or "" }}</td>
                <td>{{ $form->present()->birthday }}</td>
                <td>{{ $form->age_group }}</td>
                <td>{{ $form->present()->gender }}</td>
                <td>{{ $form->present()->q1_answer }}</td>
                <td>{{ $form->present()->q2_answer }}</td>
                <td>{{ $form->present()->q3_answer }}</td>
                <td>{{ $form->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


            {{ $forms->links() }}

        </div>

    </div>

@stop

