<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Instan | {{ $title }}</title>
  <!-- Css -->
  @include('backend.layout.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Preloader -->
		@include('backend.layout.header')
		<!-- Main Sidebar Container -->
		@include('backend.layout.menu')
		
  		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			@include('backend.layout.breadcrumbs')
			<!-- Main content -->
			@yield('content')
		</div>

  		<!-- Footer -->
		@include('backend.layout.footer')
	</div>
	<!-- Js -->
	@include('backend.layout.js')
</body>
</html>
