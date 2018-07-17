@extends('admin.layouts.admin')

@section('header')
    <section class="content-header">
        <h1>
            پیشخوان
            <br>
            <small>اطلاعات آماری</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $productCount }}</h3>
                    <p>کالای ثبت شده</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cube"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $responsibleCount }}</h3>
                    <p>مسئول ثبت شده</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $roomCount }}</h3>
                    <p>اتاق ثبت شده</p>
                </div>
                <div class="icon">
                    <i class="ion ion-qr-scanner"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ $buildingCount }}</h3>
                    <p>ساختمان ثبت شده</p>
                </div>
                <div class="icon">
                    <i class="ion ion-home"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3>{{ $floorCount }}</h3>
                    <p>طبقه ثبت شده</p>
                </div>
                <div class="icon">
                    <i class="ion ion-social-buffer"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>{{ $healthyProducts }}</h3>
                    <p>کالای سالم</p>
                </div>
                <div class="icon">
                    <i class="ion ion-checkmark-circled"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-olive">
                <div class="inner">
                    <h3>{{ $brokenProducts }}</h3>
                    <p>کالای خراب</p>
                </div>
                <div class="icon">
                    <i class="ion ion-close-circled"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
    </div>
@endsection