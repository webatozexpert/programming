<!-- Button trigger modal -->
  @include('admin.includes.alert')
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="studentTypeAddmodal" tabindex="-1" role="dialog" aria-labelledby="studentTypeAddmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Student Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('student-type-add')}}" method="POST" id="studentTypeInsert">
            @csrf
        
      <div class="modal-body">
        
                 <div class="form-group row mb-0">
                                        <label for="classId" class="col-form-label col-sm-3 text-right">Class Name</label>
                                        <div class="col-sm-9">


                                            <select name="class_id" class="form-control @error('class_id') is-invalid @enderror"  id="classId" required autofocus>

                                              <option value=""> Select Class</option>

                                              @foreach($classes as $class)
                                                  <option value="{{$class->id }}">{{ $class->class_name }}</option>
                                              @endforeach


                                            </select>
                                            
                                            @error('class_id')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                     
                     
                       <div class="form-group row mb-0">
                                        <label for="studentType" class="col-form-label col-sm-3 text-right">Student Type</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('student_type') is-invalid @enderror" name="student_type" value="{{ old('student_type') }}" id="studentType" placeholder="Student Type" required>
                                            @error('student_type')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                
          
          
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-warning" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>

</div>