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
                <td><img src="{{asset('storage/app/company/'.$c->logo)}}" class="img-thumbnail" width="75"></td>
                <td>
                    <a href="{{url('dashboard/editcompany')}}/{{$c->id}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('dashboard/deletecompany')}}/{{$c->id}}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$company->links()}}
</div>
@endsection

