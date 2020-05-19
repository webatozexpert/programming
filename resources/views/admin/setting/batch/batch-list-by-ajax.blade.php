<thead>
  <tr>
    <th>Sl No</th>
    <th>Batch Name</th>
    <th>Capacity</th>
    <th>Action</th>
  </tr>
</thead>

<tbody>
  @php($i=1)
  @foreach($batches as $batch)
  <tr>
    <td>{{ $i++}}</td>
      <td>{{ $batch->batch_name}}</td>
      <td>{{ $batch->student_capacity}}</td>
        <td>
          @if($batch->status==1)
              <a href="{{ route('class-unpublished',['id'=>$batch->id]) }}" class="btn btn-sm btn-primary" title="unpublished"><span class="fa fa-eye" ></span>View</a>
          @else
              <a href="{{ route('class-published',['id'=>$batch->id]) }}" class="btn btn-sm btn-warning" title="published"><span class="fa fa-eye"></span>View</a>
          @endif
          <a href="{{ route('class-edit',['id'=>$battch->id]) }}" class="btn btn-sm btn-info" title="edit"><span class="fa fa-edit" ></span>Edit</a>
          <a href="{{ route('class-delete',['id'=>$batch->id]) }}" onclick="return confirm('If you went to delete this Item , press Ok')"class="btn btn-sm btn-danger"  title="delete"><span class="fa fa-trash"></span>Delete</a>
      </td>

  </tr>
  @endforeach
</tbody>
