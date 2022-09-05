<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Forgot Password</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eaaf251e65.js" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
    .status{
        background-color: lawngreen;
        padding-bottom: 8px;
        padding-top: 8px;
        text-align: center;
    }
</style>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img src="https://nextbridge.com/wp-content/uploads/2022/02/Group-187.svg">
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                    <a href="/forget-password"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right mt-0"></i></a>

                </div>
            @endif

            @if(session('no_user'))
                <div class="alert alert-success">
                    {{session('no_user')}}
                    <a href="/forget-password"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                </div>
            @endif
