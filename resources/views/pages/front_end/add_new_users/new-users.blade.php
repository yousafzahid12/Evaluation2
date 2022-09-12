@include('page_components.add_new_user.header')

<form action="/adduser" method="post" id="new-form">



    <div class="container" style="margin-top: 15px; margin-right:0px; margin-left:450px">
        @csrf

    <section class="content mt-5" style="justify-content: center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
                </div>
                @if(session('mail'))
                <div class="alert alert-success">
                    {{session('mail')}}
                    <a href="/dashboard"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                </div>
                @elseif(session('mail-fail'))
                <div class="alert alert-success">
                    {{session('mail-fail')}}
                    <a href="/dashboard"><i class="fa-sharp fa-solid fa-circle-xmark float-md-right"></i></a>
                </div>
            @endif
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" name="email">
                    </div>
                    <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter user_type_id" name="user_type_id" value="2">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirmpassword">
                      </div>
                  </div>


                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add User</button>
                  </div>

              </div>


            </div>

          </div>

        </div>
      </section>
    </div>
</form>
</body>
</html>
@include('page_components.add_new_user.footer')

