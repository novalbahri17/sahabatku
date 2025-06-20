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
                        <h4>Product List</h4>
                        <h6>Manage your products</h6>
                    </div>
                    <div class="page-btn">
                        {{-- Mengarahkan ke rute 'product/add' --}}
                        <a href="{{ url('product/add') }}" class="btn btn-added"><img src="{{ asset('assets/img/icons/plus.svg') }}" alt="img"
                                class="me-1">Add New Product</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-path">
                                    <a class="btn btn-filter" id="filter_search">
                                        <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img">
                                        <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>
                                    </a>
                                </div>
                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                                src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                                src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                                src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>
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
                                            <div class="col-lg-1 col-sm-6 col-12 ">
                                                <div class="form-group">
                                                    <a class="btn btn-filters ms-auto"><img
                                                            src="{{ asset('assets/img/icons/search-whites.svg') }}" alt="img"></a>
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
                                                <img src="{{ asset('assets/img/product/product1.jpg') }}" alt="product">
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
                                            {{-- Perbaiki link detail produk --}}
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            {{-- Perbaiki link edit produk --}}
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product2.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product3.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product4.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product5.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product6.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product7.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product8.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product9.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product11.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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
                                                <img src="{{ asset('assets/img/product/product17.jpg') }}" alt="product">
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
                                            <a class="me-3" href="{{ url('product/details') }}">
                                                <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('product/edit') }}">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
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


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
    $(document).ready(function() {
        // Inisialisasi Feather Icons
        if (typeof feather !== 'undefined') {
            feather.replace();
            console.log("Feather icons diinisialisasi.");
        }

        // Inisialisasi SlimScroll untuk sidebar (jika ada elemen dengan class .slimscroll)
        // Pastikan plugin jQuery slimScroll sudah dimuat
        const $slimScrollDiv = $('.sidebar-inner.slimscroll'); // Selector yang lebih spesifik jika diperlukan
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
    });
    </script>
</body>

</html>