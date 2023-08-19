<div class="card-box mb-30">
  <div class="pd-20">
    <div class="clearfix">
      <div class="pull-left">
        <h4 class="text-blue h4">List All teams</h4>
        <p class="mb-30">All teams</p>
      </div>
      <div class="pull-right">
          <a
            href="{{route('teams.create')}}"
            class="btn btn-primary btn-sm scroll-click"
            data-toggle="modal"
            data-target="#crudObjectModal"
            type="button"
          >
          <i class="fa fa-plus"></i> Add teams
          </a>
      </div>
    </div>
  </div>

  <div class="pb-20">
    <table class="data-table table stripe hover nowrap">
      <thead>
        <tr>
          <th class="table-plus">teams Name</th>
          <th>Photo</th>
          <th>Status</th>
          <th>Created Date</th>
          <th class="datatable-nosort">Action</th>
        </tr>
      </thead>

      <tbody id="objectList">
        @forelse ($teams as $row)
          {{-- @if ($row->id%2==0) --}}
            <tr id="tr_object_id_{{{$row->id}}}" class="mt-5" style="box-shadow: -4px 0px 15px -3px rgba(0,0,0,0.1);">
          {{-- @else
          <tr id="tr_object_id_{{{$row->id}}}">
          @endif --}}
            <td>{{$row->name}}</td>
            <td>
              <img class="border-radius-100 box-shadow"
              height="64" width="64"
              src="{{asset('uploads/'.$row->image)}}"
              alt="{{$row->name}}"
              onerror="onErrorImage(event)"
              >
            </td>
            <td>
                @if ($row->status==true)
                  <span class="badge badge-pill"
                  data-bgcolor="#e7ebf5"
                  data-color="#265ed7"
                  style="color: rgb(38, 94, 215);
                  background-color: rgb(231, 235, 245);"
                  >Active</span>
                @else
                <span class="badge badge-pill"
                data-bgcolor="#e7ebf5"
                data-color="#f56767"
                style="color: rgb(38, 94, 215);
                background-color: rgb(231, 235, 245);"
                      >Inactive</span>
                @endif
            </td>
            <td>{{$row->created_at}}</td>
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

</div>
