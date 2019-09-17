@extends('user.applogin')

@section('head')

@endsection

@section('main-content')
    <article class="register__article">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12">
                    <h1 class="coda" align="center" >Sign up</h1>
                </div>

                {{--Form start here--}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="inputLabel">{{ __('Name') }}</label>

                            <input id="name" type="text" class="input {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group row">
                        <label for="email" class="inputLabel">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group row">
                        <label for="password" class="inputLabel">{{ __('Password') }}</label>

                            <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="inputLabel">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn login_sign_up_btn btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>


    </article>
@endsection

@section('footer')

@endsection







