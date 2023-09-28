@extends('template')

@section('login')

<div class="container-login">

  <div class="card-login">
    <h4>Login</h4>
    <form class="login-form" action="{{ route('post-login') }}" method="POST">
      <div class="form-group row">
        <label for="username">Email</label>
        <input type="text" id="email_address" class="form-control" name="email" placeholder="Enter your email">
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      </div>

      <div class="form-group row">
        <label for="password">Password</label>
        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>
      <button type="submit" class="my-3">Login</button>
    </form>
    <div class="switch">Don't have an account? <a href="registration">Register here</a></div>
  </div>
</div>

@endsection