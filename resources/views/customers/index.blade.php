@extends('layouts.master_ajax')

@push('datatable_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<h2>Customer management</h2>
<p>Manage Customers</p>
<button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#crudObjectModal">
    Create
</button>

<div class="p-4 table-responsive" style="box-shadow: -4px 0px 15px -3px rgba(0,0,0,0.1);">
  <table class="table table-striped" id="example">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody id="objectList">
      @forelse ($customers as $row)
        {{-- @if ($row->id%2==0) --}}
          <tr id="tr_object_id_{{{$row->id}}}" class="mt-5" style="box-shadow: -4px 0px 15px -3px rgba(0,0,0,0.1);">
        {{-- @else
        <tr id="tr_object_id_{{{$row->id}}}">
        @endif --}}
          <td>{{$row->fname}}</td>
          <td>{{$row->lname}}</td>
          <td>{{$row->email}}</td>
          <td><img height="64" src="{{asset('uploads/customer/'.$row->profile)}}" alt="" onerror="onErrorImage(event)"></td>
          <td>
            @include('global.actionButton')
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5">No record found</td>
        </tr>
      @endforelse

    </tbody>
  </table>
</div>

@endsection

@push('modal')
    @include('customers.create')
    @include('customers.edit')
@endpush

@push('datatable_js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
  </script>
@endpush

@push('script')
  <script>
    $(document).ready(function () {
      //save or update
      $('#frmCrudObject').on('submit',function(e){
        e.preventDefault();
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
            // console.log(res)
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
        modal.find('.modal-title').html('{{ trans('global.edit') }} {{ trans('cruds.customer.title_singular') }}');
        $.get( actionUrl +'/' +object_id+'/edit', function (res) {
          console.log()
          form.find('#object_id').val(res.data.id);
          form.find('#fname').val(res.data.fname);
          form.find('#lname').val(res.data.lname);
          form.find('#email').val(res.data.email);
          form.find('#old_image').val(res.data.profile);
          if(res.data.profile==null){
            form.find('#preview').attr('src',"{{ asset('images/avatar_user.png') }}");
          } else {
            form.find('#preview').attr('src',"{{ asset('uploads/customer/') }}"+'/'+res.data.profile);
          }
          // if(res.data.status==1){
          //   form.find('#status').prop('checked',true);
          // } else {
          //   form.find('#status').prop('checked',false);
          // }
          modal.modal('show');
        })
      });
      //delete
      $('body').on('click', '.objectDelete', function (e) {
        e.preventDefault();
        var object_id = $(this).data("id");
        var link = $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
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
