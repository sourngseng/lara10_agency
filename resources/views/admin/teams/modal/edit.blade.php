<div
      class="modal fade bs-example-modal-lg"
      id="ModalEdit"
      tabindex="-1"

      role="dialog"
      aria-labelledby="myModalTitle"
      aria-hidden="true"
    >

    <form action="#" method="POST"
      id="frmCrudObject"
      enctype="multipart/form-data">
      @csrf
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
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
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
              <button type="button" class="btn btn-primary" id="save_data">
                Save changes
              </button>
            </div>
          </div>
        </div>
    </form>
</div>

