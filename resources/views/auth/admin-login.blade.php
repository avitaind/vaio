<!DOCTYPE html>

<html lang="{{LaravelLocalization::getCurrentLocale()}}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">

    <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>

    <title></title>
  </head>
  <body>
      <div class="login-box mx-auto col-10 col-lg-6 px-0">
        <div class="login-heading bg-dark text-white py-3">
          <img src="{{asset('images/icons/logo.png')}}" class="d-block mx-auto mb-4">
          <h1 class="text-center">Admin Login</h1>
        </div>
         @if ($errors->has('email'))
           <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
           </span>
         @endif

        <form id="regis-form" class="px-4 py-5 p-lg-5" method="post" action="{{ route('admin.login') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="font-weight-bold">Email:</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Password</label>
            <input type="password" class="form-control" name="password">
          </div>

          <div class="form-group text-center mt-4">
            <input class="btn submit-btn" href="javascript:void(0)" type="submit" value="送出"></input>
          </div>
        </form>
      </div>
  </body>
</html>
