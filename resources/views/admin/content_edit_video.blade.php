@extends('admin.layouts.'.$authUserType)

@section('header')
    <section class="content-header">
        <h1>
            ویدئو ها
            <br>
            <small>ویرایش ویدئو</small>
        </h1>
    </section>
@endsection

@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="box box-success col-md-offset-1 col-md-10">
            <div class="box-header">
                <h3 class="box-title" style="color: #008347">اطلاعات ویدئو</h3>
            </div>
            <div class="box-body" id="chat-box">
                <br>
                <form role="form" action="{{ route('admin::contents.video.edit') }}" method="post"
                      enctype="multipart/form-data">
                    <div class="row" style="padding-right: 15px;padding-left: 15px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $video->id }}">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="pull-right" style="direction: rtl;">عنوان :</label>
                            <input id="title" type="text" style="text-align: center; direction: rtl;"
                                   class="my_font form-control" title="عنوان ویدئو" value="{{ $video->title }}"
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
                                            <option value="{{ $channel->id }}"
                                                    @if($video->channel_id == $channel->id) selected @endif>{{ $channel->name }}</option>
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
                                            <option value="{{ $category->id }}"
                                                    @if($video->category_id == $category->id) selected @endif> {{ $category->name }}</option>
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
                                      name="description" tabindex="1" required>{{ $video->description }}</textarea>

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
                                           class="my_font form-control" title="رده سنی مربوطه" value="{{ $video->age }}"
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
                                    <input id="hasSub" name="hasSub" type="checkbox" style="margin-right: 10px" @if($video->has_subtitle == 1) checked @endif>
                                </div>

                                <br>
                                <br>

                                <div class="form-group">
                                    <label for="hasPrice" class="pull-right" style="direction: rtl;">رایگان</label>
                                    <input id="hasPrice" name="hasPrice" type="checkbox" style="margin-right: 10px"
                                           @if(!$video->price) checked @endif>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                                    <label for="language" class="pull-right" style="direction: rtl;">زبان :</label>
                                    <input id="language" type="text" style="text-align: center; direction: rtl;"
                                           class="my_font form-control" title="زبان مکامله ویدئو"
                                           value="{{ $video->language }}"
                                           name="language" tabindex="1" required>

                                    @if ($errors->has('language'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('language') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <br>

                                <div class="center-block form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}" id="subGroup">
                                    <label for="subtitle" class="pull-right" style="direction: rtl; margin-left: 5px">فایل جدید : </label>
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
                                    <label for="price" class="pull-right" style="direction: rtl;">قیمت ( تومان ) :</label>
                                    <input id="price" type="text" style="text-align: center; direction: rtl;"
                                           class="my_font form-control" title="قیمت فروش" value="{{ $video->price }}"
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
                                   class="my_font form-control" title="تگ های ویدئو" value="{{ $video->tags }}"
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
                    <div class="form-group" id="confirm">
                        <input type="submit" tabindex="4" name="publish"
                               class="btn center-block btn-success" value="ذخیره تغییرات">
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
                $('div[id="subGroup"]').fadeIn();
            } else {
                $('div[id="subGroup"]').hide();
            }

            if ($('input[name="hasPrice"]').prop('checked')) {
                $('div[id="priceGroup"]').hide();
            } else {
                $('div[id="priceGroup"]').fadeIn();
            }

            $('input[name="hasSub"]').on('click', function () {
                if ($(this).prop('checked')) {
                    $('div[id="subGroup"]').fadeIn();
                } else {
                    $('div[id="subGroup"]').fadeOut();
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
@endsection