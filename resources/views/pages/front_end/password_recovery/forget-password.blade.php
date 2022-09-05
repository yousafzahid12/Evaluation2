@include('page_components.forget_password.header')

    <form action="{{route('password.email')}}" method="post" id="password_send_form"  >
        @csrf

        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">Please fill out this field.</div>
        <div id="email-error" class="error invalid-feedback"></div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Request new password</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    @include('page_components.forget_password.footer')

