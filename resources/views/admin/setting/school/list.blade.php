@extends('admin.master')
@section('content')
    <!--Content Start-->
    <section class="container-fluid">
        <div class="row content">
            <div class="col-12 pl-0 pr-0">
                  @include('admin.includes.alert')
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">School List</h4>
                    </div>
                </div>

                <div class="table-responsive p-1">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>School Name</th>

                            <th>Status</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($schools as $school)
                            <tr>
                                <td>{{ $i++ }}</td>

                                <td>{{ $school->school_name }}</td>
                                <td>{{ $school->status==1 ? 'published' : 'unpublished' }}</td>

                                <td>
                                    @if($school->status==1)
                                    <a href="{{ route('school-unpublished',['id'=>$school->id]) }}" class="btn btn-sm btn-primary" title="unpublished"><span class="fa fa-eye" ></span>View</a>
                                    @else
                                    <a href="{{ route('school-published',['id'=>$school->id]) }}" class="btn btn-sm btn-warning" title="published"><span class="fa fa-eye"></span>View</a>
                                    @endif
                                    <a href="{{ route('school-edit',['id'=>$school->id]) }}" class="btn btn-sm btn-info" title="edit"><span class="fa fa-edit" ></span>Edit</a>
                                    <a href="{{ route('school-delete',['id'=>$school->id]) }}" onclick="return confirm('If you went to delete this Item , press Ok')"class="btn btn-sm btn-danger"  title="delete"><span class="fa fa-trash"></span>Delete</a>
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

