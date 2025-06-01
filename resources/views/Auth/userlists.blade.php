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

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
                        <h4>User List</h4>
                        <h6>Manage your User</h6>
                    </div>
                    <div class="page-btn">
                        <a href="newuser.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img">Add
                            User</a>
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

                        <div class="card" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter User Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="datetimepicker cal-icon"
                                                placeholder="Choose Date">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Disable</option>
                                                <option>Enable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="assets/img/icons/search-whites.svg" alt="img"></a>
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
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>User name </th>
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>Role</th>
                                        <th>Created On</th>
                                        <th>Status</th>
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
                                        <td>Thomas</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="fb8f9394969a88bb9e839a968b979ed5989496">[email&#160;protected]</a>
                                        </td>
                                        <td>Admin </td>
                                        <td>3/15/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>504Benjamin</td>
                                        <td>123-456-888</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="60031513140f0d0512200518010d100c054e030f0d">[email&#160;protected]</a>
                                        </td>
                                        <td>Manager </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightred badges">Restricted</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>James 524</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="a0cac1cdc5d3e0c5d8c1cdd0ccc58ec3cfcd">[email&#160;protected]</a>
                                        </td>
                                        <td>Salesman </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightred badges">Restricted</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>James 524</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="94fef5f9f1e7d4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a>
                                        </td>
                                        <td>Salesman </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightred badges">Restricted</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>Bruklin2022</td>
                                        <td>123-456-888</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="d4b6a6a1bfb8bdba94b1acb5b9a4b8b1fab7bbb9">[email&#160;protected]</a>
                                        </td>
                                        <td>Delivery Biker </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>BeverlyWIN25</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="6e0c1c1b050207002e0b160f031e020b400d0103">[email&#160;protected]</a>
                                        </td>
                                        <td>Delivery Biker </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>BHR256</td>
                                        <td>123-456-888</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="d098a5b2b5a290b5a8b1bda0bcb5feb3bfbd">[email&#160;protected]</a>
                                        </td>
                                        <td>Sales Executive</td>
                                        <td>3/15/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>Thomas</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="c5b1adaaa8a4b685a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</a>
                                        </td>
                                        <td>Admin </td>
                                        <td>3/15/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>504Benjamin</td>
                                        <td>123-456-888</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="62011711160d0f071022071a030f120e074c010d0f">[email&#160;protected]</a>
                                        </td>
                                        <td>Manager </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightred badges">Restricted</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>James 524</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="274d464a425467425f464a574b420944484a">[email&#160;protected]</a>
                                        </td>
                                        <td>Salesman </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightred badges">Restricted</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>James 524</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="e48e85898197a4819c8589948881ca878b89">[email&#160;protected]</a>
                                        </td>
                                        <td>Salesman </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightred badges">Restricted</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>Bruklin2022</td>
                                        <td>123-456-888</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="3b59494e505752557b5e435a564b575e15585456">[email&#160;protected]</a>
                                        </td>
                                        <td>Delivery Biker </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>BeverlyWIN25</td>
                                        <td>+12163547758 </td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="52302027393e3b3c12372a333f223e377c313d3f">[email&#160;protected]</a>
                                        </td>
                                        <td>Delivery Biker </td>
                                        <td>2/27/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                        <td>BHR256</td>
                                        <td>123-456-888</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="1b536e797e695b7e637a766b777e35787476">[email&#160;protected]</a>
                                        </td>
                                        <td>Sales Executive</td>
                                        <td>3/15/2022</td>
                                        <td><span class="bg-lightgreen badges">Active</span></td>
                                        <td>
                                            <a class="me-3" href="newuseredit.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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


    <div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Show Payments</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Reference</th>
                                    <th>Amount </th>
                                    <th>Paid By </th>
                                    <th>Paid By </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bor-b1">
                                    <td>2022-03-07 </td>
                                    <td>INV/SL0101</td>
                                    <td>$ 1500.00 </td>
                                    <td>Cash</td>
                                    <td>
                                        <a class="me-2" href="javascript:void(0);">
                                            <img src="assets/img/icons/printer.svg" alt="img">
                                        </a>
                                        <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment"
                                            data-bs-toggle="modal" data-bs-dismiss="modal">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-2 confirm-text" href="javascript:void(0);">
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


    <div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Payment</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Customer</label>
                                <div class="input-group">
                                    <input type="text" value="2022-03-07" class="datetimepicker">
                                    <a class="scanner-set input-group-text">
                                        <img src="assets/img/icons/datepicker.svg" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Reference</label>
                                <input type="text" value="INV/SL0101">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Received Amount</label>
                                <input type="text" value="1500.00">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Paying Amount</label>
                                <input type="text" value="1500.00">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Payment type</label>
                                <select class="select">
                                    <option>Cash</option>
                                    <option>Online</option>
                                    <option>Inprogress</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Note</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Payment</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Customer</label>
                                <div class="input-group">
                                    <input type="text" value="2022-03-07" class="datetimepicker">
                                    <a class="scanner-set input-group-text">
                                        <img src="assets/img/icons/datepicker.svg" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Reference</label>
                                <input type="text" value="INV/SL0101">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Received Amount</label>
                                <input type="text" value="1500.00">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Paying Amount</label>
                                <input type="text" value="1500.00">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Payment type</label>
                                <select class="select">
                                    <option>Cash</option>
                                    <option>Online</option>
                                    <option>Inprogress</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Note</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

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