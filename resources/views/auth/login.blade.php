<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shrotcut icon" href="{{ asset('assets/images/logokecillanal.png') }}">
    <title>Lanal Banyuwangi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition login-page">
    <div class="login-box" style="background-color: #4E6766; ">
        <div class="login-logo p-3">
            <a href="{{ '/' }}">
                <img src="{{ asset('assets/images/logolanal.png') }}" class="img img-responsive"
                    style="width: auto; max-width: 80%;">
            </a>
        </div>
        <div class="form-login">
            <div class="login-card-body">
            <div class="text-center">
                <p class="login-box-msg mb-3" style="font-size: 20px;">Masuk ke akun admin</p>
            </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color: #4E6766; border: none;">
                                <span class="fas fa-envelope" style="color: white;"></span>
                            </div>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required
                            autocomplete="email" autofocus style="border-left: none;">
                        @error('email')
                            <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color: #4E6766; border: none;">
                                <span class="fas fa-key" style="color: white;"></span>
                            </div>
                        </div>
                        <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Kata sandi" required autocomplete="current-password" style="border-left: none;">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <div class="row justify-content-center mt-5">
                        <!-- /.col -->
                        <button type="submit" class="btn btn-block text-white" style="background-color: #4E6766;">Masuk</button>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>

</html>
