@extends('layouts.admin.admin-app')
@push('title')
Admin Dashboard
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
<div class="xs-pd-20-10 pd-ltr-20">
  <div class="title pb-20">
    <h2 class="h3 mb-0">Manager Dashboard</h2>
  </div>
  <div class="row pb-10">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
      <div class="card-box height-100-p widget-style3">
        <div class="d-flex flex-wrap">
          <div class="widget-data">
            <div class="weight-700 font-24 text-dark">75</div>
            <div class="font-14 text-secondary weight-500">
              Appointment
            </div>
          </div>
          <div class="widget-icon">
            <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);">
              <i class="icon-copy dw dw-calendar1"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
      <div class="card-box height-100-p widget-style3">
        <div class="d-flex flex-wrap">
          <div class="widget-data">
            <div class="weight-700 font-24 text-dark">124,551</div>
            <div class="font-14 text-secondary weight-500">
              Total Patient
            </div>
          </div>
          <div class="widget-icon">
            <div class="icon" data-color="#ff5b5b" style="color: rgb(255, 91, 91);">
              <span class="icon-copy ti-heart"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
      <div class="card-box height-100-p widget-style3">
        <div class="d-flex flex-wrap">
          <div class="widget-data">
            <div class="weight-700 font-24 text-dark">400+</div>
            <div class="font-14 text-secondary weight-500">
              Total Doctor
            </div>
          </div>
          <div class="widget-icon">
            <div class="icon">
              <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
      <div class="card-box height-100-p widget-style3">
        <div class="d-flex flex-wrap">
          <div class="widget-data">
            <div class="weight-700 font-24 text-dark">$50,000</div>
            <div class="font-14 text-secondary weight-500">Earning</div>
          </div>
          <div class="widget-icon">
            <div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);">
              <i class="icon-copy fa fa-money" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

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
