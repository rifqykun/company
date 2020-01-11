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
            @foreach($company as $c =>$com)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$com->company_name}}</td>
                <td>{{$com->company_email}}</td>
                <td>{{$com->website}}</td>
                <td><img src="{{ url('storage/app/company/'.$com->logo) }}" class="img-thumbnail" width="75"></td>
                <td>
                    <a href="{{url('dashboard/editcompany')}}/{{$com->id}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('dashboard/deletecompany')}}/{{$com->id}}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$company->links()}}
</div>
@endsection

