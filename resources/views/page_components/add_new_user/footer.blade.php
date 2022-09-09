</div>
<!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<script >
    $(document).ready(function () {

    $('#new-form').validate({

    rules: {
        name:{
            onlyletters:true,

        },
        email: {
        required: true,
        email:true,

    },
        password: {
            required: true,
            minlength:8
        },

        confirmpassword: {
        required: true,
       equalTo: '[name="password"]',
        minlength:8,
    },
    },
errorElement:'div'
    });
    });
    </script>
