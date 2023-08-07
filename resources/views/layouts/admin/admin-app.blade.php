<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
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
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/core.css" />
		<link	rel="stylesheet"		type="text/css"
    href="{{asset('backend')}}/vendors/styles/icon-font.min.css"/>
		<link
			rel="stylesheet" type="text/css"
      href="{{asset('backend')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css"/>
		<link
			rel="stylesheet" type="text/css"
      href="{{asset('backend')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css"/>
		<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/style.css" />

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
   @stack('scripts')

	</body>
</html>
