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

            @endif


            <form action="/login" method="post" id="login-form" class="login-form" >
                @csrf

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="input-group mb-3">
                    <input type="email" class="form-control"  placeholder="Email" name="email"  >

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div id="email-error" class="error invalid-feedback"></div>
                    <div class="invalid-feedback">Please fill out this field.</div>

                </div>

                <div class="input-group mb-3">

                    <input type="password" class="form-control"  placeholder="Password" name="password" >

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <div id="password-error" class="error invalid-feedback"></div>

                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>


            <p class="mt-2">
                <a href="{{route('password.request')}}">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="/" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->

<!-- /.social-auth-links -->

<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/assets/dist/js/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {
        $('#login-form').validate({
            rules: {

                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    digits: true,
                    minlength:8

                },
            },
            errorElement: 'div',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
            },
            highlight: function (element, errorClass, validClass) {
             $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>


</body>
</html>
