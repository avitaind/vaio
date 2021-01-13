@extends ('layout.app')

@section('title', __('common.nav.event.title'))

@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
</style>

<section class="launch-event-section">
    <img src="/images/banner/event-web-banner.jpg" id="desktop" alt="VAIO Launch Event" width="100%" />
    <img src="/images/banner/event-mob-banner.jpg" id="mobile" alt="VAIO Launch Event" width="100%" />

             <div class="event-container">
                    <div class="row">
                          <div class="col-12">
                                   @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                   
                                     <form action="{{ route('event.registration') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                       <img src="images/events/registration.png" id="registrationimg"/>
                                        <div class="form-group row text-md-center">
                                        @if (session('status'))
                                          <div class="alert alert-success">
                                              {{ session('status') }}
                                          </div>
                                            @endif
                                            <div class="col-md-12 text-md-center">
                                                <input id="name" type="text" placeholder="NAME*" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 text-md-center">
                                                <input id="email" type="email"  placeholder="EMAIL*" class="form-control" name="email" required>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 text-md-center">
                                                <input id="phone" type="phone" placeholder="MOBILE"  class="form-control" name="phone">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                        <div class="col-md-12 text-md-center">
                                        <p id="terms"> <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)" required> &nbsp; I hereby confirm and acknowledge that details provided above are correct to my knowledge</p>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 text-md-center">
                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            </div>
                                            
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
             </section>
    <div class="gotop-wrap">
        <button class="btn-gotop">
            <span class="sr-only">Back to Top</span>
        </button>
    </div>

@stop