<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Login</title>
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/styles.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-primary text-white">Login to your account</div>
        <div class="card-body">
          @if(session('error'))
            <div class="alert alert-danger">
              {{session('error')}}
            </div>
          @endif
          <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="username" name="email" class="form-control" placeholder="username" required="required" autofocus="autofocus">
                <label for="username">Enter Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <div class="text-right">
              <input type="submit" value="Login" class="btn btn-primary">
            </div>
          </form>
          <div class="text-center">
            <br>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
