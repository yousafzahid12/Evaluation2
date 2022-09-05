@include('page_components.recover_password.header')

            <form action="{{route('password.update')}}" method="post" id="recover_form">

                @csrf
                @if(session('email'))
                    <p>{{session('email')}}</p>

                @endif
                <input type="hidden" name="token" value="{{$token}}">

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div id="email-error" class="error invalid-feedback"></div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div id="password-error" class="error invalid-feedback"></div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div id="password_confirmation-error" class="error invalid-feedback"></div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Change password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

@include('page_components.recover_password.footer')
