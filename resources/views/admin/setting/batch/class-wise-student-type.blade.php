  <option value=""> Select Type</option>

@if(count($types)>0)

@foreach($types as $type)

  <option value="{{ $type->id}}"> {{ $type->student_type}}</option>
 @endforeach

@endif


