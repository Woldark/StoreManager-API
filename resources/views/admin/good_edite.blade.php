@extends('admin.layouts.admin')

@section('header')
    <section class="content-header">
        <h1>
            کالا ها
            <br>
            <small>ویرایش اطلاعات</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">مشخصات کالا</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{ route('admin::goods.update') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $good->id }}">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="نام"
                                       name="name" tabindex="1" required value="{{ $good->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('kind') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="طبقه"
                                       name="kind" tabindex="1" required value="{{ $good->kind }}">

                                @if ($errors->has('kind'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kind') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('old_kind') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="طبقه قدیم"
                                       name="old_kind" tabindex="1" required value="{{ $good->old_kind }}">

                                @if ($errors->has('old_kind'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old_kind') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('property_number') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="شماره اموال"
                                       name="property_number" tabindex="1" required value="{{ $good->property_number }}">

                                @if ($errors->has('property_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('property_number') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('old_property_number') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder=" شماره اموال قدیم"
                                       name="old_property_number" tabindex="1" required value="{{ $good->property_number }}">

                                @if ($errors->has('old_property_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old_property_number') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="submit" tabindex="2" name="publish"
                                       class="btn center-block btn-success" value="ذخیره">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection