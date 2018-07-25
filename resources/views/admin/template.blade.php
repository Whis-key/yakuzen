<!DOCTYPE html>
<html>
<head>
	<title>Quản trị | Yakuzen</title>
	<link rel="shortcut icon" type="image/png" href="{{url('/')}}/img/banner/doctor.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="{{url('/')}}/assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="{{url('/')}}/assets/js/core/app.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/pages/dashboard.js"></script>
</head>
<body>
	@include('admin.navbar')


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
			@include('admin.sidebar')

			<div class="content-wrapper">
				<div class="content">
					@yield('content')
				</div>
			</div>

			<div style="clear:both"></div>
		</div>
	</div>

</body>
</html>