@extends('admin.layouts.'.$authUserType)

@section('header')
    <section class="content-header">
        <h1>
            مدیریت محتوا
            <br>
            <small>تنظیمات {{ $title }} ها</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="box box-success col-md-offset-1 col-md-10">
            <div class="box-header">
                <h3 class="box-title" style="color: #008347">جزئیات</h3>
            </div>
            <div class="box-body" id="chat-box">
                <a href="{{ route('admin::thumbnails.generate_all') }}" class="btn btn-success">
                    ایجاد پیش نمایش های جدید
                </a>
                <br>
                <br>
                <a href="{{ route('admin::thumbnails.generate_all') }}" class="btn btn-success">
                    ایجاد مجدد پیش نمایش ها
                </a>
            </div>
        </div>
    </div>
@endsection