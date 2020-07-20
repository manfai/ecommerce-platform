@extends('layouts.app')

@section('content')
<div style="margin-top:148px;">
    <div class="container">
        <div class="form-signin row justify-content-center form-signin">
            <div class="col-md-5 text-center mb-4">
                <h2 class="card-title mb-4 text-uppercase">{{ __('Welcome Back!!') }}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp" placeholder="{{ __('E-Mail Address') }}">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-check text-left">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                    <button type="submit" class="btn btn-block btn-danger">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link btn-block mt-3 text-muted text-center" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
