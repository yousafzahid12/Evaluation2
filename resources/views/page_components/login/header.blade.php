<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href=" /assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href=" /assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/assets/dist/css/screen.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eaaf251e65.js" crossorigin="anonymous"></script>



    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style type="text/css">
    body{
        background: #ddd;
    }
    .container{
        background: #fff;
        margin-top:100px;
    }
    .error{
        color:red;
    }
    .invalid-feedback{
        background-image: none;
    }
</style>
<body class="login-page" style="min-height: 291.969px;">
    <div class="login-box">
        <div class="login-logo">
            <img src="https://nextbridge.com/wp-content/uploads/2022/02/Group-187.svg">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                        <a href="/login"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                    </div>
                @elseif(session('mailfail'))
                    <div class="alert alert-success">
                        {{session('mailfail')}}
                       <a href="/login"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                    </div>
                @elseif(session('verifyfail'))
                    <div class="alert alert-success">
                        {{session('verifyfail')}}
                        <a href="/login"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                    </div>
                @elseif(session('passfail'))
                    <div class="alert alert-success">
                        {{session('passfail')}}
                        <a href="/login"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                    </div>
                    @elseif(session('fail'))
                    <div class="alert alert-success">
                        {{session('fail')}}
                        <a href="/login"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                    </div>

                @endif
