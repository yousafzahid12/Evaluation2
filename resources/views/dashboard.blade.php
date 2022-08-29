<!DOCTYPE html>
<html lang="en" style="height: auto;" class=""><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
</head>
<body class="sidebar-mini sidebar-open" style="height: auto;">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light ml-0">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item d-none d-sm-inline-block">
                <img class="hfe-site-logo-img elementor-animation- " src="https://nextbridge.com/wp-content/uploads/2022/02/Group-187.svg" alt="">
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="/logout" role="button">
                 <i class="fa-solid fa-right-from-bracket mt-1"></i>
                </a>
            </li>
        </ul>
    </nav>


    <div class="content-wrapper ml-0" style="min-height: 800px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="example2_wrapper" class="">
                                                <div class="row"><div class="col-sm-12 col-md-6">
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                                                        <thead>
                                                                        <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        <tr class="odd">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Firefox 1.0</td>
                                                                            <td>Win 98+ / OSX.2+</td>
                                                                            <td>1.7</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="even">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Firefox 1.5</td>
                                                                            <td>Win 98+ / OSX.2+</td>
                                                                            <td>1.8</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="odd">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Firefox 2.0</td>
                                                                            <td>Win 98+ / OSX.2+</td>
                                                                            <td>1.8</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="even">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Firefox 3.0</td>
                                                                            <td>Win 2k+ / OSX.3+</td>
                                                                            <td>1.9</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="odd">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Camino 1.0</td>
                                                                            <td>OSX.2+</td>
                                                                            <td>1.8</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="even">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Camino 1.5</td>
                                                                            <td>OSX.3+</td>
                                                                            <td>1.8</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="odd">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Netscape 7.2</td>
                                                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                                            <td>1.7</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="even">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Netscape Browser 8</td>
                                                                            <td>Win 98SE+</td>
                                                                            <td>1.7</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="odd">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Netscape Navigator 9</td>
                                                                            <td>Win 98+ / OSX.2+</td>
                                                                            <td>1.8</td>
                                                                            <td>A</td>
                                                                        </tr><tr class="even">
                                                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                                                            <td>Mozilla 1.0</td>
                                                                            <td>Win 95+ / OSX.1+</td>
                                                                            <td>1</td>
                                                                            <td>A</td>
                                                                        </tr></tbody>
                                                                        <tfoot>
                                                                        <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                                <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous">
                                                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="example2_next">
                                                        <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer ml-0">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright © 2022-2027 <a href="https://adminlte.io">NextBridge</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/eaaf251e65.js" crossorigin="anonymous"></script>
<!-- DataTables  & Plugins -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/jszip/jszip.min.js"></script>
<script src="/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
