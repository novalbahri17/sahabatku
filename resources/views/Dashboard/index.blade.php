<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        {{-- Ini adalah cara yang benar untuk menyertakan header Blade --}}
        @include('layout._header') 

        {{-- Ini adalah cara yang benar untuk menyertakan sidebar Blade --}}
        @include('layout._sidebar') 

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash1.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                                <h6>Total Purchase Due</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash1">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                                <h6>Total Sales Due</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash2">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                                <h6>Total Sale Amount</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash3">
                            <div class="dash-widgetimg">
                                <span><img src="assets/img/icons/dash4.svg" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
                                <h6>Total Sale Amount</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>100</h4>
                                <h5>Customers</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>100</h4>
                                <h5>Suppliers</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>100</h4>
                                <h5>Purchase Invoice</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>105</h4>
                                <h5>Sales Invoice</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Purchase & Sales</h5>
                                <div class="graph-sets">
                                    <ul>
                                        <li>
                                            <span>Sales</span>
                                        </li>
                                        <li>
                                            <span>Purchase</span>
                                        </li>
                                    </ul>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            2022 <img src="assets/img/icons/dropdown.svg" alt="img" class="ms-2">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales_charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Recently Added Products</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="productlist.html" class="dropdown-item">Product List</a>
                                        </li>
                                        <li>
                                            <a href="addproduct.html" class="dropdown-item">Product Add</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive dataview">
                                    <table class="table datatable ">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Products</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="assets/img/product/product22.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">Apple Earpods</a>
                                                </td>
                                                <td>$891.2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="assets/img/product/product23.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">iPhone 11</a>
                                                </td>
                                                <td>$668.51</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="assets/img/product/product24.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">samsung</a>
                                                </td>
                                                <td>$522.29</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="assets/img/product/product6.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">Macbook Pro</a>
                                                </td>
                                                <td>$291.01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Expired Products</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>SNo</th>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Brand Name</th>
                                        <th>Category Name</th>
                                        <th>Expiry Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="javascript:void(0);">IT0001</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product2.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Orange</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>12-12-2022</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="javascript:void(0);">IT0002</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product3.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Pineapple</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>25-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="javascript:void(0);">IT0003</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product4.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Stawberry</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>19-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="javascript:void(0);">IT0004</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product5.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Avocat</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>20-11-2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>
    <script src="assets/js/script.js"></script>
    {{-- Script untuk inisialisasi seperti feather icons dan slimscroll mungkin perlu dipindahkan ke script.js atau diinisialisasi ulang di sini jika komponen tersebut berada di header/sidebar --}}
    <script>
        // Anda mungkin perlu memanggil inisialisasi Feather Icons dan SlimScroll setelah Blade `@include`
        // Karena elemen-elemen ini ada di dalam _header dan _sidebar.
        $(document).ready(function() {
            if (typeof feather !== 'undefined') {
                feather.replace();
                console.log("Feather icons diinisialisasi untuk seluruh halaman.");
            }

            const $slimScrollDiv = $('.slimscroll'); // Selector yang lebih umum jika ada di berbagai tempat
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
                console.log("SlimScroll diinisialisasi.");
            } else {
                console.warn("Elemen .slimscroll tidak ditemukan atau plugin jQuery slimScroll belum siap.");
            }

            // Bagian untuk mengatur link aktif di sidebar
            // Ini harus disesuaikan jika _sidebar.blade.php menjadi partial Blade
            // Anda bisa meneruskan variabel `currentPageFile` dari controller atau 
            // menanganinya di sisi client jika Anda masih ingin logikanya di JS.
            // Contoh sederhana dengan JavaScript setelah include partial:
            var currentPageFile = window.location.pathname.split("/").pop();
            if (currentPageFile === "" || !currentPageFile.includes(".")) { // Tidak perlu .html, bisa saja URL tanpa ekstensi
                currentPageFile = "dashboard"; // Jika URL root, anggap ini dashboard atau welcome
            }
            
            // Konversi URL rute Laravel ke nama file Blade yang sesuai
            switch(currentPageFile) {
                case 'newuser':
                    currentPageFile = 'newuser';
                    break;
                case 'userlists':
                    currentPageFile = 'userlists';
                    break;
                case 'dashboard':
                    currentPageFile = 'index'; // 'index.blade.php' di folder Dashboard
                    break;
                case 'add': // untuk /product/add
                    currentPageFile = 'addproduct';
                    break;
                case 'list': // untuk /product/list atau /transaksi/purchase/list
                    if (window.location.pathname.includes('/product/')) {
                        currentPageFile = 'productlist';
                    } else if (window.location.pathname.includes('/transaksi/purchase/')) {
                        currentPageFile = 'purchaselist';
                    }
                    break;
                case '': // Rute root '/'
                    currentPageFile = 'welcome';
                    break;
                default:
                    // Biarkan apa adanya atau set ke default jika tidak cocok
                    break;
            }

            // Hapus semua kelas active/subdrop yang mungkin sudah ada
            $('#sidebar-menu').find('li.active').removeClass('active');
            $('#sidebar-menu').find('a.active').removeClass('active');
            $('#sidebar-menu').find('a.subdrop').removeClass('subdrop');
            $('#sidebar-menu').find('li.submenu > ul').css('display', 'none');

            // Temukan link yang cocok
            let $targetLink = $('#sidebar-menu').find('a[href*="' + currentPageFile + '"]'); // Gunakan href* untuk pencarian substring

            if ($targetLink.length) {
                $targetLink.addClass('active');

                let $parentSubmenuLi = $targetLink.closest('li.submenu');
                if ($parentSubmenuLi.length) {
                    $parentSubmenuLi.children('a:first').addClass('active');
                    $parentSubmenuLi.children('a:first').addClass('subdrop');
                    $parentSubmenuLi.children('ul').css('display', 'block');
                }
                console.log("Link aktif diatur untuk: " + currentPageFile);
            } else {
                console.warn("Link aktif untuk " + currentPageFile + " tidak ditemukan di sidebar.");
                 // Fallback: Jika tidak ada yang cocok, aktifkan Dashboard
                if (currentPageFile === "index" || currentPageFile === "dashboard") {
                     $('#sidebar-menu').find('a[href="dashboard"]').addClass('active'); // Sesuaikan ini dengan href rute Dashboard Anda
                } else if (currentPageFile === "welcome") {
                    $('#sidebar-menu').find('a[href="/"]').addClass('active'); // Jika welcome ada di menu
                }
            }
        });
    </script>
</body>

</html>