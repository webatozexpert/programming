

@extends('admin.master')

@section('content')
    <!--Content Start-->
    <section class="container-fluid">
        <div class="row content">
            <div class="col-md-8 offset-md-2 pl-0 pr-0">

              @include('admin.includes.alert')

                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">batch Add Form</h4>
                    </div>
                </div>

                <form action="{{ route('batch-save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="table-responsive p-1">
                        <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">


                            <tr>
                                <td>
                                    <div class="form-group row mb-0">
                                        <label  class="col-form-label col-sm-3 text-right">Class Name</label>
                                        <div class="col-sm-9">


                                            <select name="class_id" class="form-control @error('class_id') is-invalid @enderror"  id="classId" required autofocus>

                                              <option value=""> Select Class</option>

                                              @foreach($data as $class)
                                                  <option value="{{$class->id }}">{{ $class->class_name }}</option>
                                              @endforeach


                                            </select>
                                            @error('class_id')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr>

                           <tr>
                                <td>
                                    <div class="form-group row mb-0">
                                        <label  class="col-form-label col-sm-3 text-right">Student Type</label>
                                        <div class="col-sm-9">


                                            <select name="student_type_id" class="form-control @error('student_type_id') is-invalid @enderror"  id="typeId"  autofocus>

                                              <option value=""> Select Type</option>

                                            

                                            </select>
                                            @error('student_type_id')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr> 




                            <tr>
                                <td>
                                    <div class="form-group row mb-0">
                                        <label  class="col-form-label col-sm-3 text-right">Batch Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('batch_name') is-invalid @enderror" name="batch_name" value="{{ old('batch_name') }}" id="batchName" placeholder="Write batch name here" required>
                                            @error('batch_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <div class="form-group row mb-0">
                                        <label  class="col-form-label col-sm-3 text-right">Student Capacity</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('student_capacity') is-invalid @enderror" name="student_capacity" value="{{ old('student_capacity') }}" id="capacity" placeholder="Write batch name here" required>
                                            @error('student_capa')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr><td><button type="submit" class="btn btn-block my-btn-submit">Save</button></td></tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </section>
<style> #overlay .loader{display: none}</style>

@include('admin.includes.loader')

<script >
    
$('#classId').change(function(){

    var classId = $(this).val();
    if (classId){
         $('#overlay .loader').show();
       $.get(" {{ route('class-wise-student-type') }}",{
                    class_id : classId
                },function(data){
                    $('#overlay .loader').hide();
                    console.log(data);
                    $('#typeId').empty().html(data);
                });

    }else{
         $('#typeId').empty().html('  <option value=""> Select Type</option>');
    }
})

</script>






    <!--Content End-->
@endsection
