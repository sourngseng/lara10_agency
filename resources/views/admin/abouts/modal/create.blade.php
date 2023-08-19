<div class="modal" id="crudObjectModal">
  <div class="modal-dialog modal-xl">
      <!-- The Modal -->
      <form action="{{route('abouts.store')}}" method="POST" id="frmCrudObject" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title" id="myModalTitle">
                Create Services
              </h4>

              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-hidden="true"
              >
                ×
              </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <input type="hidden" name="object_id" id="object_id">
              <input type="hidden" name="crudRoutePath" id="crudRoutePath" value="{{ $crudRoutePath }}">
                    <div class="mb-3 mt-3">
                        <label for="title" class="form-label">Service Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Service Title" name="title">
                        <span class="text-danger error-text title_error"></span>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
                        <span class="text-danger error-text description_error"></span>
                    </div>

                    <div class="custom-control custom-checkbox mb-5">
                      <input type="checkbox" class="custom-control-input" id="ck_status" name="status">
                      <label class="custom-control-label" for="ck_status">Is Active</label>
                    </div>

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
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="save_data">Save Change</button>
            </div>
        </div>
      </form>
    </div>
  </div>
