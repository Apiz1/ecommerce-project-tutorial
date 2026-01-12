<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <title>Surfside Media</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="surfside media" />
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <style>
    .pt-90 {
      padding-top: 90px !important;
    }

    .pr-6px {
      padding-right: 6px;
      text-transform: uppercase;
    }

    .my-account .page-title {
      font-size: 1.5rem;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 40px;
      border-bottom: 1px solid;
      padding-bottom: 13px;
    }

    .my-account .wg-box {
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      padding: 24px;
      flex-direction: column;
      gap: 24px;
      border-radius: 12px;
      background: var(--White);
      box-shadow: 0px 4px 24px 2px rgba(20, 25, 38, 0.05);
    }

    .bg-success {
      background-color: #40c710 !important;
    }

    .bg-danger {
      background-color: #f44032 !important;
    }

    .bg-warning {
      background-color: #f5d700 !important;
      color: #000;
    }

    .table-transaction>tbody>tr:nth-of-type(odd) {
      --bs-table-accent-bg: #fff !important;

    }

    .table-transaction th,
    .table-transaction td {
      padding: 0.625rem 1.5rem .25rem !important;
      color: #000 !important;
    }

    .table> :not(caption)>tr>th {
      padding: 0.625rem 1.5rem .25rem !important;
      background-color: #6a6e51 !important;
    }

    .table-bordered>:not(caption)>*>* {
      border-width: inherit;
      line-height: 32px;
      font-size: 14px;
      border: 1px solid #e1e1e1;
      vertical-align: middle;
    }

    .table-striped .image {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      flex-shrink: 0;
      border-radius: 10px;
      overflow: hidden;
    }

    .table-striped td:nth-child(1) {
      min-width: 250px;
      padding-bottom: 7px;
    }

    .pname {
      display: flex;
      gap: 13px;
    }

    .table-bordered> :not(caption)>tr>th,
    .table-bordered> :not(caption)>tr>td {
      border-width: 1px 1px;
      border-color: #6a6e51;
    }
  </style>
</head>


