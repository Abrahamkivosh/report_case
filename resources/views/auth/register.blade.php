@extends("layouts.app")
@section('content')
<div class="card-body">
    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('register') }}">
        @csrf
        <h3 class="box-title m-b-20">Sign Up</h3>

        <div class="form-group ">
            <div class="col-xs-12">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Your phone" autofocus>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="password_confirmation" required autocomplete="password">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="form-group text-center pt-2">
            <div class="col-xs-12 p-b-20">
                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Register</button>
            </div>
        </div>

        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                Do not have an account? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Sign In</b></a>
            </div>
        </div>
    </form>

</div>
@endsection
