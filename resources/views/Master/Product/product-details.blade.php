<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.jpg') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        {{-- Menggunakan @include untuk Header --}}
        @include('layout._header')

        {{-- Menggunakan @include untuk Sidebar --}}
        @include('layout._sidebar')

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product Details</h4>
                        <h6>Full details of a product</h6>
                    </div>
                    {{-- Tombol Back ke Product List --}}
                    <div class="page-btn">
                        <a href="{{ url('product/list') }}" class="btn btn-primary">
                            <i data-feather="arrow-left"></i> Back 
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="bar-code-view">
                                    <img src="{{ asset('assets/img/barcode1.png') }}" alt="barcode">
                                    <a class="printimg">
                                        <img src="{{ asset('assets/img/icons/printer.svg') }}" alt="print">
                                    </a>
                                </div>
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>Product</h4>
                                            <h6>Macbook pro </h6>
                                        </li>
                                        <li>
                                            <h4>Category</h4>
                                            <h6>Computers</h6>
                                        </li>
                                        <li>
                                            <h4>Sub Category</h4>
                                            <h6>None</h6>
                                        </li>
                                        <li>
                                            <h4>Brand</h4>
                                            <h6>None</h6>
                                        </li>
                                        <li>
                                            <h4>Unit</h4>
                                            <h6>Piece</h6>
                                        </li>
                                        <li>
                                            <h4>SKU</h4>
                                            <h6>PT0001</h6>
                                        </li>
                                        <li>
                                            <h4>Minimum Qty</h4>
                                            <h6>5</h6>
                                        </li>
                                        <li>
                                            <h4>Quantity</h4>
                                            <h6>50</h6>
                                        </li>
                                        <li>
                                            <h4>Tax</h4>
                                            <h6>0.00 %</h6>
                                        </li>
                                        <li>
                                            <h4>Discount Type</h4>
                                            <h6>Percentage</h6>
                                        </li>
                                        <li>
                                            <h4>Price</h4>
                                            <h6>1500.00</h6>
                                        </li>
                                        <li>
                                            <h4>Status</h4>
                                            <h6>Active</h6>
                                        </li>
                                        <li>
                                            <h4>Description</h4>
                                            <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s,</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="slider-product-details">
                                    <div class="owl-carousel owl-theme product-slide">
                                        <div class="slider-product">
                                            <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="img">
                                            <h4>macbookpro.jpg</h4>
                                            <h6>581kb</h6>
                                        </div>
                                        <div class="slider-product">
                                            <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="img">
                                            <h4>macbookpro.jpg</h4>
                                            <h6>581kb</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Initialize Feather icons after the entire page is loaded
            if (typeof feather !== 'undefined') {
                feather.replace();
                console.log("Feather icons initialized.");
            }

            // Initialize SlimScroll if not already handled by script.js
            const $slimScrollDiv = $('.slimscroll');
            if ($slimScrollDiv.length && typeof $.fn.slimScroll === 'function') {
                $slimScrollDiv.slimScroll({
                    height: "auto",
                    width: "100%",
                    position: "right",
                    size: "7px",
                    color: "#ccc",
                    wheelStep: 10,
                    touchScrollStep: 100,
                    allowPageScroll: false
                });
                var wHeight = $(window).height() - 60;
                $slimScrollDiv.css('height', wHeight + 'px');
                if ($slimScrollDiv.parent().hasClass('slimScrollDiv')) {
                    $slimScrollDiv.parent().css('height', wHeight + 'px');
                }
                console.log("SlimScroll initialized for sidebar.");
            } else {
                console.warn("Element .slimscroll not found or jQuery slimScroll plugin not ready.");
            }

            // Initialize Owl Carousel for product images
            if ($('.product-slide').length) {
                $('.product-slide').owlCarousel({
                    items: 1,
                    margin: 30,
                    dots: false,
                    nav: true,
                    loop: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        1170: {
                            items: 1
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>