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

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

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
                        <h4>PURCHASE LIST</h4>
                        <h6>Manage your purchases</h6>
                    </div>
                    <div class="page-btn">
                        <a href="addpurchase.html" class="btn btn-added">
                            <img src="{{ asset('assets/img/icons/plus.svg') }}" alt="img">Add New Purchases
                        </a>
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

                        <div class="card" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="datetimepicker cal-icon"
                                                placeholder="Choose Date">
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Reference">
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Supplier</option>
                                                <option>Supplier</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Status</option>
                                                <option>Inprogress</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Payment Status</option>
                                                <option>Payment Status</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="{{ asset('assets/img/icons/search-whites.svg') }}" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Supplier Name</th>
                                        <th>Reference</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Grand Total</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Payment Status</th>
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
                                        <td class="text-bolds">Apex Computers</td>
                                        <td>PT001</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Modern Automobile</td>
                                        <td>PT002</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>410</td>
                                        <td>410</td>
                                        <td>410</td>
                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">AIM Infotech</td>
                                        <td>PT003</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Best Power Tools</td>
                                        <td>PT004</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Best Power Tools</td>
                                        <td>PT005</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightred">UnPaid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Best Power Tools</td>
                                        <td>PT006</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightgreen">paid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Apex Computers</td>
                                        <td>PT007</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightyellow">Ordered</span></td>
                                        <td>1000</td>
                                        <td>500</td>
                                        <td>1000</td>
                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Apex Computers</td>
                                        <td>PT008</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Modern Automobile</td>
                                        <td>PT009</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>410</td>
                                        <td>410</td>
                                        <td>410</td>
                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">AIM Infotech</td>
                                        <td>PT010</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Best Power Tools</td>
                                        <td>PT011</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Best Power Tools</td>
                                        <td>PT012</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightred">UnPaid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Best Power Tools</td>
                                        <td>PT013</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                        <td>210</td>
                                        <td>120</td>
                                        <td>210</td>
                                        <td><span class="badges bg-lightgreen">paid</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td class="text-bolds">Apex Computers</td>
                                        <td>PT014</td>
                                        <td>19 Nov 2022</td>
                                        <td><span class="badges bg-lightyellow">Ordered</span></td>
                                        <td>1000</td>
                                        <td>500</td>
                                        <td>1000</td>
                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                        <td>
                                            <a class="me-3" href="editpurchase.html">
                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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

    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Re-initialize Feather icons after the whole page including includes is rendered
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
        });
    </script>
</body>

</html>