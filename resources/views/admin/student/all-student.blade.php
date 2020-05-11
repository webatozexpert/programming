@extends('admin.master')
@section('content')
    <!--Content Start-->
    <section class="container-fluid">
        <div class="row content">
            <div class="col-12 pl-0 pr-0">
                  @include('admin.includes.alert')
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">All Student List</h4>
                    </div>
                </div>

                <div class="table-responsive p-1">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Class</th>

                            <th>School</th>
                            <th>Father's Name</th>
                            <th>Father's Mobile</th>
                            <th>Mather's Name</th>
                            <th>Mather's Mobile</th>
                            <th>SMS Mobile</th>
                            <th>Student Id</th>
                                              
                            <th style="width: 100px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $student->student_name }}</td>
                                <td>{{ $student->class_name }}</td>
                                <td>{{ $student->school_name }}</td>
                                <td>{{ $student->father_name }}</td>
                                <td>{{ $student->father_mobile }}</td>
                                <td>{{ $student->mother_name }}</td>
                                <td>{{ $student->mother_mobile }}</td>
                                <td>{{ $student->sms_mobile }}</td>
                                <td>{{ $student->id}}</td>
                               
                                

                                <td>
                                   
                                    <a href="" class="btn btn-sm btn-warning"><span class="fa fa-trash"></span>Edit</a>
                                    <a href="" onclick="return confirm('If you went to delete this Item , press Ok')" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--Content End-->
@endsection
