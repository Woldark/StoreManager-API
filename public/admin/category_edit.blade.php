@extends('admin.layouts.'.$authUserType)

@section('header')
    <section class="content-header">
        <h1>
            دسته بندی ها
            <br>
            <small>ویرایش دسته بندی : {{ $category->name }}</small>
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
                <form role="form" action="{{ route('admin::categories.edit') }}" method="post" enctype="multipart/form-data">
                    <div class="row" style="padding-right: 15px;padding-left: 15px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $category->id }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="pull-right" style="direction:rtl;">عنوان :</label>
                            <input id="name" type="text" style="text-align: center"
                                   class="my_font form-control" value="{{ $category->name }}"
                                   name="name" tabindex="1" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    @if($category->thumbnail)
                        <div style="text-align: center">
                            <img src="{{ asset('thumbnails/categories/' . $category->thumbnail) }}"
                                 style="width: 20%; height: 20%">
                        </div>
                        <br>
                    @endif
                    <div class="center-block form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        @if($category->thumbnail)
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
                    <div class="form-group">
                        <a tabindex="4" style="margin-left: 50%"
                           class="btn btn-danger" href="{{ route('admin::categories.delete_thumbnail', $category->id) }}">حذف
                            عکس</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection