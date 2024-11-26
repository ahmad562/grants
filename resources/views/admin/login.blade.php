<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="KPCIP Startup Grants">
    <meta name="keywords" content=" KPCIP Startup Grants">
    <title>Login - KPCIP Startup Grants</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/login/css/bootstrap.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/login/css/style.css') }}">

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">

                <div class="account-box">
                    <!-- Account Logo -->
                    <div class="account-logo">
                        <img src="{{ asset('public/assets/img/favicon.png') }}"  class="max-h-220 max-w-220 pt-2 "  style="width:220px; height:220px"  >
                        <h1 class="text-white py-4">KPCIP Startup Grants</h1>
                    </div>
                    <!-- /Account Logo -->
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <!-- Account Form -->
                        <form action="" method="post">
                        @include('admin.components.messages')
                        @csrf
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="username" value="{{ old('username') }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div>
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span> Remember me
                                </label>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('public/assets/login/js/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('public/assets/login/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/login/js/bootstrap.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('public/assets/login/js/app.js') }}"></script>
</body>

</html>
