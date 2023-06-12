<div class="modal" id="crudObjectModal">
  <div class="modal-dialog modal-xl">
      <!-- The Modal -->
      <form action="{{route('customers.store')}}" method="POST" id="frmCrudObject" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Create Cusomer</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <input type="hidden" name="object_id" id="object_id">
              <input type="hidden" name="crudRoutePath" id="crudRoutePath" value="{{ $crudRoutePath }}">
                    <div class="mb-3 mt-3">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                        <span class="text-danger error-text fname_error"></span>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                        <span class="text-danger error-text lname_error"></span>
                    </div>
                    <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    {{-- <div class="mb-3">
                      <input type="hidden" name="old_image" id="old_image" value="">
                    <label for="pwd" class="form-label">Image:</label>
                        <input type="file" class="form-control" name="profile" id="profile">
                    </div> --}}

                    <div class="form-group text-center mb-3">
                      <div class="img-box mb-2">
                        <input type="hidden" name="old_image" id="old_image">
                        <input type="file" name="profile" id="profile" class="d-none"/>
                        <img style="height: 196px;" id="preview" class="img-thumbnail" src="{{ asset('images/avatar_user.png') }}"/>
                      </div>
                      <div class="btn-action mt-2">
                        <a href="javascript:changeProfile()" class="btn btn-sm btn-outline-success px-4 imgupload" id="imgupload">Upload</a> |
                        <a href="javascript:removeImage()" class="btn btn-outline-danger px-4 btn-sm remove" id="remove">Remove</a>
                      </div>
                      <span class="text-danger error-text profile_error"></span>
                    </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="save_data">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
      </form>
    </div>
  </div>
