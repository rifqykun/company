@extends('admin.templateadmin.template')
@section('title','Employees')
@section('breadcrum','Dashboard/Employee')

@section('contentadmin')
<div class="container">
    <a href="/dashboard/addemployee" class="btn btn-primary">Add Employee</a>
    <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employee as $e)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$e->name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->company_name}}</td>
                <td>
                    <a href="{{url('dashboard/editemployee/')}}/{{$e->id}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('dashboard/deleteemployee/')}}/{{$e->id}}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$employee->links()}}
</div>
@endsection