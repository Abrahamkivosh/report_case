@extends("layouts.app")
@section('content')
<div class="card-body">
    <form method="POST" class="form-horizontal form-material" id="loginform" action="{{ route('login') }}">
        @csrf
        <h3 class="box-title m-b-20">Sign In</h3>
        <div class="form-group ">
            <div class="col-xs-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input"  type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>

                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                    <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <div class="col-xs-12 p-b-20">
                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
            </div>
        </div>

        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                Do not have an account? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
            </div>
        </div>
    </form>
    <form class="form-horizontal"  action="{{ route('password.email') }}" id="recoverform" action="index.html">
        <div class="form-group ">
            <div class="col-xs-12">
                <h3>Recover Password</h3>
                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="email" required placeholder="Email"> </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection
