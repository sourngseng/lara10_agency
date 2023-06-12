<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>
    @stack('title')
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css " rel="stylesheet">

  @stack('datatable_css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">RPITSSR APP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Teacher Parents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Teacher Family</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Teacher Sibling</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="btn btn-success me-2"><span class="fas fa-user"></span> SENG Sourng</a></li>
          <li><a href="#" class="btn btn-primary"><span class="fas fa-close"></span> Log out</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container mt-3">
    @yield('content')
</div>


<script src="https://kit.fontawesome.com/89d9cff162.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- jquery for ajax --}}

 <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


 @stack('datatable_js')

@stack('modal')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('script')
</body>
</html>
