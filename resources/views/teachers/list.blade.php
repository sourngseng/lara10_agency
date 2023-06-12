<table class="table table-striped" id="example">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Gender</th>
      <th>Phone</th>
      <th>Avatar</th>
      <th>Control</th>
    </tr>
  </thead>
  <tbody id="objectList">
    @forelse ($teachers as $row)
      @if ($row->is_active==1)
        <tr id="tr_object_id_{{{$row->id}}}" class="mt-5" style="box-shadow: -4px 0px 15px -3px rgba(245, 73, 73, 0.1);">
      @else
        <tr id="tr_object_id_{{{$row->id}}}" class="mt-5" style="background-color: rgb(242, 167, 157);" >
      @endif
        <td>{{$row->first_name}}</td>
        <td>{{$row->last_name}}</td>
        <td>{{$row->gender}}</td>
        <td>{{$row->phone}}</td>
        <td><img height="64" src="{{asset('uploads/'.$row->profile)}}" alt="" onerror="onErrorImage(event)"></td>
        <td>
          @include('global.actionButton')
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="6">No record found</td>
      </tr>
    @endforelse

  </tbody>
</table>
