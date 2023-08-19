<tr id="tr_object_id_{{{$row->id}}}">
  <td>{{$row->title}}</td>
  <td>
      <img class="border-radius-100 box-shadow"
      height="64" width="64"
      src="{{asset('uploads/'.$row->image)}}"
      alt="{{$row->title}}"
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
  {{-- <td>{{$row->profile}}</td> --}}
  <td>
    @include('global.actionButton')
  </td>
</tr>
