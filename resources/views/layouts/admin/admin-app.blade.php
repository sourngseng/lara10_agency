<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>
			@stack('title', 'Admin Title')
		</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{asset('backend')}}/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('backend')}}/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('backend')}}/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>
		

		<!-- Google Font -->
		  <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&display=swap" rel="stylesheet">
		<!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/core.css" />
    <link  rel="stylesheet"  type="text/css"  href="{{asset('backend')}}/vendors/styles/icon-font.min.css"/>
    <link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css"/>
    <link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/style.css" />
    @stack('datatable_css')

    @stack('styles')


	</head>
	<body>

		<div class="header">
      @include('layouts.partials.admin-header-left')
      @include('layouts.partials.admin-header-right')
		</div>

    @include('layouts.partials.admin-right-sidebar')
    @include('layouts.partials.admin-left-sidebar')

		<div class="mobile-menu-overlay"></div>
		<div class="main-container">
      
      @yield('content')

		</div>
    @stack('modals')

    <!-- js -->
    <script src="{{asset('backend')}}/vendors/scripts/core.js"></script>
    <script src="{{asset('backend')}}/vendors/scripts/script.min.js"></script>
    <script src="{{asset('backend')}}/vendors/scripts/process.js"></script>
    <script src="{{asset('backend')}}/vendors/scripts/layout-settings.js"></script>
    <script src="{{asset('backend')}}/src/plugins/apexcharts/apexcharts.min.js"></script>
    <!-- add sweet alert js & css in footer -->
    <script src="{{asset('backend')}}/src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="{{asset('backend')}}/src/plugins/sweetalert2/sweet-alert.init.js"></script>

    @stack('datatable_js')
    @stack('scripts')

	</body>
</html>
