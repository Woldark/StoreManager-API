@extends('admin.layouts.'.$authUserType)

@section('header')
    <section class="content-header">
        <h1>
            دسته بندی ها
            <br>
            <small>ایجاد دسته بندی جدید</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="box box-success col-md-offset-1 col-md-10">
            <div class="box-header">
                <h3 class="box-title" style="color: #008347">اطلاعات دسته بندی</h3>
            </div>
            <div class="box-body" id="chat-box">
                <br>
                <form role="form" action="{{ route('admin::categories.create') }}" method="post" enctype="multipart/form-data">
                    <div class="row" style="padding-right: 15px;padding-left: 15px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="pull-right" style="direction:rtl;">عنوان :</label>
                            <input id="name" type="text" style="text-align: center"
                                   class="my_font form-control"
                                   name="name" tabindex="1" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="center-block form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="image" class="pull-right" style="direction:rtl;">عکس :</label>
                        <input id="image" type="file" tabindex="2"
                               name="image" accept="image/jpeg, image/png, image/gif">
                        @if ($errors->has('image'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                        @endif
                        <br>
                        <p style="color: red">
                            <small>* عکس به صورت مربع باشد</small>
                        </p>
                        <p style="color: red">
                            <small>* حجم مناسب = کمتر از 250 کیلوبایت</small>
                        </p>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="submit" tabindex="3" name="publish"
                               class="btn center-block btn-success" value="ثبت کردن">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection