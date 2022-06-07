<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('messages.admin_register')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <b>@lang('messages.admin_register')</b>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">@lang('messages.register_new')</p>

                <form action="{{ route('post.admin.register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="@lang('messages.full_name')" name="name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <span style="color: red">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="@lang('messages.email')" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span style="color: red">{{ $errors->first('email') }}</span>
                    @endif
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="@lang('messages.password')" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span style="color: red">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="@lang('messages.retype_password')" name="password_confirmation">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password_confirmation'))
                    <span style="color: red">{{ $errors->first('password') }}</span>
                    @endif
                    <input type="hidden" name="role" value="1">
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    <a href="#">@lang('messages.agree_terms')</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">@lang('messages.register')</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- @lang('messages.or') -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        @lang('messages.facebook_sign_in')
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        @lang('messages.google_sign_in')
                    </a>
                </div>

                <a href="{{ route('get.admin.login') }}" class="text-center">@lang('messages.already_membership')</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
