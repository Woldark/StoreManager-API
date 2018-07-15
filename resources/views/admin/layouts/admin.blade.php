@extends('admin.layouts.base')

@section('sidebar')
    <ul class="sidebar-menu">
        <li @if (Route::is('admin::home')) class="active" @endif>
            <a href="{{ route('admin::home') }}">
                <i class="fa fa-dashboard"></i> <span>پیشخوان</span>
            </a>
        </li>
        <li class="treeview
        @if (Route::is('admin::channels.index')) active @endif
        @if (Route::is('admin::channels.create')) active @endif
        @if (Route::is('admin::channels.edit')) active @endif
            ">
            <a href="#">
                <i class="fa fa-bullhorn"></i> <span>کانال ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::channels.index') }}"><i class="fa fa-circle-o"></i>لیست کانال ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::channels.create') }}"><i class="fa fa-circle-o"></i> کانال جدید</a>
                </li>
            </ul>
        </li>
        <li class="treeview
        @if (Route::is('admin::categories.index')) active @endif
        @if (Route::is('admin::categories.create')) active @endif
            ">
            <a href="#"><i class="fa fa-book"></i> <span>دسته بندی ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::categories.index') }}"><i class="fa fa-circle-o"></i>لیست دسته بندی ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::categories.create') }}"><i class="fa fa-circle-o"></i> دسته بندی جدید</a>
                </li>
            </ul>
        </li>
        <li class="treeview
        @if (Route::is('admin::contents.video.index')) active @endif
        @if (Route::is('admin::contents.video.create')) active @endif
        @if (Route::is('admin::contents.video.settings')) active @endif
            ">
            <a href="#"><i class="fa fa-image"></i> <span>محتوا</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin::contents.video.index') }}"><i class="fa fa-circle-o"></i> لیست ویدئو
                        ها</a></li>
                <li><a href="{{ route('admin::contents.video.create') }}"><i class="fa fa-circle-o"></i> ویدئو جدید</a>
                </li>
                <li><a href="{{ route('admin::contents.video.settings') }}"><i class="fa fa-circle-o"></i> تنظیمات ویدئو
                        ها</a></li>
                <div style="display: none">
                    <hr class="hrm">
                    <li><a href="{{ route('admin::contents.game.index') }}"><i class="fa fa-circle-o"></i> لیست بازی ها</a>
                    </li>
                    <li><a href="{{ route('admin::contents.game.create') }}"><i class="fa fa-circle-o"></i> بازی
                            جدید</a>
                    </li>
                    <hr class="hrm">
                    <li><a href="{{ route('admin::contents.app.index') }}"><i class="fa fa-circle-o"></i> لیست برنامه ها</a>
                    </li>
                    <li><a href="{{ route('admin::contents.app.create') }}"><i class="fa fa-circle-o"></i> برنامه
                            جدید</a>
                    </li>
                </div>
                <hr class="hrm">
                <li><a href="{{ route('admin::contents.photo.index') }}"><i class="fa fa-circle-o"></i> لیست عکس ها</a>
                </li>
                <li><a href="{{ route('admin::contents.photo.create') }}"><i class="fa fa-circle-o"></i> عکس جدید</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>بنر ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::banners.index') }}"><i class="fa fa-circle-o"></i> لیست بنر ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::banners.create') }}"><i class="fa fa-circle-o"></i> بنر جدید</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>کاربران</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> لیست کاربران</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> گزارش فعالیت ها</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-dollar"></i> <span>حسابداری</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> گزارش حساب</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> تراکنش ها</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-gear"></i> <span>تنظیمات</span>
                <i class="fa fa-angle-left pull-left"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> دیتابیس</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> وب هوک</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> وب سرویس</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> کلاینت</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-commenting"></i> <span>ارسال پیام</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> اس ام اس</a>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> پوش</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-handshake-o"></i> <span>تبلیغات</span>
                <i class="fa fa-angle-left pull-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> -</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> -</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-folder"></i> <span>مدیریت فایل</span>
                <i class="fa fa-angle-left pull-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> -</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> -</a></li>
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