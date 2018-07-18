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
            <a href="#"><i class="fa fa-building"></i> <span>ساختمان ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::buildings.index') }}"><i class="fa fa-circle-o"></i> لیست ساختمان ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::buildings.create') }}"><i class="fa fa-circle-o"></i> ساختمان جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-flag"></i> <span>طبقه ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::floors.index') }}"><i class="fa fa-circle-o"></i> لیست طبقه ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::floors.create') }}"><i class="fa fa-circle-o"></i> طبقه جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>اتاق ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::rooms.index') }}"><i class="fa fa-circle-o"></i> لیست اتاق ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::rooms.create') }}"><i class="fa fa-circle-o"></i> اتاق جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>کالا ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::goods.index') }}"><i class="fa fa-circle-o"></i> لیست کالا ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::goods.create') }}"><i class="fa fa-circle-o"></i> کالای جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>مسئولین</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::responsibles.index') }}"><i class="fa fa-circle-o"></i> لیست مسئولین</a>
                </li>
                <li>
                    <a href="{{ route('admin::responsibles.create') }}"><i class="fa fa-circle-o"></i> مسئول جدید</a>
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