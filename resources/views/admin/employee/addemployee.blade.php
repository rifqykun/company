@extends('admin.templateadmin.template')
@section('title','Employees')
@section('breadcrum', 'Dashboard/Add Employee')

@section('contentadmin')
<div class="panel-body">
    <form action="" method="POST" autocomplite="off" id="form-input">
        @csrf
        <div class="form-group">
            <label name="name">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid invalid @enderror" placeholder="Nama" value="{{old('name')}}">
            @error('name')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="email">Email </label>
            <input type="text" name="email" class="form-control @error('email') is-invalid invalid @enderror" placeholder="Email" value="{{old('email')}}">
            @error('email')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="company">Company</label>
            <select name="company_id" class="form-control @error('category_id') is-invalid invalid @enderror">
                <option>--Select Company--</option>
                @foreach($company as $c)
                <option value="{{$c->id}}">{{$c->company_name}}</option>
                @endforeach
            </select>
            @error('website')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
		<button type="submit" class="btn btn-primary" style="margin-top: 10px;">Add New Employee</button>
    </form>
</div>
@endsection
