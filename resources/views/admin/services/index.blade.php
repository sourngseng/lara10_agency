@extends('layouts.admin.admin-app')
@push('title')
  List All Services
@endpush
@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css " rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link
  rel="stylesheet"
  type="text/css"
  href="{{asset('backend')}}/src/plugins/sweetalert2/sweetalert2.css"
/>
  @endpush

@section('content')
  @include('admin.services.list_services')
@endsection

@push('modals')
    @include('admin.services.modal.create_form')
    @include('admin.services.modal.edit_form')
@endpush

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

@push('scripts')



<script>
  $(document).ready(function () {
    //save or update
    $('#frmCrudObject').on('submit',function(e){
      e.preventDefault();
      // alert("Hello Save");
      $('#frmCrudObject').find('span.text-danger').removeClass('d-none');
      var actionUrl = $(this).attr('action');
      var method = $(this).attr('method')
      $.ajax({
        type: method,
        url: actionUrl,
        data: new FormData(this),
        dataType:'json',
        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function(){
          $(document).find('span.error-text').text('');
        },
        success: function (res) {
          console.log(res)
          if(res.status==400){
            $.each(res.error, function(prefix, val){
              $('span.'+prefix+'_error').text(val[0]);
            });
          } else {
            var $html =res.html;
            if(res.type == 'store-object'){
              $('tbody#objectList').append($html);
            }else{
              $("#tr_object_id_" + res.data.id).replaceWith($html);
              $('#crudObjectModal').find('#object_id').val('');
            }
            $('#frmCrudObject').trigger("reset");
            $('#crudObjectModal').modal('hide');

            toastr.success(res.success);
          }
        },
        error: function (error) {
          console.log('Error:', error);
        }
      });
    });
    //edit
    $('body').on('click', 'a#objectEdit', function (e) {
      e.preventDefault();
      $('#frmCrudObject').trigger('reset');
      var object_id = $(this).data('id');
      var form = $('#frmCrudObject');
      var modal = $('#crudObjectModal');
      var actionUrl = $('#crudRoutePath').val();
      modal.find('.modal-title').html('Edit Service');
      $.get( actionUrl +'/' +object_id+'/edit', function (res) {
        console.log()
        form.find('#object_id').val(res.data.id);
        form.find('#title').val(res.data.title);
        form.find('#description').val(res.data.description);
        // form.find('#email').val(res.data.email);
        form.find('#old_image').val(res.data.image);
        if(res.data.image==null){
          form.find('#preview').attr('src',"{{ asset('images/avatar_user.png') }}");
        } else {
          form.find('#preview').attr('src',"{{ asset('uploads/') }}"+'/'+res.data.image);
        }
        if(res.data.status==1){
          form.find('#ck_status').prop('checked',true);
        } else {
          form.find('#ck_status').prop('checked',false);
        }
        modal.modal('show');
      })
    });
    //delete
    $('body').on('click', '.objectDelete', function (e) {
      e.preventDefault();
      var object_id = $(this).data("id");
      var link = $(this).attr("href");
      // alert("Are you sure?");
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33898',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type: "post",
            url:link,
            success: function (res) {
              console.log(res)
              $("#tr_object_id_" + object_id).remove();
              toastr.success(res.success);
            },
            error: function (data) {
              console.log('Error:', data);
            }
          });
        }
      })
    });
  });
</script>


  <script>
    function changeProfile() {
      $('#profile').click();
    }
    $('#profile').change(function () {
      var imgPath = this.value;
      var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
      if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg") {
        $('#btn-remove').css('display','block');
        $('#btn-upload').text('Change');
        readURL(this);
      } else {
        alert("Please select image file (jpg, jpeg, png).")
      }
    });
    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.readAsDataURL(input.files[0]);
          reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
          };
        $("#remove").val(0);
      }
    }
    function removeImage() {
      $('#preview').attr('src',"{{ asset('images/avatar_user.png') }}");
      $("#remove").val(1);
    }
  </script>
@endpush


