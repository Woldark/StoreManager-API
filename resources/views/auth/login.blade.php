@extends('auth.layouts.base')

@section('content')
    <div class="col-lg-offset-3 col-lg-6">
        <div class="form-box">
            <div class="form-top">
                <div class="form-top-left">
                    <h3>ورود</h3>
                    <p>اطلاعات کاربری را وارد نمایید :</p>
                </div>
                <div class="form-top-right">
                    <i class="fa fa-key"></i>
                </div>
            </div>
            <div class="form-bottom">
                <form role="form" action="{{ route('login') }}" method="POST" class="login-form">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" placeholder="آدرس ایمیل"
                               class="form-control" id="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block error-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" placeholder="رمز عبور"
                               class="form-control" id="password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="help-block error-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block error-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                    {!! NoCaptcha::renderJs('fa') !!}
                    {!! NoCaptcha::display() !!}
                    <button type="submit" class="btn">ورود</button>
                </form>
            </div>
        </div>
    </div>
@endsection
