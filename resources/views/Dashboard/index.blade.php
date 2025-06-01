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

        <div id="header-placeholder"></div>

        <div id="sidebar-placeholder"></div>

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
    <script>
    $(document).ready(function() {
        // Memuat Header
        $("#header-placeholder").load("layout/_header.html", function(response, status, xhr) {
            if (status == "success") {
                console.log("Header berhasil dimuat.");
                if (typeof feather !== 'undefined') {
                    feather.replace();
                }
            } else if (status == "error") {
                console.error("Gagal memuat _header.html: " + xhr.status + " " + xhr.statusText);
                $("#header-placeholder").html("<p style='color:red; padding: 10px;'>Gagal memuat header.</p>");
            }
        });

        // Memuat Sidebar
        $("#sidebar-placeholder").load("layout/_sidebar.html", function(response, status, xhr) {
            if (status == "success") {
                console.log("Sidebar berhasil dimuat. Menginisialisasi komponen sidebar...");
                
                var $sidebarContainer = $(this); 

                // 1. Inisialisasi ulang SlimScroll
                const $slimScrollDiv = $sidebarContainer.find('.slimscroll');
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
                    console.log("SlimScroll diinisialisasi untuk sidebar.");
                } else {
                    console.warn("Elemen .slimscroll tidak ditemukan atau plugin jQuery slimScroll belum siap.");
                }

                // 2. Atur Link Aktif untuk halaman saat ini
                var currentPageFile = window.location.pathname.split("/").pop();
                if (currentPageFile === "" || !currentPageFile.includes(".html")) { 
                    currentPageFile = "index.html";
                }

                var $sidebarMenu = $sidebarContainer.find('#sidebar-menu');

                // Bersihkan semua status aktif dan terbuka dari SEMUA item menu terlebih dahulu
                $sidebarMenu.find('li.active').removeClass('active');
                $sidebarMenu.find('a.active').removeClass('active');
                $sidebarMenu.find('a.subdrop').removeClass('subdrop');
                // Sembunyikan semua submenu (ul di dalam li.submenu)
                $sidebarMenu.find('li.submenu > ul').css('display', 'none');

                // Cari link <a> yang href-nya cocok dengan halaman saat ini (misalnya, link "Product List")
                const $targetLink = $sidebarMenu.find('a[href="' + currentPageFile + '"]');

                if ($targetLink.length) {
                    // (A) Aktifkan link <a> subitem halaman saat ini (misalnya, "Product List")
                    // Ini akan memberikan gaya seperti bulatan terisi atau warna teks khusus.
                    $targetLink.addClass('active');
                    
                    // (B) Untuk <li> yang berisi $targetLink (misalnya <li> "Product List")
                    // JANGAN tambahkan kelas 'active' jika Anda tidak ingin background biru tua di sini.
                    // CSS untuk 'a.active' seharusnya cukup untuk menyorot subitem.
                    // Jika Anda butuh kelas di <li> untuk styling subitem (selain bg biru), gunakan kelas lain atau sesuaikan CSS.
                    // $targetLink.parent('li').addClass('active'); // --> KEMUNGKINAN INI TIDAK PERLU ATAU PERLU KELAS BERBEDA

                    // (C) Cari elemen <li> dengan kelas 'submenu' yang merupakan induk dari link aktif (misalnya <li> "Product")
                    let $parentSubmenuLi = $targetLink.closest('li.submenu');
                    if ($parentSubmenuLi.length) {
                        // Tambahkan kelas 'active' ke LINK <a> utama dari menu induk (misalnya link "Product")
                        // Ini yang seharusnya memberikan background biru pada "Product" (seperti gambar kedua Anda)
                        $parentSubmenuLi.children('a:first').addClass('active'); 
                        
                        // Tambahkan kelas 'subdrop' ke LINK <a> utama dari menu induk (untuk ikon panah)
                        $parentSubmenuLi.children('a:first').addClass('subdrop'); 
                        
                        // Tampilkan submenu <ul> yang ada di bawahnya
                        $parentSubmenuLi.children('ul').css('display', 'block');
                    }
                    console.log("Link aktif diatur untuk: " + currentPageFile);
                } else {
                    console.warn("Link aktif untuk " + currentPageFile + " tidak ditemukan di sidebar.");
                    // Fallback: Jika tidak ada yang cocok, aktifkan Dashboard (index.html)
                    if (currentPageFile === "index.html") {
                         $sidebarMenu.find('a[href="index.html"]').parent('li').addClass('active');
                    }
                }

                // 3. Inisialisasi ulang Feather Icons
                if (typeof feather !== 'undefined') {
                    feather.replace();
                    console.log("Feather icons diinisialisasi untuk sidebar.");
                }

                // 4. INGAT: Pastikan script.js sudah dimodifikasi untuk Event Delegation
                //    (mengubah $("#sidebar-menu a").on("click",...) 
                //    menjadi $("#sidebar-placeholder").on("click", "#sidebar-menu a",...))
                //    agar klik pada menu dropdown berfungsi dengan benar.

                console.log("Inisialisasi komponen sidebar selesai.");

            } else if (status == "error") {
                console.error("Gagal memuat _sidebar.html: " + xhr.status + " " + xhr.statusText);
                $("#sidebar-placeholder").html("<p style='color:red; padding: 10px;'>Gagal memuat sidebar.</p>");
            }
        });
    });
    </script>
</body>

</html>