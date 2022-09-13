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
                <td>
                  <a href="/search/{{ $leads->id  }}" >
                        @if ($leads->actions_granted=='delete')
                           <i class="fa-solid fa-trash-can"></i>
                           @elseif ($leads->actions_granted=='update')
                           <i class="fa-regular fa-pen-to-square"></i>
                           @elseif ($leads->actions_granted=='read_only')
                           <i class="fa-brands fa-readme"></i>
                           @elseif ($leads->actions_granted=='share')
                           <i class="fa-solid fa-share-nodes"></i>
                           @endif
                    </a>
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
        <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true" value={{ $leads->id }}>
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
{{-- @foreach ($action as $actions)
<p>{{ $actions->id }} </p>
@endforeach --}}


                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>

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

