<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>SurfsideMedia</title>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="font/fonts.css">
    <link rel="stylesheet" href="icon/style.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.ico">

</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">

                <!-- <div id="preload" class="preload-container">
    <div class="preloading">
        <span></span>
    </div>
</div> -->

                @include('admin.sidebar')
                <div class="section-content-right">
                
                @include('admin.header')


                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Coupon infomation</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="#">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="text-tiny">Coupons</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">New Coupon</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wg-box">
                                    <form class="form-new-product form-style-1" method="POST" action="{{route('admin.coupon.store')}}">
                                        @csrf
                                        <fieldset class="name">
                                            <div class="body-title">Coupon Code <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Coupon Code" name="code"
                                                tabindex="0" value="{{old('code')}}" aria-required="true" required="">
                                        </fieldset>
                                        @error('code') <sapn class="alert alert-danger text-center">{{$message}}</sapn>@enderror
                                        <fieldset class="category">
                                            <div class="body-title">Coupon Type</div>
                                            <div class="select flex-grow">
                                                <select class="" name="type">
                                                    <option value="">Select</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        @error('type') <sapn class="alert alert-danger text-center">{{$message}}</sapn>@enderror
                                        <fieldset class="name">
                                            <div class="body-title">Value <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Coupon Value" name="value"
                                                tabindex="0" value="{{old('value')}}" aria-required="true" required="">
                                        </fieldset>
                                        @error('value') <sapn class="alert alert-danger text-center">{{$message}}</sapn>@enderror
                                        <fieldset class="name">
                                            <div class="body-title">Cart Value <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Cart Value"
                                                name="cart_value" tabindex="0" value="{{old('cart_value')}}" aria-required="true"
                                                required="">
                                        </fieldset>
                                        @error('cart_value') <sapn class="alert alert-danger text-center">{{$message}}</sapn>@enderror
                                        <fieldset class="name">
                                            <div class="body-title">Expiry Date <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="date" placeholder="Expiry Date"
                                                name="expiry_date" tabindex="0" value="{{old('expiry_date')}}" aria-required="true"
                                                required="">
                                        </fieldset>
                                        @error('expiry_date') <sapn class="alert alert-danger text-center">{{$message}}</sapn>@enderror

                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 SurfsideMedia</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/apexcharts/apexcharts.js"></script>
    <script src="js/main.js"></script>
</body>

</html>