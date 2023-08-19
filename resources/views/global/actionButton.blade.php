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

    {{-- @can($prefix.'show') --}}
    <a id="objectShow" data-id="{{ $row->id }}"
      href="{{ route($crudRoutePath.'.show',$row->id) }}"
      class="objectShow text-primary dropdown-item"
      style="cursor: pointer;"
      data-bs-toggle="tooltip" data-bs-placement="bottom"
      title="" data-bs-original-title="View detail" aria-label="Views"><i class="dw dw-eye"></i> View</a>
  {{-- @endcan --}}
  {{-- @can($prefix.'edit') --}}
    <a id="objectEdit" data-id="{{ $row->id }}"
      href="{{ route($crudRoutePath.'.edit',$row->id) }}"
      class="objectEdit text-warning dropdown-item" style="cursor: pointer;" data-bs-toggle="tooltip"
      data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
      <i class="dw dw-edit2"></i>Edit</a>
  {{-- @endcan --}}
  {{-- @can($prefix.'delete') --}}
    <a id="objectDelete" data-id="{{ $row->id }}"
      href="{{ route($crudRoutePath.'.destroy',$row->id) }}"
      class="objectDelete text-danger dropdown-item" data-bs-toggle="tooltip"
      data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
      <i class="dw dw-delete-3"></i>Delete</a>
  {{-- @endcan --}}
  </div>
</div>
