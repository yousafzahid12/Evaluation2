<!DOCTYPE html>
<html lang="en" style="height: auto;" class="">
<x-scripts />
<body class="sidebar-mini sidebar-open" style="height: auto;">

<x-header />

    <div class="content-wrapper ml-0" style="min-height: 800px;">
        <!-- Content Header (Page header) -->
<x-db_content />
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="leaddocs" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>

                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Co-operated_By</th>
                                        <th>Created_By</th>
                                        <th>Shared_By</th>
                                        <th>Recieved_By</th>
                                        <th>Created_At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($leads as $leads)
                                    <tr>
                                        <td>{{$leads->id}}</td>
                                        <td>{{$leads->name}}</td>
                                        <td>{{$leads->name1}}</td>
                                        <td>{{$leads->user_name}}</td>
                                        <td>{{$leads->share1}}</td>
                                        <td>{{$leads->recieve}}</td>
                                        <td>{{$leads->created_at}}</td>
{{--                                        <td>{{$leads->share1}}</td>--}}
{{--                                        <td>{{$leads->recieve}}</td>--}}

                                    </tr>
                                    @endforeach
{{--                                    @foreach($name as $names)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$names->name}}</td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<x-footer />

</div>


<script>
    $(function () {

        $('#leaddocs').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

    });

</script>
</body>
</html>
