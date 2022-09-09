</div>

</div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('page_components.dashboard.downbar')

<!-- Control Sidebar -->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script class="styling">
    $(document).ready(function () {

    $('#updatepassword-form').validate({

    rules: {
        password: {
            required: true,
            minlength:8
        },
        newpassword: {
        required: true,
        minlength:8,

    },
    confirmnewpassword: {
        required: true,
       equalTo: '[name="newpassword"]',
        minlength:8,

    },
    },
    errorElement: 'div',
    });
    });
    </script>
<script class="styling">
    $(document).ready(function () {

    $('#update-profile').validate({

    rules: {
    name: {
        lettersonly: true

    },
    },
    errorElement: 'div',
    });
    });
    </script>


</div></body></html>
