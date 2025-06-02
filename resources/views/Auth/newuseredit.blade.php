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

    <link rel="shortcut icon" type="image/x-xicon" href="{{ asset('assets/img/favicon.jpg') }}">

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
                        <h4>User Management</h4>
                        <h6>Edit/Update User</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" placeholder="williams1234">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" placeholder="williams1234@example.com">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="pass-group">
                                        <input type="password" class=" pass-input" value="123456">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" placeholder="+12163547758 ">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="select">
                                        <option>Manager</option>
                                        <option>Sales Man</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="pass-group">
                                        <input type="password" class=" pass-inputs" value="123456">
                                        <span class="fas toggle-passworda fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group uploadedimage">
                                    <label> Profile Picture</label>
                                    <div class="image-upload image-upload-new">
                                        {{-- Input file tidak perlu asset(), hanya img di dalamnya --}}
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="{{ asset('assets/img/customer/customer1.jpg') }}" alt="img">
                                            <div class="productviews">
                                                <div class="productviewscontent">
                                                    <div class="productviewsname">
                                                        <h2>macbookpro.jpg</h2>
                                                        <h3>581kb</h3>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hideset">x</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                                <a href="{{ url('userlists') }}" class="btn btn-cancel">Cancel</a>
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

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi Feather icons setelah seluruh halaman dimuat
            if (typeof feather !== 'undefined') {
                feather.replace();
                console.log("Feather icons initialized.");
            }

            // Inisialisasi SlimScroll
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
                console.warn("Elemen .slimscroll tidak ditemukan atau plugin jQuery slimScroll belum siap.");
            }
        });
    </script>
</body>

</html>