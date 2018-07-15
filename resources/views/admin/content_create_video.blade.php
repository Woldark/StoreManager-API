@extends('admin.layouts.'.$authUserType)

@section('header')
    <section class="content-header">
        <h1>
            کانال ها
            <br>
            <small>ایجاد کانال جدید</small>
        </h1>
    </section>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('/admin/dist/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ url('/admin/dist/css/dropzone-custom.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="box box-success col-md-offset-1 col-md-10">
            <div class="box-header">
                <h3 class="box-title" style="color: #008347">اطلاعات ویدئو</h3>
            </div>
            <div class="box-body" id="chat-box">
                <br>
                <div class="row">
                    <div class="">
                        <p class="page-heading">فایل :<span id="counter"></span></p>
                        <form method="post" action="{{ route('admin::contents.video.upload') }}"
                              enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                            {{ csrf_field() }}
                            <div class="dz-message">
                                <div class="message">
                                    <p>فایل را اینجا رها کرده یا برای انتخاب کلیک کنید</p>
                                </div>
                            </div>
                            <div class="fallback">
                                <input type="file" name="file">
                            </div>
                        </form>
                    </div>
                </div>

                {{--Dropzone Preview Template--}}
                <div id="preview" style="display: none;">
                    <div class="dz-preview dz-file-preview">
                        <div class="dz-image"><img data-dz-thumbnail/></div>
                        <div class="dz-details">
                            <div class="dz-size"><span data-dz-size></span></div>
                            <div class="dz-filename"><span data-dz-name></span></div>
                        </div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                        <div class="dz-success-mark">
                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                <title>Check</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                   sketch:type="MSPage">
                                    <path
                                        d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                        id="Oval-2" stroke-opacity="0.198794158" stroke="#747474"
                                        fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                </g>
                            </svg>

                        </div>
                        <div class="dz-error-mark">
                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                <title>error</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                   sketch:type="MSPage">
                                    <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474"
                                       stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                        <path
                                            d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                            id="Oval-2" sketch:type="MSShapeGroup"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                {{--End of Dropzone Preview Template--}}
                <br>
                <form role="form" action="{{ route('admin::contents.video.create') }}" method="post"
                      enctype="multipart/form-data">
                    <div class="row" style="padding-right: 15px;padding-left: 15px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="pull-right" style="direction: rtl;">عنوان :</label>
                            <input id="title" type="text" style="text-align: center; direction: rtl;"
                                   class="my_font form-control" title="عنوان ویدئو"
                                   name="title" tabindex="1" required>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('channel') ? ' has-error' : '' }}">
                                    <label for="channel" class="pull-right" style="direction: rtl;">کانال :</label>
                                    <select id="channel" style="text-align: center; direction: rtl;"
                                            class="my_font form-control" tabindex="5"
                                            name="channel" required>
                                        @foreach($channels as $channel)
                                            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('channel'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('channel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                    <label for="category" class="pull-right" style="direction: rtl;">دسته بندی :</label>
                                    <select id="category" style="text-align: center; direction: rtl;"
                                            class="my_font form-control" tabindex="5"
                                            name="category" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="pull-right" style="direction: rtl;">توضیحات :</label>
                            <textarea id="description" style="text-align: center; direction: rtl;"
                                      class="my_font form-control" title="توضیحات ویدئو"
                                      name="description" tabindex="1" required></textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                    <label for="age" class="pull-right" style="direction: rtl;">رده سنی :</label>
                                    <input id="age" type="text" style="text-align: center; direction: rtl;"
                                           class="my_font form-control" title="رده سنی مربوطه"
                                           name="age" tabindex="1" required>

                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <br>

                                <div class="form-group">
                                    <label for="hasSub" class="pull-right" style="direction: rtl;">زیرنویس دارد</label>
                                    <input id="hasSub" name="hasSub" type="checkbox" style="margin-right: 10px">
                                </div>

                                <br>
                                <br>

                                <div class="form-group">
                                    <label for="hasPrice" class="pull-right" style="direction: rtl;">رایگان</label>
                                    <input id="hasPrice" name="hasPrice" type="checkbox" style="margin-right: 10px"
                                           checked>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                                    <label for="language" class="pull-right" style="direction: rtl;">زبان :</label>
                                    <input id="language" type="text" style="text-align: center; direction: rtl;"
                                           class="my_font form-control" title="زبان مکامله ویدئو"
                                           name="language" tabindex="1" required>

                                    @if ($errors->has('language'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('language') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <br>

                                <div class="center-block form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}">
                                    <input id="subtitle" type="file" tabindex="3"
                                           name="subtitle" accept=".srt">
                                    @if ($errors->has('subtitle'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('subtitle') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <br>

                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}" id="priceGroup">
                                    <label for="price" class="pull-right" style="direction: rtl;">قیمت :</label>
                                    <input id="price" type="text" style="text-align: center; direction: rtl;"
                                           class="my_font form-control" title="قیمت فروش"
                                           name="price" tabindex="1">

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="tags" class="pull-right" style="direction: rtl;">تگ ها :</label>
                            <input id="tags" style="text-align: center; direction: rtl;" type="text"
                                   class="my_font form-control" title="تگ های ویدئو"
                                   name="tags" tabindex="1" required>

                            @if ($errors->has('tags'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                            @endif
                            <p style="color: red; margin-top: 5px">
                                <small>* با - از هم جدا شوند</small>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <input name="videoID" id="videoID" type="hidden" value="-1">
                    <p id="uploadError" style="text-align: center; color: red;">جهت ثبت نهایی فایل خود را آپلود
                        نمایید</p>
                    <div class="form-group" id="confirm" style="display: none">
                        <input type="submit" tabindex="4" name="publish"
                               class="btn center-block btn-success" value="ثبت کردن">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type='application/javascript'>
        $(function () {
            if ($('input[name="hasSub"]').prop('checked')) {
                $('input[name="subtitle"]').fadeIn();
            } else {
                $('input[name="subtitle"]').hide();
            }

            if ($('input[name="hasPrice"]').prop('checked')) {
                $('div[id="priceGroup"]').hide();
            } else {
                $('div[id="priceGroup"]').fadeIn();
            }

            $('input[name="hasSub"]').on('click', function () {
                if ($(this).prop('checked')) {
                    $('input[name="subtitle"]').fadeIn();
                } else {
                    $('input[name="subtitle"]').fadeOut();
                }
            });

            $('input[name="hasPrice"]').on('click', function () {
                if ($(this).prop('checked')) {
                    $('div[id="priceGroup"]').fadeOut();
                } else {
                    $('div[id="priceGroup"]').fadeIn();
                }
            });
        });
    </script>

    <script src="{{ url('/admin/dist/js/dropzone.js') }}"></script>
    <script src="{{ url('/admin/dist/js/dropzone-config.js') }}"></script>
@endsection