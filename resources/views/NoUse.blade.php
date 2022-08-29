{{-- <html>
<head>
    <title>NextBridge Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/assets/plugins/moment/moment.min.js"></script>
    <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/assets/dist/js/demo.js"></script>
</head>
<style>
    body{
        display: flex;
    }
.profile{
height: 700px;
    width: 700px;
    background-color: lightgrey;
padding: 6px;
    border: 2px solid black;
    border-radius: 4px;
    margin-left: 400px;
    margin-top: 20px;
    position: relative;
}
.viewer{
    margin-left: 200px;
    position: relative;
}
.sec{
    display: flex;
    position: relative;
}

</style>


<body>

<section class="sec ">
    <main class="profile" >
                <img class="viewer" src="/images/logo.jpeg" height="300px" width="300px">
        <h1 class="text-center font-bold text-xl">Update Credentials</h1>
        <form method="POST" action="/register" class="mt-10">
            @csrf
            <div class="mb-6 " >
                <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email" v>
                    ID:
                </label>
                <a class="">{{$members->id}}</a>
            </div>
            <div class="mb-6 " >
                <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
                    Name:
                </label>
                <input class="border border-grey-400 p-2 w-full" type="name"  name="name" id="name" required value="{{$members->name}}">


            </div>

            <div class="mb-6 " >
                <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email" >
                    Email:
                </label>
                <input class="border border-grey-400 p-2 w-full" type="email" value=" {{$members->email}}"  name="email" id="email" required>

            </div>




            </div>

            <div class="mb-6 " >
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 " >
                    Submit
                </button>
            </div>


        </form>
    </main>
</section>
</body> --}}
