@extends('layouts.admin.admin-app')
@push('title')
  Create Service
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

<div class="pd-20 card-box mb-30">
  <div class="clearfix">
    <div class="pull-left">
      <h4 class="text-blue h4">Create Service</h4>
    </div>

  </div>
  <form>
    <div class="form-group row">
      <label class="col-sm-12 col-md-2 col-form-label">Service Title</label>
      <div class="col-sm-12 col-md-10">
        <input class="form-control" id="title" name="title" type="text" placeholder="Service Title">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-12 col-md-2 col-form-label">Description</label>
      <div class="col-sm-12 col-md-10">
        <textarea class="form-control" id="description" name="description" ></textarea>
      </div>
    </div>

    <div class="form-group">
      <label>Image</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="image" >
        <label class="custom-file-label">Choose file</label>
      </div>
    </div>


    <div class="custom-control custom-checkbox mb-5">
      <input type="checkbox" class="custom-control-input" id="ck_status" name="status">
      <label class="custom-control-label" for="ck_status">Is Active</label>
    </div>

    <div class="pd-20">
      <div class="clearfix">
        <div class="pull-right">
          <a class="btn btn-secondary" href="{{route('admin.services')}}">Cancel</a>

          <button type="button" class="btn btn-primary" id="save_data">
                Save changes
          </button>
        </div>
      </div>
    </div>

  </form>

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
