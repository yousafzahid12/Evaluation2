@include('page_components.register.header')

<form action="/adduser" method="post">

    @csrf

    <div class="input-group mb-3">
        <input type="text" name="name" class="form-control" placeholder="Full name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <span class="text-danger"></span>
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <span class="text-danger"></span>

    <span class="text-danger"></span>


    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>


    <span class="text-danger"></span>


    <div class="row ">
        <div class="col-8">

        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Add User</button>
        </div>
        <!-- /.col -->
    </div>
</form>
@include('page_components.register.footer')
