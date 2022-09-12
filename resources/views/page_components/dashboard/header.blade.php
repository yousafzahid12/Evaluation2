<!DOCTYPE html>
<html lang="en" style="height: auto;" class="">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NextBridge | DataTables</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
        <script src="https://kit.fontawesome.com/eaaf251e65.js" crossorigin="anonymous"></script>

        </head>
<body class="sidebar-mini sidebar-open" style="height: auto;">

   @include('page_components.dashboard.navbar')

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
                            <a href="/add_user">
                            <button type="submit" class="btn btn-success pr-4 pl-4 text-bold">Add Users</button>
                            </a>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-right">
                                <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                                <div>
                                    <form method="GET" action="/search">
                                        @csrf
                                    <label>Search:</label>
                                    <input type="text" name="search" >
                                    <button>Search</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
