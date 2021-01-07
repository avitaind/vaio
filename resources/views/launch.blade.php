@extends ('layout.app')

@section('title', __('common.nav.launch.title'))

@section('content')

    <section class="launch-event-section" style="padding: 150px;">
             <div class="container">
                            <div class="row">
                               <div class="col-12">
                  
                               @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                               @endif

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
                                   
                                     <form action="{{ route('launch.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" required>
                                            </div>

                                        </div>
                                      
                                        <div class="form-group row">
                                            <div class="col-md-6 text-md-right">
                                                <button type="submit" style="margin:10px;" class="btn btn-primary">Submit</button>
                                            </div>
                                            <div class="col-md-6 text-md-left">
                                                <button type="reset" style="margin:10px;" class="btn btn-primary ">Reset</button>
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


   