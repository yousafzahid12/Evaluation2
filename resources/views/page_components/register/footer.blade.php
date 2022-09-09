

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

<script src="/assets/dist/js/adminlte.min.js"></script>
<script src="assets/dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<script type="text/javascript">

var today = new Date();

var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
}

if(mm<10) {
    mm = '0'+mm
}

// today = yyyy + '/' + mm + '/' + dd;
 today = yyyy + '-' + mm + '-' + dd;

console.log(today);
document.getElementById('dateto1').value = today;
   </script>



<script>
    $(document).ready(function () {
    $('#profileupdate-form').validate({ // initialize the plugin
        rules: {
            password: {
            required: true,
            minlength:8
        },

        confirmpassword: {
        required: true,
       equalTo: '[name="password"]',
        minlength:8,
    },
        }
    });
});
</script>
</body>
</html>
