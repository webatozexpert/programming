@extends('admin.master')
@section('content')
    <!--Content Start-->
    <section class="container-fluid">
        <div class="row content">
            <div class="col-12 pl-0 pr-0">
                  @include('admin.includes.alert')
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">Class Wise Student List</h4>
                    </div>
                   <div class="row ml-0 mr-0">
                    <div class="col">
                        <select name="class_id" class="form-control" id="classId">
                            <option value="">--Select Class--</option>
                            @foreach($classes as $class)
                             <option value="{{$class->id}}">{{$class->class_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                         <select name="type_id" class="form-control" id="typeId">
                            <option value="">--Select Course--</option>
                         
                        </select>
                    </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!--Content End-->
    @include('admin.includes.loader')
    <style type="">
        #overlay .loader{display: none;}
    </style>
    <script type="">
        $('#classId').change(function(){
            var classId = $(this).val();
            if(classId){
                $('#overlay .loader').show();
                $.get("{{ route('class-wise-student-type')}}",{class_id:classId},function(data){
                    console.log(data);
                    $("#type").empty().html();
                    $('#overlay .loader').hide();
                })
            }
        })
    </script>

@endsection
