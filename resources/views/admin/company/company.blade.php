@extends('admin.templateadmin.template')
@section('title','Company')
@section('breadcrum','Dashboard/Company')

@section('contentadmin')
<div class="container">
    <a href="/dashboard/addcompany" class="btn btn-primary">Add Company</a>
    <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Logo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($company as $c)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$c->company_name}}</td>
                <td>{{$c->company_email}}</td>
                <td>{{$c->website}}</td>
                <td>{{$c->logo}}</td>
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