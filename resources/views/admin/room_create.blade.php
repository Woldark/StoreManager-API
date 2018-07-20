@extends('admin.layouts.admin')

@section('header')
    <section class="content-header">
        <h1>
            اتاق ها
            <br>
            <small>اتاق جدید</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">مشخصات اتاق</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{ route('admin::rooms.create') }}">
                        {{ csrf_field() }}
                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group{{ $errors->has('floor') ? ' has-error' : '' }}">
                                <label for="floor" class="pull-right" style="direction: rtl;">طبقه :</label>
                                <select id="floor" style="text-align: center; direction: rtl;"
                                        class="form-control" tabindex="1"
                                        name="floor" required>
                                    @foreach($floors as $floor)
                                        <option value="{{ $floor->id }}">{{ 'ساختمان ' . $floor->building->name . ' - طبقه ' . $floor->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('floor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('floor') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <br>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="نام"
                                       name="name" tabindex="2" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('barcode') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="بارکد"
                                       name="barcode" tabindex="3" required>

                                @if ($errors->has('barcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="submit" tabindex="4" name="publish"
                                       class="btn center-block btn-success" value="ذخیره">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection