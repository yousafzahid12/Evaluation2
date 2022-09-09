@include('page_components.profile.header')

                <form action="updatepassword" method="post" id="updatepassword-form" class="updatepassword-form" >
                    @csrf

                    @if(session('updated'))
                    <div class="alert alert-success">
                        {{session('updated')}}
                        <a href="/dashboard"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                    </div>
                    @endif


                  <div class="card-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input readonly type="email" class="form-control" placeholder="email" value="{{ Session('email') }}" name="email">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" placeholder="Current Password"  id="password" name="password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">New Password</label>
                        <div class="custom-file">
                          <input type="password" class="form-control" placeholder=" New Password" id="newpassword" name="newpassword" >
                        </div>
                    </div><br>


                    <div class="form-group">
                        <label for="exampleInputFile">Confirm Password</label>

                          <div class="custom-file">
                            <input type="password" class="form-control" placeholder="ConfirmNewPassword" name="confirmnewpassword" >
                        </div>
                      </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>


                </form>
              </div>

            </div>




            <div class="col-md-6">

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title float-none text-bold text-center">Update Profile</h3>
                </div>

    <form action="updateprofile" method="post" id="update-profile" enctype="multipart/form-data">
@csrf

        @if(session('image'))
        <div class="alert alert-success">
            {{session('image')}}
            <a href="/dashboard"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
        </div>
        @endif

                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email"   placeholder="Enter email" value={{ Session('email')  }} readonly>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        @foreach ($leads as $lead )
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name" value="{{ $lead->name}}" >
                        @endforeach
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="file" >
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>
<div>
                    <img src="{{asset('/'.$lead->file)}}" width= '100' height='100' class="img img-responsive rounded-top rounded-bottom float-right mr-3" />

</div><br>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

@include('page_components.profile.footer')