<body class="gradient-bg">
  @include('home.svg')
  <style>
    #header {
      padding-top: 8px;
      padding-bottom: 8px;
    }

    .logo__image {
      max-width: 220px;
    }
  </style>
  <div class="header-mobile header_sticky">
    <div class="container d-flex align-items-center h-100">
      <a class="mobile-nav-activator d-block position-relative" href="#">
        <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_nav" />
        </svg>
        <button class="btn-close-lg position-absolute top-0 start-0 w-100"></button>
      </a>

      <div class="logo">
        <a href="index.html">
          <img src="assets/images/logo.png" alt="Uomo" class="logo__image d-block" />
        </a>
      </div>

      <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_cart" />
        </svg>
        <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
      </a>
    </div>

    <nav
      class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
      <div class="container">
        <form action="#" method="GET" class="search-field position-relative mt-4 mb-3">
          <div class="position-relative">
            <input class="search-field__input w-100 border rounded-1" type="text" name="search-keyword"
              placeholder="Search products" />
            <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_search" />
              </svg>
            </button>
            <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
          </div>

          <div class="position-absolute start-0 top-100 m-0 w-100">
            <div class="search-result"></div>
          </div>
        </form>
      </div>

      <div class="container">
        <div class="overflow-hidden">
          <ul class="navigation__list list-unstyled position-relative">
            <li class="navigation__item">
              <a href="index.html" class="navigation__link">Home</a>
            </li>
            <li class="navigation__item">
              <a href="shop.html" class="navigation__link">Shop</a>
            </li>
            <li class="navigation__item">
              <a href="cart.html" class="navigation__link">Cart</a>
            </li>
            <li class="navigation__item">
              <a href="about.html" class="navigation__link">About</a>
            </li>
            <li class="navigation__item">
              <a href="contact.html" class="navigation__link">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="border-top mt-auto pb-2">
        <div class="customer-links container mt-4 mb-2 pb-1">
          <svg class="d-inline-block align-middle" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_user" />
          </svg>
          <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">My Account</span>
        </div>



        <ul class="container social-links list-unstyled d-flex flex-wrap mb-0">
          <li>
            <a href="#" class="footer__social-link d-block ps-0">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_facebook" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_twitter" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_instagram" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_pinterest" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  @include('home.header')

    <main class="pt-90" style="padding-top: 0px;">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Order Details</h2>
        <div class="row">
            <div class="col-lg-2">
    </li>
        </ul>           
       </div>
            <div class="col-lg-10">
             <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <h5>Ordered Details</h5>
                                        </div>
                                        <a class="tf-button style-1 w208" href="{{route('user.orders')}}">Back</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Order No</th>
                                                    <td>{{$order->id}}</td>
                                                    <th>Mobile</th>
                                                    <td>{{$order->phone}}</td>
                                                    <th>Zip Code</th>
                                                    <td>{{$order->zip}}</td>

                                                </tr>
                                                <tr>
                                                    <th>Order Date</th>
                                                    <td>{{$order->created_at}}</td>
                                                    <th>Delivered</th>
                                                    <td>{{$order->delivery_date}}</td>
                                                    <th>Canceled</th>
                                                    <td>{{$order->canceled_date}}</td>

                                                </tr>

                                                <tr>
                                                <th>Order Status</th>
                                                <td colspan="5">
                                                    @if($order->status == 'delivered')
                                                        <span class="badge bg-success">Delivered</span>
                                                    @elseif($order->status == 'canceled')
                                                        <span class="badge bg-danger">Canceled</span>
                                                    @else
                                                        <span class="badge bg-warning">Pending</span> <!-- Fixed text from "Delivered" to "Pending" for accuracy -->
                                                    @endif
                                                </td>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>

                                    <div class="divider"></div>
            </div>


             <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <h5>Ordered Items</h5>
                                        </div>
                                        
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">SKU</th>
                                                    <th class="text-center">Category</th>
                                                    <th class="text-center">Brand</th>
                                                    <th class="text-center">Options</th>
                                                    <th class="text-center">Return Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orderItems as $item)
                                                <tr>

                                                    <td class="pname">
                                                        <div class="image">
                                                            <img src="/product_image/{{$item->product->image}}" alt="{{$item->product->name}}" class="image">
                                                        </div>
                                                        <div class="name">
                                                            <a href="{{url('order', ['product_slug'=>$item->product->slug])}}" target="_blank"
                                                                class="body-title-2">{{$item->product->name}}</a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">${{$item->price}}</td>
                                                    <td class="text-center">{{$item->quantity}}</td>
                                                    <td class="text-center">{{$item->product->SKU}}</td>
                                                    <td class="text-center">{{$item->product->category->name}}</td>
                                                    <td class="text-center">{{$item->product->brand->name}}</td>
                                                    <td class="text-center">{{$item->options}}</td>
                                                    <td class="text-center">{{$item->rstatus == 0 ? "NO":"YES"}}</td>
                                                    <td class="text-center">
                                                      <div class="list-icon-function view-icon">
                                                   <div class="item eye">
                                                 <i class="icon-eye"></i>
                                                   </div>
                                                 </div>
                                             </td>
                                          </tr>
                                         @endforeach
                                     </tbody>
                                  </table>
                              </div>

                          <div class="divider"></div>
                      <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                                    
                  </div>
             </div>

             <div class="wg-box mt-5">
                      <h5>Shipping Address</h5>
                            <div class="my-account__address-item col-md-6">
                               <div class="my-account__address-item__detail">
                                 <p>{{$order->name}}</p>
                                 <p>{{$order->address}}</p>
                                 <p>{{$order->locality}}</p>
                                 <p>{{$order->city}} </p>
                                 <p>{{$order->landmark}}</p>
                                 <p>{{$order->zip}}</p>
                                 <br>
                                 <p>{{$order->phone}}</p>
                      </div>
                  </div>
             </div>

                  <div class="wg-box mt-5">
                      <h5>Transactions</h5>
                          <table class="table table-striped table-bordered table-transaction">
                              <tbody>
                                  <tr>
                                    <th>Subtotal</th>
                                    <td>${{$order->subtotal}}</td>
                                    <th>Tax</th>
                                    <td>${{$order->tax}}</td>
                                    <th>Discount</th>
                                    <td>${{$order->discount}}</td>
                                  </tr>
                                  <tr>
                                    <th>Total</th>
                                    <td>${{$order->total}}</td>
                                    <th>Payment Mode</th>
                                    <td>{{$transaction->mode}}</td>
                                    <th>Status</th>
                                  <td>
                                    @if($transaction->status == 'approved')
                                    <span class="badge bg-success">approved</span>
                                    @elseif($transaction->status == 'declined')
                                  <span class="badge bg-danger">Declined</span>
                                    @elseif($transaction->status == 'refunded')
                                  <span class="badge bg-secondary">Refunded</span>
                                    @else
                                    <span class="badge bg-warning">Pending</span>
                                    @endif
                                  </td>
                                  </tr>
                                  <tr>
                                  <th>Order Date</th>
                                  <td>2024-07-11 00:54:14</td>
                                  <th>Delivered Date</th>
                                   <td></td>
                                   <th>Canceled Date</th>
                                   <td></td>
                                </tr>
                            </tbody>
                   </table>
                </div>
                
                <div class="wg-box mt-5 text-right">
                  <form action="{{route('user.order.cancel')}}" method="POST">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="order_id" value="{{$order->id}}" />
                  <button type="submit" class="btn btn-danger cancel-order">Cancel Order</button>
                  </form>
                </div>
          </div>
        </div>
    </section>
</main>

  <hr class="mt-5 text-secondary" />
  @include('home.footer')

  <div id="scrollTop" class="visually-hidden end-0"></div>
  <div class="page-overlay"></div>

<script src="assets/js/plugins/jquery.min.js"></script>
<script src="assets/js/plugins/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/bootstrap-slider.min.js"></script>
<script src="assets/js/plugins/swiper.min.js"></script>
<script src="assets/js/plugins/countdown.js"></script>
<script src="assets/js/theme.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $(document).ready(function () {
        // Trigger form submit when button is clicked
        $('.cancel-order').on('click', function () {
            $(this).closest('form').submit();
        });

        // Handle form submit with confirmation
        $('.cancel-order-form').on('submit', function (e) {
            e.preventDefault(); // Stop immediate submit

            const form = this; // Native DOM form

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to cancel this order?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Native submit → bypasses jQuery handler, no loop
                }
            });
        });
    });
</script>
  
</body>

</html>