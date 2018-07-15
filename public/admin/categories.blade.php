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
            دسته بندی ها
            <br>
            <small>لیست تمام دسته بندی ها</small>
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
                @if(count($categories)==0)
                    <p style="text-align: center">دسته بندی برای شما ثبت نشده است</p>
                    <br>
                @else
                    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th>
                                <p>عکس</p>
                            </th>
                            <th>
                                <p>عنوان</p>
                            </th>
                            <th>
                                <p>تاریخ</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td style="width: 10%">
                                    <a href="{{ url('/categories/' . $category->id) }}">
                                        @if($category->thumbnail)
                                            <img src="{{ asset('/thumbnails/categories/' . $category->thumbnail) }}"
                                                 title="{{ $category->name }}" width="50px"
                                                 height="50px"/>
                                        @else
                                            <img src="{{ asset('/main/images/no-image.svg') }}" width="50px"
                                                 height="50px" title="{{ $category->name }}"/>
                                        @endif
                                    </a>
                                </td>
                                <td style="width: 70%">
                                    <a id="content"
                                       href="{{ url('/categories/' . $category->id) }}">{{ $category->name }}</a>
                                    <br>
                                    <p id="links">
                                        <a href="{{ url('/management/category_edit/' . $category->id) }}" style="color: #ea7500">ویرایش</a>
                                        &nbsp&nbsp|&nbsp&nbsp
                                        <a href="{{ url('/management/category/delete/' . $category->id) }}"
                                           style="color: red">حذف</a>
                                    </p>
                                </td>
                                <td style="width: 20%">
                                    <p id="content" style="direction: ltr">{{ $category->create_date }}</p>
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