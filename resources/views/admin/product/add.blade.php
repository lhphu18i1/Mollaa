@extends('layouts.admin_master')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('frontend/css/add.css') }}">
    </head>

    <body>
        <div class="container">
            <div>
                <section class="section clearfix">
                    <div>
                        <div class="seccontactform">
                            <div class="margin-form">
                                <form action="{{ route('post.add.product') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <li style="color: red">{{ $error }}</li>
                                        @endforeach
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="name"
                                            placeholder="@lang('messages.pro_name')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="file" name="image"
                                            placeholder="@lang('messages.pro_image')" accept="image/png, image/gif, image/jpeg"
                                            multiple>
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="size"
                                            placeholder="@lang('messages.size')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="price"
                                            placeholder="@lang('messages.pro_price')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="color"
                                            placeholder="@lang('messages.pro_color')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="quantity"
                                            placeholder="@lang('messages.quantity')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="pro_cat"
                                            placeholder="@lang('messages.pro_cat')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="info"
                                            placeholder="@lang('messages.pro_inf')">
                                    </div>
                                    <div class="clearfix">
                                        <input type="submit" value="@lang('messages.add_new')">
                                        <a href="{{ route('get.view.product') }}"
                                            class="buttons">@lang('messages.back_admin')</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </body>
@stop
