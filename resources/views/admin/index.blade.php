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
    <link rel="stylesheet" type="text/css" href="css/sweetalert.min.css">
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
                @include('admin.header')
                    
                    <div class="main-content">

                        <div class="main-content-inner">

                            <div class="main-content-wrap">
                                <div class="tf-section-2 mb-30">
                                    <div class="flex gap20 flex-wrap-mobile">
                                        <div class="w-half">

                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-shopping-bag"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Total Orders</div>
                                                            <h4>{{$dashboardDatas[0]->Total}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-dollar-sign"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Total Amount</div>
                                                            <h4>{{$dashboardDatas[0]->TotalAmount}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-shopping-bag"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Pending Orders</div>
                                                            <h4>{{$dashboardDatas[0]->TotalOrdered}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wg-chart-default">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-dollar-sign"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Pending Orders Amount</div>
                                                            <h4>{{$dashboardDatas[0]->TotalOrderedAmount}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="w-half">

                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-shopping-bag"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Delivered Orders</div>
                                                            <h4>{{$dashboardDatas[0]->TotalDelivered}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-dollar-sign"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Delivered Orders Amount</div>
                                                            <h4>{{$dashboardDatas[0]->TotalDeliveredAmount}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-shopping-bag"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Canceled Orders</div>
                                                            <h4>{{$dashboardDatas[0]->TotalCanceled}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wg-chart-default">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-dollar-sign"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Canceled Orders Amount</div>
                                                            <h4>{{$dashboardDatas[0]->TotalCanceledAmount}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Monthly revenue</h5>
                                        </div>
                                        <div class="flex flex-wrap gap40">
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t1"></div>
                                                        <div class="text-tiny">Total Revenue</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>${{$TotalAmount}}</h4>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t2"></div>
                                                        <div class="text-tiny">Pending</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>${{$TotalOrderedAmount}}</h4> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t2"></div>
                                                        <div class="text-tiny">Delivered</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>${{$TotalDeliveredAmount}}</h4> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t2"></div>
                                                        <div class="text-tiny">Canceled</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>${{$TotalCanceledAmount}}</h4> 
                                                </div>
                                            </div>
                                        </div>
                                        <div id="line-chart-8"></div>
                                    </div>

                                </div>
                                <div class="tf-section mb-30">

                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Recent orders</h5>
                                            <div class="dropdown default">
                                                <a class="btn btn-secondary dropdown-toggle" href="{{url('orders')}}">
                                                    <span class="view-all">View all</span>
                                                </a>
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
    <script src="js/sweetalert.min.js"></script>    
    <script src="js/apexcharts/apexcharts.js"></script>
    <script src="js/main.js"></script>
    
    <script>
$(function() {
    $("#search-input").on("keyup", function() {
        const searchQuery = $(this).val().trim();

        if (searchQuery.length < 3) {
            $("#box-content-search").html(''); // clear when too short
            return;
        }

        $.ajax({
            type: "GET",
            url: "{{ route('admin.search') }}",
            data: { query: searchQuery },
            dataType: "json",
            timeout: 5000, // prevent hanging forever

            success: function(data) {
                console.log("Search response:", data); // ← very important for debug

                $("#box-content-search").empty(); // better than .html('')

                if (!Array.isArray(data) || data.length === 0) {
                    $("#box-content-search").html('<li class="p-3 text-center text-muted">No products found</li>');
                    return;
                }

                const itemsHtml = data.map(item => {
                    const editUrl = "{{ route('admin.product.edit', ['id' => 'PRODUCT_ID']) }}"
                        .replace('PRODUCT_ID', item.id);

                    const imageSrc = item.image 
                        ? '/product_image/' + item.image 
                        : '/images/placeholder.jpg';

                    return `
                        <li>
                            <ul>
                                <li class="product-item gap14 mb-10">
                                    <div class="image no-bg">
                                        <img src="${imageSrc}" alt="${item.name}" style="max-width:60px;">
                                    </div>
                                    <div class="flex items-center justify-between gap20 flex-grow">
                                        <div class="name">
                                            <a href="${editUrl}" class="body-text">${item.name}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-10">
                                    <div class="divider"></div>
                                </li>
                            </ul>
                        </li>
                    `;
                });

                $("#box-content-search").html(itemsHtml.join(''));
            },

            error: function(xhr, status, error) {
                console.error("Search AJAX error:", status, error, xhr.responseText);
                $("#box-content-search").html(
                    '<li class="p-3 text-danger">Error loading results...</li>'
                );
            }
        });
    });
});
</script>

    <script>
        (function ($) {

            var tfLineChart = (function () {

                var chartBar = function () {

                    var options = {
                        series: [{
                            name: 'Total',
                            data: [{{$AmountM}}]
                        }, {
                            name: 'Pending',
                            data: [{{$OrderedAmountM}}]
                        },
                        {
                            name: 'Delivered',
                            data: [{{$DeliveredAmountM}}]
                        }, {
                            name: 'Canceled',
                            data: [{{$CanceledAmountM}}]
                        }],
                        chart: {
                            type: 'bar',
                            height: 325,
                            toolbar: {
                                show: false,
                            },
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '10px',
                                endingShape: 'rounded'
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        legend: {
                            show: false,
                        },
                        colors: ['#2377FC', '#FFA500', '#078407', '#FF0000'],
                        stroke: {
                            show: false,
                        },
                        xaxis: {
                            labels: {
                                style: {
                                    colors: '#212529',
                                },
                            },
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1
                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return "$ " + val + ""
                                }
                            }
                        }
                    };

                    chart = new ApexCharts(
                        document.querySelector("#line-chart-8"),
                        options
                    );
                    if ($("#line-chart-8").length > 0) {
                        chart.render();
                    }
                };

                /* Function ============ */
                return {
                    init: function () { },

                    load: function () {
                        chartBar();
                    },
                    resize: function () { },
                };
            })();

            jQuery(document).ready(function () { });

            jQuery(window).on("load", function () {
                tfLineChart.load();
            });

            jQuery(window).on("resize", function () { });
        })(jQuery);
    </script>
</body>

</html>