@include('page_components.dashboard.header')
{{-- @foreach($product as $products)
<tr>

    <td>{{$products->id}}</td>
    <td>{{$products->name}}</td>
    @endforeach --}}

        <table class="table table-bordered table-striped">
            <thead>
            <tr>

                <th>id</th>
                <th>Title</th>
                <th>Co-operated_By</th>
                <th>Created_By</th>
                <th>Shared_By</th>
                <th>Recieved_By</th>
                <th>Created_At</th>
                <th>Granted</th>
                <th>Actions</th>


            </tr>
            </thead>
            <tbody>


            @foreach($lead as $leads)
            <tr>

                <td>{{$leads->id}}</td>
                <td>{{$leads->name}}</td>
                <td>{{$leads->name1}}</td>
                <td>{{$leads->user_name}}</td>
                <td>{{$leads->shared_by}}</td>
                <td>{{$leads->shared_with}}</td>
                <td>{{$leads->created_at}}</td>
                <td>{{$leads->actions_granted}}</td>
                <td>
                  {{-- <a href="/search/{{ $leads->id  }}" > --}}
                    <?php

                     $access_list = getLeadAccess($leads->id);
                     foreach($access_list as $lsit){
                            if($lsit->action== 'read_only'){?>
                            <i class="fa-brands fa-readme"></i>
                            <?php }
                             if($lsit->action  == 'update'){?>
                                <i class="fa-regular fa-pen-to-square"></i>
                            <?php }
                            if($lsit->action  == 'delete'){?>
                                <a href="search/{{ $lsit->action }}" >
                                <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <?php }
                                if($lsit->action  == 'can_share')
                                {?>
                                <a href="search/{{ $lsit->action }}">
                                <i class="fa-solid fa-share-nodes"></i>
                                </a>
                            <?php }

                     }
                     ?>




                    </td>
            </tr>

            @endforeach

            </tbody>
            <tbody>
            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


          <span class="pagination justify-content-end mr-4"> {{ $lead->links() }}</span>




      </div>
            </div>

    <div id="sidebar-overlay"></div></div>

    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="/assets/plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/assets/dist/js/demo.js"></script>





     @include('page_components.dashboard.footer');

