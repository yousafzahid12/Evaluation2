@include('page_components.register.header')

            <form action="/register" method="post">
                @csrf

            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success">{{Illuminate\Support\Facades\Session::get('success')}}</div>
            @endif

            @if(\Illuminate\Support\Facades\Session::has('fail1'))
                <div class="alert alert-danger">{{Illuminate\Support\Facades\Session::get('fail')}}</div>
            @endif


                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">@error('name'){{$message}} @enderror</span>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">@error('email'){{$message}} @enderror</span>

                <div class="input-group mb-3">
                    <input type="number" name="user_type_id" class="form-control" placeholder="User_type">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">@error('user_type'){{$message}} @enderror</span>


                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">@error('password'){{$message}} @enderror</span>


                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="col-8 mt-2">
                <a href="/login" class="text-sm ">already have a membership?</a>
            </div>

@include('page_components.register.footer')
