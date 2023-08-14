<div class="card-box mb-30">
  <div class="pd-20">
    <h4 class="text-blue h4">List All Services</h4>
  </div>
  <div class="pb-20">
    <table class="data-table table stripe hover nowrap">
      <thead>
        <tr>
          <th class="table-plus datatable-nosort">Serivice Title</th>
          <th>Photo</th>
          <th>Status</th>
          <th>Created Date</th>
          <th class="datatable-nosort">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($services as $service)
          <tr>
            <td class="table-plus">{{$service->title}}</td>
            <td><img class="border-radius-100 box-shadow" height="64" width="64" src="{{asset('uploads/'.$service->image)}}" alt="{{$service->title}}"></td>
            <td>
              {{-- {{$service->status?'Active':'Inactive'}} --}}
              @if ($service->status==true)
                <span class="badge badge-pill"
                data-bgcolor="#e7ebf5"
                data-color="#265ed7"
                style="color: rgb(38, 94, 215);
                background-color: rgb(231, 235, 245);"
                >Active</span>
                @else
                  <span class="badge badge-pill"
                  data-bgcolor="#e7ebf5"
                  data-color="#265ed7"
                  style="color: rgb(220, 24, 168);
                  background-color: rgb(231, 235, 245);"
                  >Inactive</span>
                @endif
            </td>
            <td>{{$service->created_at}}</td>
            <td>
              <div class="dropdown">
                <a
                  class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                  href="#"
                  role="button"
                  data-toggle="dropdown"
                >
                  <i class="dw dw-more"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                >
                  <a class="dropdown-item" href="#"
                    ><i class="dw dw-eye"></i> View</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="dw dw-edit2"></i> Edit</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="dw dw-delete-3"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
