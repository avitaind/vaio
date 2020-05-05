@extends('admin.layout.app')

@section('title')
    {{ $center->exists ? "Update" : "Add" }} Service Center
@stop

@section('content')

    <div class="card my-4">

        <div class="card-body">

            {!! BootForm::horizontal(['model' => $center, 'store' => 'admin.service_centers.store', 'update' => 'admin.service_centers.update']) !!}

            <h4>Location</h4>

            <p class="help-block">
                Remarks: Latitude and Longitude can get from <a href="http://www.latlong.net/">http://www.latlong.net/</a>
            </p>

            <div class="row">
                <div class="col-md-6">
                    {!! BootForm::text('latitude', 'Latitude') !!}
                </div>

                <div class="col-md-6">
                    {!! BootForm::text('longitude', 'Longitude') !!}
                </div>
            </div>

            <hr>

            <h4>Ordering</h4>

            <div class="row">
                <div class="col-md-6">

                        {!! BootForm::text('seq', 'Ordering') !!}
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6">

                    <h4>Traditional Chinese</h4>
                    {!! BootForm::text('name:tc', '名稱') !!}
                    {!! BootForm::text('address:tc', '地址') !!}
                    {!! BootForm::text('opening_hour:tc', '開放時間') !!}
                    {!! BootForm::text('phone:tc', '電話') !!}
                    {!! BootForm::text('email:tc', '電郵') !!}

                </div>

                <div class="col-md-6">

                    <h4>English</h4>

                    {!! BootForm::text('name:en', 'Name') !!}
                    {!! BootForm::text('address:en', 'Address') !!}
                    {!! BootForm::text('opening_hour:en', 'Opening Hour') !!}
                    {!! BootForm::text('phone:en', 'Phone') !!}
                    {!! BootForm::text('email:en', 'Email') !!}

                </div>


            </div>

            <hr>

            {!! BootForm::submit() !!}

            {!! BootForm::close() !!}

        </div>

    </div>

    @if( $center->exists )


        <div class="box box-solid box-danger">
            <div class="box-header">
                Delete Service Center
            </div>

            <div class="box-body">

                {!! BootForm::open(['class' => 'delete-form', 'method' => 'DELETE', 'url' => route('admin.service_centers.destroy', $center)]) !!}

                <p>
                    <strong>Delete this service center ?</strong>

                </p>

                <button type="submit" class="btn btn-danger">Delete</button>

                {!! BootForm::close() !!}
            </div>

        </div>

    @endif

@stop

@section('css')

@stop

@section('js')

    <script>

        $('.delete-form').on('submit', function(e){
            return (confirm('Confirm to delete ?, It cannot undo'));
        });

    </script>
@endsection