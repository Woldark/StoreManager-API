@extends('admin.layouts.base')

@section('sidebar')
    <ul class="sidebar-menu">
        <li @if (Route::is('admin::home')) class="active" @endif>
            <a href="{{ route('admin::home') }}">
                <i class="fa fa-dashboard"></i> <span>پیشخوان</span>
            </a>
        </li>

        <li class="treeview
        @if (Route::is('admin::types.index')) active @endif
        @if (Route::is('admin::types.create')) active @endif
            ">
            <a href="#"><i class="fa fa-book"></i> <span>دسته بندی ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::types.index') }}"><i class="fa fa-circle-o"></i>لیست دسته بندی ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::types.create') }}"><i class="fa fa-circle-o"></i> دسته بندی جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>مسئولین</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> لیست مسئولین</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> مسئول جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-info-circle"></i> <span>وضعیت</span>
                <i class="fa fa-angle-left pull-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> سرور</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> دیتابیس</a></li>
            </ul>
        </li>
    </ul>
@endsection