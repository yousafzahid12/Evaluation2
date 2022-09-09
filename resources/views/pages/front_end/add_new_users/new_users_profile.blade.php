@include('page_components.register.header')

<form action="/new_user_update" method="post" id="profileupdate-form">

    @csrf
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

    <div class="input-group mb-3">

        <input type="text" name="name" class="form-control" placeholder="Full name" required value="{{ $users->name }}" readonly>

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ $users->email }}" readonly>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="date"  name="dateto1" id="dateto1" class="form-control" readonly>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>




    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" >

            <div class="input-group-text">
                <span class="fas fa-lock"></span>

        </div>
    </div>


    <input type="hidden" name="user_type_id" class="form-control" placeholder="user_type_id" value="2">


    <div class="input-group mb-3">
        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" >
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
