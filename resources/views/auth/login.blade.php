

@include('page_components.login.header')


            <form action="/login" method="post" id="login-form" class="login-form" >
                @csrf

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="input-group mb-3">
                    <input type="email" class="form-control"  placeholder="Email" name="email"  >

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div id="email-error" class="error invalid-feedback"></div>
                    <div class="invalid-feedback">Please fill out this field.</div>

                </div>

                <div class="input-group mb-3">

                    <input type="password" class="form-control"  placeholder="Password" name="password" >

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <div id="password-error" class="error invalid-feedback"></div>

                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>


@include('page_components.login.footer')
