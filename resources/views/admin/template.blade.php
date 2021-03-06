<!DOCTYPE html>
<html>
<head>
	<title>Quản trị | Yakuzen</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
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

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
	<script type="text/javascript">
		window.app = {
			baseUrl: '{{url("/")}}'
		}
	</script>

	@yield('script')
</head>
<body>
	@include('admin.navbar')


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
			@include('admin.sidebar')

			<div class="content-wrapper">
				<div class="content" id="app">
					@yield('content')
				</div>
			</div>

			<div style="clear:both"></div>
		</div>
	</div>

</body>
</html>