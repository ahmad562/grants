<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Unauthorized Page - Grants</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.min.css')}}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('public/assets/css/line-awesome.min.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">

    </head>
    <body class="error-page">
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
			<div class="error-box">
				<h1>403</h1>
				<h3><i class="fa fa-warning"></i> Unauthorized Page</h3>
				<p>The page you are looking for is not authorized.</p>
				<a href="{{route('dashboard')}}" class="btn btn-custom">Back to Home</a>
			</div>
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{asset('public/assets/js/jquery-3.5.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('public/assets/js/app.js')}}"></script>
		
    </body>
</html>