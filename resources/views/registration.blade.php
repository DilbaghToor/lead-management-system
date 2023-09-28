@extends('template')

@section('register')

<div class="container-fluid">
    <div class="container-login">
        <div class="card-login">
            <h4>Register Form</h4>
            <form class="login-form" action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Enter your full name"
                        required>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="form-group row">
                        <label for="email">Email</label>
                        <input type="email" id="email_address" class="form-control" name="email"
                            placeholder="Enter your email" required>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="new-password">New Password</label>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Enter your new password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label for="role">Select Role</label>
                        <input type="test" id="role" class="form-control" name="role"
                            placeholder="Enter role" required>
                    </div>
                    <button type="submit ">Register</button>
            </form>
            <div class="switch">Already have an account? <a href="login">Login here</a></div>
        </div>
    </div>
</div>

@endsection