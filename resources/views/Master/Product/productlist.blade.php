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

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product List</h4>
                        <h6>Manage your products</h6>
                    </div>
                    <div class="page-btn">
                        <a href="addproduct.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img"
                                class="me-1">Add New Product</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-path">
                                    <a class="btn btn-filter" id="filter_search">
                                        <img src="assets/img/icons/filter.svg" alt="img">
                                        <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                    </a>
                                </div>
                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                            alt="img"></a>
                                </div>
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                                src="assets/img/icons/pdf.svg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                                src="assets/img/icons/excel.svg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                                src="assets/img/icons/printer.svg" alt="img"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card mb-0" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Product</option>
                                                        <option>Macbook pro</option>
                                                        <option>Orange</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Category</option>
                                                        <option>Computers</option>
                                                        <option>Fruits</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Sub Category</option>
                                                        <option>Computer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Brand</option>
                                                        <option>N/D</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12 ">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Price</option>
                                                        <option>150.00</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <a class="btn btn-filters ms-auto"><img
                                                            src="assets/img/icons/search-whites.svg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table  datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Product Name</th>
                                        <th>SKU</th>
                                        <th>Category </th>
                                        <th>Brand</th>
                                        <th>price</th>
                                        <th>Unit</th>
                                        <th>Qty</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product1.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Macbook pro</a>
                                        </td>
                                        <td>PT001</td>
                                        <td>Computers</td>
                                        <td>N/D</td>
                                        <td>1500.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product2.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Orange</a>
                                        </td>
                                        <td>PT002</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product3.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Pineapple</a>
                                        </td>
                                        <td>PT003</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product4.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Strawberry</a>
                                        </td>
                                        <td>PT004</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product5.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Avocat</a>
                                        </td>
                                        <td>PT005</td>
                                        <td>Accessories</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>150.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product6.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Macbook Pro</a>
                                        </td>
                                        <td>PT006</td>
                                        <td>Shoes</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product7.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Apple Earpods</a>
                                        </td>
                                        <td>PT007</td>
                                        <td>Shoes</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product8.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">iPhone 11 </a>
                                        </td>
                                        <td>PT008</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product9.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">samsung </a>
                                        </td>
                                        <td>PT009</td>
                                        <td>Earphones</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product11.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Banana</a>
                                        </td>
                                        <td>PT0010</td>
                                        <td>Health Care </td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>kg</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product17.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Limon</a>
                                        </td>
                                        <td>PT0011</td>
                                        <td>Health Care </td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>kg</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
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

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

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