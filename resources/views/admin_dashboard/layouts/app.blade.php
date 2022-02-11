<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('admin_dashboard/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	@yield("style")
	<link href="{{asset('admin_dashboard/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('admin_dashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('admin_dashboard/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('admin_dashboard/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('admin_dashboard/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('admin_dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('admin_dashboard/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('admin_dashboard/css/icons.css')}}" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('admin_dashboard/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_dashboard/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_dashboard/css/header-colors.css')}}" />
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>
    <style>
        .general-message{
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 5;
            border-radius: 50px;
            min-width: 500px;
        }
    </style>
<body>
    @if(Session::has('success'))
        <div class="general-message alert alert-info">{{Session::get('success')}}</div>
    @endif
	<!--wrapper-->
	<div class="wrapper">
		<!--start header -->
		@include("admin_dashboard.layouts.header")
		<!--end header -->
		<!--navigation-->
		@include("admin_dashboard.layouts.nav")
		<!--end navigation-->
		<!--start page wrapper -->
		@yield("wrapper")
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. Los derechos reservados para sedi.</p>
		</footer>
	</div>
	<!--end wrapper-->
    <!--start switcher-->
   
    <!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{asset('admin_dashboard/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('admin_dashboard/js/jquery.min.js')}}"></script>
	<script src="{{asset('admin_dashboard/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('admin_dashboard/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('admin_dashboard/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('admin_dashboard/js/app.js')}}"></script>
	@yield("script")
</body>

</html>
