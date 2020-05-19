@extends('admin.master')
@section('content')
    <!--Content Start-->
    <section class="container-fluid">
        <div class="row content">
            <div class="col-12 pl-0 pr-0">

                   @include('admin.includes.alert')
                  
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">Student Type List</h4>
                        <button class="bg-success text-light  " data-toggle="modal" data-target="#studentTypeAddmodal">Add New</button>
                    </div>
                </div>

                <div class="table-responsive p-1">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Class Name</th>
                            <th>Student Type</th>

                            <th>Status</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                        </thead>
                        <tbody id="studentTypeTable">
                           
                           @include('admin.setting.student-type.student-type-table')
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--Content End-->

@include('admin.setting.student-type.modal.add-form')
@include('admin.setting.student-type.modal.edit-form')


<script>
   $('#studentTypeInsert').submit(function(e){
       e.preventDefault();
       var url = $(this).attr('action');
       var data = $(this).serialize();
       var method = $(this).attr('method');
       
       $('#studentTypeAddmodal #reset').click();
        $('#studentTypeAddmodal').modal('hide');
       
       $.ajax({
           data : data,
           type : method,
           url : url,
           success: function () {
              
               $.get("{{ route('student-type-list')}}" , function(data){
                  
                   $('#studentTypeTable').empty().html(data);
               })
           }
       })
   }) ;

    function studentTypeUnpublished(id){
                $.get("{{ route('student-type-unpublished')}}",{type_id:id},function(data){
                 console.log(data);
                $('#studentTypeTable').empty().html(data);
            })

          }
          function studentTypepublished(id){
                $.get("{{ route('student-type-published')}}",{type_id:id},function(data){
                 console.log(data);
                $('#studentTypeTable').empty().html(data);
            })

          }
          function studentTypeEdit( id,name ){
            $('#studentTypeEditmodal').find('#studentType').val(name);
            $('#studentTypeEditmodal').find('#typeId').val(id);
           $('#studentTypeEditmodal').modal('show');
          }
          $('#studentTypeUpdate').submit(function(e){
              e.preventDefault();
                 var url = $(this).attr('action');
                 var data = $(this).serialize();
                 var method = $(this).attr('method');
       
                   $('#studentTypeEditmodal #reset').click();
                     $('#studentTypeEditmodal').modal('hide');
       
                   $.ajax({
                     data : data,
                     type : method,
                     url : url,
                     success: function (data) {
                         $('#studentTypeTable').empty().html(data);
                        
                 }
              })
          })
       
          function studentTypeDelete(id){
            var msg = 'If you went to delete this Item , press Ok';
            if(confirm(msg)){
              $.get("{{ route('student-type-delete')}}", { type_id:id }, function(data){
                 console.log(data);
                $('#studentTypeTable').empty().html(data);
            });
            }

          }
</script>

@endsection

