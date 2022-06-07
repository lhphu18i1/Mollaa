@extends('layouts.admin_master')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('frontend/css/edit.css') }}">
    </head>

    <body>
        <div class="container">
            <div>
                <section class="section clearfix">
                    <div>
                        <div class="seccontactform">
                            <form action="{{ route('put.update.product', $pro->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <li style="color: red">{{ $error }}</li>
                                    @endforeach
                                @endif
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="name" placeholder="@lang('messages.product_name')"
                                        value="{{ $pro['name'] }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="file" name="image"
                                        placeholder="@lang('messages.pro_img')" accept="image/png, image/gif, image/jpeg" multiple
                                        value="{{ $pro['image'] }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="size" placeholder="@lang('messages.product_size')"
                                        value="{{ $pro['size'] }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="price"
                                        placeholder="@lang('messages.pro_price')" value="{{ $pro['price'] }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="color"
                                        placeholder="@lang('messages.pro_color')" value="{{ $pro['color'] }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="quantity"
                                        placeholder="@lang('messages.quantity')" value="{{ $pro['quantity'] }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="pro_cat" placeholder="@lang('messages.pro_cat')"
                                        value="{{ $pro['pro_cat'] }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="info" placeholder="@lang('messages.pro_inf')"
                                        value="{{ $pro['info'] }}">
                                </div>
                                <div class="clearfix">
                                    <input type="submit" value="@lang('messages.edit')">
                                    <a href="{{ route('get.view.product') }}"
                                        class="buttons">@lang('messages.back_admin')</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </body>
@stop
