@extends('admin.templateadmin.template')
@section('title','Admin')
@section('breadcrum','Dashboard/Admin')

@section('contentadmin')
<div class="container">
    <a href="/dashboard/addadmin" class="btn btn-primary">Add Admin</a>
    <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admin as $a)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$a->name}}</td>
                <td>{{$a->email}}</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection