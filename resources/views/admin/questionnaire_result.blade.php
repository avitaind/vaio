@extends ('admin.layout.app')

@section('title')
    Questionnaire Content
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            <div class="card-tools">
                <a class="btn" href="{{route('admin.questionnaire.excel')}}"><i class="fa fa-fw fa-download"></i> Export excel file</a>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>你是否曾經擁有vaio之產品？</th>
                    <th>你最喜歡哪一款顏色？</th>
                    <th>VAIO哪一種特點最能吸引你？</th>
                    <th>你來自以下哪個地方?</th>
                    <th>Submit Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $form->id }}</td>
                        <td>{{ $form->email }}</td>
                        <td>{{ $form->q2_ans }}</td>
                        <td>{{ $form->q3_ans }}</td>
                        <td>{{ $form->q4_ans }}</td>
                        <td>{{ $form->q5_ans }}</td>
                        <td>{{ $form->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $forms->links() }}

        </div>

    </div>

@stop

