@extends('layouts.admin_master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="" type="get" class="card-header">
                        <h3 class="card-title">@lang('messages.all_pro')</h3>
                        <div class="card-tools">
                            <div class="d-inline-block">
                                <div class="input-group input-group-sm" style="width: 150px">
                                    <input type="search" name="search" class="form-control float-right" placeholder="@lang('messages.search')" value="{{$search}}">
                                    <div class="input-group-append">
                                        <button type="get" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <a href="{{ route('get.add.product') }}"><button type="button" class="btn btn-success">@lang('messages.add_pro')</button></a>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>@lang('messages.pro_name')</th>
                                    <th>@lang('messages.pro_img')</th>
                                    <th>@lang('messages.size')</th>
                                    <th>@lang('messages.pro_price')</th>
                                    <th>@lang('messages.pro_color')</th>
                                    <th>@lang('messages.quantity')</th>
                                    <th>@lang('messages.pro_cat')</th>
                                    <th>@lang('messages.pro_inf')</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pro as $value)
                                    <tr>
                                        <td>{{ $value['name'] }}</td>
                                        <td><img src="/frontend/Images/{{ $value['image'] }}" width="100px"></td>
                                        <td>{{ $value['size'] }}</td>
                                        <td>{{ $value['price'] }}</td>
                                        <td>{{ $value['color'] }}</td>
                                        <td>{{ $value['quantity'] }}</td>
                                        <td>{{ $value['pro_cat'] }}</td>
                                        <td>{{ $value['info'] }}</td>
                                        <td>
                                            <a href="{{ route('get.edit.product', $value->id) }}"><button class="btn btn-block btn-primary">@lang('messages.edit')</button></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('get.delete.product', $value->id) }}"><button class="btn btn-block btn-danger">@lang('messages.del')</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {!! $pro->links() !!}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@stop
