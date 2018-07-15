@extends('admin.layouts.'.$authUserType)

@section('header')
    <section class="content-header">
        <h1>
            بنر ها
            <br>
            <small>ایجاد بنر جدید</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="box box-success col-md-offset-1 col-md-10">
            <div class="box-header">
                <h3 class="box-title" style="color: #008347">اطلاعات بنر</h3>
            </div>
            <div class="box-body" id="chat-box">
                <br>
                <form role="form" action="{{ route('admin::banners.edit') }}" method="post"
                      enctype="multipart/form-data">
                    <div class="row" style="padding-right: 15px;padding-left: 15px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $banner->id }}">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="pull-right" style="direction:rtl;">عنوان :</label>
                            <input id="title" type="text" style="text-align: center"
                                   class="my_font form-control" value="{{ $banner->title }}"
                                   name="title" tabindex="1" required>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                            <label for="link" class="pull-right" style="direction:rtl;">لینک :</label>
                            <input id="link" type="text" style="text-align: center"
                                   class="my_font form-control" value="{{ $banner->link }}"
                                   name="link" tabindex="2">

                            @if ($errors->has('link'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <p style="color: red">
                            <small>* در صورت استفاده از لینک های خارجی از http استفاده کنید</small>
                        </p>
                        <p style="color: red">
                            <small>* لینک های داخلی از root آغاز می شوند</small>
                        </p>
                    </div>
                    <br>
                    @if($banner->thumbnail)
                        <div style="text-align: center">
                            <img src="{{ asset('thumbnails/banners/' . $banner->thumbnail) }}"
                                 style="width: 20%; height: 20%">
                        </div>
                        <br>
                    @endif
                    <div class="center-block form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        @if($banner->thumbnail)
                            <label for="image" class="pull-right img-input-title">عکس جدید
                                : </label>
                        @else
                            <label for="image" class="pull-right img-input-title">عکس
                                : </label>
                        @endif
                        <input id="image" type="file" tabindex="2"
                               name="image" accept="image/jpeg, image/png, image/gif">
                        @if ($errors->has('image'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                        @endif
                        <br>
                        <p style="color: red">
                            <small>* سایز عکس ها 315*425 می باشد</small>
                        </p>
                        <p style="color: red">
                            <small>* حجم مناسب = کمتر از 250 کیلوبایت</small>
                        </p>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="submit" tabindex="4" name="publish"
                               class="btn center-block btn-success" value="ثبت کردن">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection