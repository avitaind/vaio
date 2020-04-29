@extends('layout.app')

@section('content')
    <section class="member-panel top-nav-padding ls-0">

        @include('member.greeting')

        <div class="row">
            <div class="col-12 col-md-3 pr-0" style="background-color: rgb(220, 221, 223); ">
                @include('member.sidebar')
            </div>

            <div class="col-12 col-md-7 offset-md-1 p-5">

                @yield('portal_content')

            </div>
        </div>

    </section>
@stop