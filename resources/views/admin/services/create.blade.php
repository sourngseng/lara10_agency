@extends('layouts.admin.admin-app')
@push('title')
  List All Services
@endpush

@push('styles')
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/core.css" />
<link  rel="stylesheet"  type="text/css"  href="{{asset('backend')}}/vendors/styles/icon-font.min.css"/>
<link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css"/>
<link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/style.css" />
@endpush
@section('content')
  <h1>Create Service</h1>
@endsection



@push('scripts')

<!-- js -->
<script src="{{asset('backend')}}/vendors/scripts/core.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/script.min.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/process.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/layout-settings.js"></script>
<script src="{{asset('backend')}}/src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/dashboard3.js"></script>

@endpush
