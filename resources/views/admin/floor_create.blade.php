@extends('admin.layouts.admin')

@section('header')
    <section class="content-header">
        <h1>
            طبقه ها
            <br>
            <small>طبقه جدید</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">مشخصات طبقه</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{ route('admin::floors.create') }}">
                        {{ csrf_field() }}
                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group{{ $errors->has('building') ? ' has-error' : '' }}">
                                <label for="building" class="pull-right" style="direction: rtl;">ساختمان :</label>
                                <select id="building" style="text-align: center; direction: rtl;"
                                        class="form-control" tabindex="1"
                                        name="building" required>
                                    @foreach($buildings as $building)
                                        <option value="{{ $building->id }}">{{ $building->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('building'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('building') }}</strong>
                                    </span>
                                @endif
                            </div>

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
                            <div class="form-group">
                                <input type="submit" tabindex="3" name="publish"
                                       class="btn center-block btn-success" value="ذخیره">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection