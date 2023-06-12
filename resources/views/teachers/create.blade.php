<div class="modal" id="crudObjectModal">
  <div class="modal-dialog modal-xl">
      <!-- The Modal -->
      <form action="{{route('teachers.store')}}" method="POST" id="frmCrudObject" enctype="multipart/form-data">
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
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3 mt-3">
                          <label for="first_name" class="form-label">First Name:</label>
                          <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
                          <span class="text-danger error-text first_name_error"></span>
                      </div>
                      <div class="mb-3 mt-3">
                          <label for="last_name" class="form-label">Last Name:</label>
                          <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
                          <span class="text-danger error-text last_name_error"></span>
                      </div>
                      <div class="mb-3 mt-3">
                          <label for="gender" class="form-label">Gender:</label>
                          <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender">
                      </div>

                      <div class="mb-3 mt-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                      </div>

                      <div class="mb-3 mt-3">
                        {{-- <input type="checkbox" class="form-control" name="is_active" id="is_active">
                        <label for="phone" class="form-label">is Active?:</label> --}}
                        {{-- <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone"> --}}

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox"  name="is_active" id="is_active" checked>
                          <label class="form-check-label" for="flexCheckChecked">
                            is Active?
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
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
