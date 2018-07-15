@extends('admin.layouts.'.$authUserType)

@section('style')
    <style>
        #links {
            display: none;
            opacity: 0.7;
            font-size: small;
        }

        tr:hover #links {
            display: block;
            margin-top: 3px;
        }

        th {
            color: #0f0f0f;
            background-color: #acacac;
        }

        th p {
            text-align: center;
            margin-top: 7px;
        }

        tr {
            text-align: center;
        }

        td #content {
            margin-bottom: 5px;
        }

        td a {
            color: #008347;
        }
    </style>
@endsection

@section('header')
    <section class="content-header">
        <h1>
            مدیریت محتوا
            <br>
            <small>لیست تمام {{ $title }} ها</small>
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
                @if(count($contents)==0)
                    <p style="text-align: center">لیست {{ $title }} ها برای شما خالی است</p>
                    <br>
                @else
                    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th>
                                <p>عنوان</p>
                            </th>
                            <th>
                                <p>تاریخ</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contents as $content)
                            <tr>
                                <td style="width: 75%">
                                    <a id="content"
                                       href="{{ url('/content/'.$content->id) }}">{{ $content->title }}</a>
                                    <br>
                                    <p id="links">
                                        <a href="{{ route('admin::contents.video.edit', $content->id) }}" style="color: #ea7500">ویرایش</a>
                                        &nbsp&nbsp|&nbsp&nbsp
                                        <a href="{{ route('admin::contents.video.delete', $content->id) }}"
                                           style="color: red">حذف</a>
                                    </p>
                                </td>
                                <td style="width: 25%">
                                    <p id="content" style="direction: ltr">{{ $content->create_date }}</p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                @endif
            </div>
        </div>
    </div>
@endsection