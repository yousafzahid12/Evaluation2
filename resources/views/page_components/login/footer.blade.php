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
