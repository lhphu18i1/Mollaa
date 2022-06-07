            @extends('layouts.master')
            @section('content')
                <main class="main">
                    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                        <div class="container">
                            <h1 class="page-title">@lang('messages.pro_cat')<span>@lang('messages.shop')</span></h1>
                        </div><!-- End .container -->
                    </div><!-- End .page-header -->
                    <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-with-filter">
                        <div class="container">
                            <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>@lang('messages.filters')</a>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">@lang('messages.home')</a></li>
                                <li class="breadcrumb-item"><a href="#">@lang('messages.category')</a></li>
                            </ol>
                        </div><!-- End .container -->
                    </nav><!-- End .breadcrumb-nav -->

                    <div class="page-content">
                        <div class="categories-page">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner banner-cat banner-badge">
                                            <a href="#">
                                                <img src="assets/images/category/boxed/banner-1.jpg" alt="Banner">
                                            </a>

                                            <a class="banner-link" href="#">
                                                <h3 class="banner-title">@lang('messages.dress')</h3><!-- End .banner-title -->
                                                <span class="banner-link-text">@lang('messages.shop_now')</span>
                                            </a><!-- End .banner-link -->
                                        </div><!-- End .banner -->

                                        <div class="banner banner-cat banner-badge">
                                            <a href="#">
                                                <img src="assets/images/category/boxed/banner-2.jpg" alt="Banner">
                                            </a>

                                            <a class="banner-link" href="#">
                                                <h3 class="banner-title">@lang('messages.jacket')</h3><!-- End .banner-title -->
                                                <span class="banner-link-text">@lang('messages.shop_now')</span>
                                            </a><!-- End .banner-link -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="banner banner-cat banner-badge">
                                                    <a href="#">
                                                        <img src="assets/images/category/boxed/banner-3.jpg" alt="Banner">
                                                    </a>

                                                    <a class="banner-link" href="#">
                                                        <h3 class="banner-title">@lang('messages.t-shirt')</h3><!-- End .banner-title -->
                                                        <!-- End .banner-subtitle -->
                                                        <span class="banner-link-text">@lang('messages.shop_now')</span>
                                                    </a><!-- End .banner-link -->
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <div class="banner banner-cat banner-badge">
                                                    <a href="#">
                                                        <img src="assets/images/category/boxed/banner-4.jpg" alt="Banner">
                                                    </a>

                                                    <a class="banner-link" href="#">
                                                        <h3 class="banner-title">@lang('messages.jean')</h3><!-- End .banner-title -->
                                                        <!-- End .banner-subtitle -->
                                                        <span class="banner-link-text">@lang('messages.shop_now')</span>
                                                    </a><!-- End .banner-link -->
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <div class="banner banner-cat banner-badge">
                                            <a href="#">
                                                <img src="assets/images/category/boxed/banner-5.jpg" alt="Banner">
                                            </a>

                                            <a class="banner-link" href="#">
                                                <h3 class="banner-title">@lang('messages.bag')</h3><!-- End .banner-title -->
                                                <span class="banner-link-text">@lang('messages.shop_now')</span>
                                            </a><!-- End .banner-link -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-sm-6 col-md-3">
                                        <div class="banner banner-cat banner-badge">
                                            <a href="#">
                                                <img src="assets/images/category/boxed/banner-6.jpg" alt="Banner">
                                            </a>

                                            <a class="banner-link" href="#">
                                                <h3 class="banner-title">@lang('messages.sportwear')</h3><!-- End .banner-title -->
                                                <span class="banner-link-text">@lang('messages.shop_now')</span>
                                            </a><!-- End .banner-link -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-3 -->

                                    <div class="col-sm-6 col-md-3 order-md-last">
                                        <div class="banner banner-cat banner-badge">
                                            <a href="#">
                                                <img src="assets/images/category/boxed/banner-8.jpg" alt="Banner">
                                            </a>

                                            <a class="banner-link" href="#">
                                                <h3 class="banner-title">@lang('messages.jumper')</h3><!-- End .banner-title -->
                                                <span class="banner-link-text">@lang('messages.shop_now')</span>
                                            </a><!-- End .banner-link -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-3 -->

                                    <div class="col-md-6">
                                        <div class="banner banner-cat banner-badge">
                                            <a href="#">
                                                <img src="assets/images/category/boxed/banner-7.jpg" alt="Banner">
                                            </a>

                                            <a class="banner-link" href="#">
                                                <h3 class="banner-title">@lang('messages.shoe')</h3><!-- End .banner-title -->
                                                <span class="banner-link-text">@lang('messages.shop_now')</span>
                                            </a><!-- End .banner-link -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .container -->
                        </div><!-- End .categories-page -->

                        <div class="sidebar-filter-overlay"></div><!-- End .sidebar-filter-overlay -->
                        <aside class="sidebar-shop sidebar-filter sidebar-filter-banner">
                            <div class="sidebar-filter-wrapper">
                                <div class="widget widget-clean">
                                    <label><i class="icon-close"></i>@lang('messages.filters')</label>
                                    <a href="#" class="sidebar-filter-clear">@lang('messages.clean')</a>
                                </div>
                                <div class="widget">
                                    <h3 class="widget-title">
                                        @lang('messages.browse_cat')
                                    </h3><!-- End .widget-title -->

                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-1">
                                                    <label class="custom-control-label" for="cat-1">@lang('messages.women')</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">3</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-2">
                                                    <label class="custom-control-label" for="cat-2">@lang('messages.men')</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-3">
                                                    <label class="custom-control-label" for="cat-3">Holiday Shop</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-4">
                                                    <label class="custom-control-label" for="cat-4">Gifts</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-5">
                                                    <label class="custom-control-label" for="cat-5">Homeware</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">0</span>
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-6"
                                                        checked="checked">
                                                    <label class="custom-control-label" for="cat-6">Grid Categories
                                                        Fullwidth</label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">13</span>
                                            </div><!-- End .filter-item -->

                                            <div class="sub-filter-items">
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-7">
                                                        <label class="custom-control-label" for="cat-7">Dresses</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">3</span>
                                                </div><!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-8">
                                                        <label class="custom-control-label" for="cat-8">T-shirts</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">0</span>
                                                </div><!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-9">
                                                        <label class="custom-control-label" for="cat-9">Bags</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">4</span>
                                                </div><!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-10">
                                                        <label class="custom-control-label" for="cat-10">Jackets</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">2</span>
                                                </div><!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-11">
                                                        <label class="custom-control-label" for="cat-11">Shoes</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">2</span>
                                                </div><!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-12">
                                                        <label class="custom-control-label" for="cat-12">Jumpers</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">1</span>
                                                </div><!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-13">
                                                        <label class="custom-control-label" for="cat-13">Jeans</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">1</span>
                                                </div><!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-14">
                                                        <label class="custom-control-label" for="cat-14">Sportwear</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count">0</span>
                                                </div><!-- End .filter-item -->
                                            </div><!-- End .sub-filter-items -->
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .widget -->
                            </div><!-- End .sidebar-filter-wrapper -->
                        </aside><!-- End .sidebar-filter -->
                    </div><!-- End .page-content -->
                </main><!-- End .main -->
            @stop()
