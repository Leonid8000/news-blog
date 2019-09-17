@extends('user.applogin')

@section('head')

@endsection

@section('main-content')

    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="form-box">

                    @include('includes.messages')

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="coda">Log in</h1>
                            </div>

                            <div class="col-sm-12">
                                <div class="inputBox">
                                    <label for="email" class="inputLabel">Email</label>
                                    <input id="email" type="email" name="email" class="input {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="inputBox">
                                    <label for="password" class="inputLabel">Password</label>
                                    <input id="password" type="password" name="password" class="input {{ $errors->has('password') ? ' is-invalid' : '' }}" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{-- Remember me --}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-md-6 offset-md-4">--}}
                                    {{--<div class="form-check">--}}

                                        {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                                        {{--<label class="form-check-label remember coda" for="remember">--}}
                                            {{--Remember--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="login_sign_up_btn btn">
                                        {{ __('Login') }}
                                    </button>

                                    <a href="{{route('register')}}" class="login_sign_up_btn btn">
                                        Register
                                    </a>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link coda forgot" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                        </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</article>
@endsection

{{--@section('footer')--}}

{{--@endsection--}}



