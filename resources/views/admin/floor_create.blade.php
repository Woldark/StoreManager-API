@extends('admin.layouts.admin')

@section('header')
    <section class="content-header">
        <h1>
            طبقات
            <br>
            <small>طبقه جدید</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">مشخصات طبقه</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{ route('admin::floors.create') }}">
                        {{ csrf_field() }}
                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="نام"
                                       name="name" tabindex="1" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" tabindex="2" name="publish"
                                       class="btn center-block btn-success" value="ذخیره">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection