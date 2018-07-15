@extends('auth.layouts.base')

@section('content')
    <div class="col-lg-offset-3 col-lg-6">
        <div class="form-box">
            <div class="form-top">
                <div class="form-top-left">
                    <h3>ثبت نام</h3>
                    <p>مشخصات خود را جهت ثبت نام وارد نمایید :</p>
                </div>
                <div class="form-top-right">
                    <i class="fa fa-pencil"></i>
                </div>
            </div>
            <div class="form-bottom">
                <form role="form" action="{{ route('register') }}" method="POST" class="registration-form">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" name="name" placeholder="نام و نام خانوادگی"
                               class="form-control" id="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block error-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                        @endif
                    </div>
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
                    <div class="form-group">
                        <input type="password" name="password_confirmation" placeholder="تکرار رمز عبور"
                               required
                               class="form-control" id="password_confirmation">
                    </div>
                    <div class="form-group">
                        <input type="password" name="token" placeholder="کلید مدیریت"
                               required
                               class="form-control" id="token">
                        @if ($errors->has('token'))
                            <span class="help-block error-block">
                                            <strong>{{ $errors->first('token') }}</strong>
                                        </span>
                        @endif
                    </div>
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                    {!! NoCaptcha::renderJs('fa') !!}
                    {!! NoCaptcha::display() !!}
                    <button type="submit" class="btn">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
@endsection
