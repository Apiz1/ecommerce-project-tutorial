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
    <link rel="stylesheet" type="text/css" href="css/custom.css">
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
                                    <h3>Orders</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Orders</div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name"
                                                        tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wg-table table-all-user">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width:70px">OrderNo</th>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Phone</th>
                                                        <th class="text-center">Subtotal</th>
                                                        <th class="text-center">Tax</th>
                                                        <th class="text-center">Total</th>

                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Order Date</th>
                                                        <th class="text-center">Total Items</th>
                                                        <th class="text-center">Delivered On</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orders as $order)
                                                    <tr>
                                                        <td class="text-center">{{$order->id}}</td>
                                                        <td class="text-center">{{$order->name}}</td>
                                                        <td class="text-center">{{$order->phone}}</td>
                                                        <td class="text-center">{{$order->subtotal}}</td>
                                                        <td class="text-center">{{$order->tax}}</td>
                                                        <td class="text-center">{{$order->total}}</td>
                                                        <td class="text-center">
                                                        @if($order->status == 'delivered')
                                                        <span class="badge bg-success">Delivered</span>
                                                        @elseif($order->status == 'canceled')
                                                        <span class="badge bg-danger">Canceled</span>
                                                         @else
                                                        <span class="badge bg-warning">Pending</span> <!-- Fixed text from "Delivered" to "Pending" for accuracy -->
                                                         @endif
                                                        </td>
                                                        <td class="text-center">{{$order->created_at}}</td>
                                                        <td class="text-center">{{$order->orderItems->count()}}</td>
                                                        <td class="text-center">{{$order->delivery_date}}</td>
                                                        <td class="text-center">
                                                            <a href="{{url('order',['order_id'=>$order->id])}}">
                                                                <div class="list-icon-function view-icon">
                                                                    <div class="item eye">
                                                                        <i class="icon-eye"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

                                    </div>
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