<!DOCTYPE html>
<html>

@include('partials.head')

<body class="hold-transition login-page">

    <div class="wrapper">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>PT. TOP SABA MANDIRI</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Silahkan Login</p>

                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                {{-- <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a> --}}
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
    </div>
    <!-- ./wrapper -->

@include('partials.script')

</body>
</html>
