@extends('layouts.admin.admin-app')
@push('title')
  List All About
@endpush

@push('styles')
  {{-- <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css " rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet"  type="text/css"  href="{{asset('backend')}}/src/plugins/sweetalert2/sweetalert2.css"/>
@endpush


@section('content')
  @include('admin.abouts.list_about')
@endsection


@push('datatable_js')
  <script src="{{asset('backend')}}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
  <!-- Datatable js -->
  <!-- buttons for Export datatable -->
  <script src="{{asset('backend')}}/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/buttons.print.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/buttons.html5.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/buttons.flash.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/pdfmake.min.js"></script>
  <script src="{{asset('backend')}}/src/plugins/datatables/js/vfs_fonts.js"></script>
  <!-- Datatable Setting js -->
  <script src="{{asset('backend')}}/vendors/scripts/datatable-setting.js"></script>
@endpush


