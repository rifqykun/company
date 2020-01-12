@extends('admin.templateadmin.template')
@section('title'.'Employees')
@section('breadcrum', 'Dashboard/Edit Employee')

@section('contentadmin')
<div class="panel-body">
    <form action="{{$employee->id}}" method="POST" autocomplite="off" id="form-input">
        @csrf
        <div class="form-group">
            <label name="name">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Nama" value="@if(old('name')) {{old('name')}} @else {{$employee->name}} @endif">
            @error('name')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="email">Email </label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="@if(old('email')) {{old('email')}} @else {{$employee->email}} @endif">
            @error('email')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="company">Company</label>
            <select name="company_id" class="form-control">
                <option>--Select Company--</option>
                @foreach($company as $c)
                <option value="{{$c->id}}" @if( $c->id == old("company",$employee->company_id)) selected @endif>{{$c->company_name}}</option>
                @endforeach
            </select>
            @error('website')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
		<button type="submit" class="btn btn-primary" style="margin-top: 10px;">Update Employee</button>
    </form>
</div>
@endsection