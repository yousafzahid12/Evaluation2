<p class="mt-3 mb-1">
    <a href="/login">Login</a>
</p>
</div>
<!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../assetsplugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>



<script>
$(document).ready(function () {
$('#password_send_form').validate({
rules: {
    email: {
        required: true,
        email: true
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
