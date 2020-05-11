@extends('admin.master')
@section('content')
    <!--Content Start-->
    <section class="container-fluid">
        <div class="row content">
            <div class="col-12 pl-0 pr-0">
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">Users List</h4>
                    </div>
                </div>

                <div class="table-responsive p-1">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Role</th>
                            <th>Name</th>

                            <th>Mobile</th>
                            <th>Email</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->email }}</td>

                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><span class="fa fa-eye"></span>View</a>
                                <a href="#" class="btn btn-sm btn-info"><span class="fa fa-edit"></span>Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span>Delete</a>
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
