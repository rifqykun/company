@extends('admin.templateadmin.template')
@section('title','Company')
@section('breadcrum','Dahsboard/Company/Edit Company')

@section('contentadmin')
<div class="panel-body">
    <form action="{{$company->id}}" method="POST" autocomplite="off" id="form-input" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label name="name">Nama Company</label>
            <input type="text" name="company_name" class="form-control" placeholder="Nama Company" value="@if(old('company_name')) {{old('company_name')}} @else {{$company->company_name}} @endif">
            @error('company_name')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="email">Email Company</label>
            <input type="text" name="company_email" class="form-control" placeholder="Email Company" value="@if(old('company_email')) {{old('company_email')}} @else {{$company->company_email}} @endif">
            @error('company_email')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="name">Website</label>
            <input type="text" name="website" class="form-control" placeholder="Website Company" value="@if(old('website')) {{old('website')}} @else {{$company->website}} @endif">
            @error('website')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
			<img src="{{asset('storage/app/company/'.$company->logo)}}" alt="" width="75">
			<input type="file" name="logo" class="form-control-file" id="logo" value="@if(old('logo')) {{old('logo')}} @else {{$company->logo}} @endif">
			@error('logo')
		    <span class="invalid"><i>{{$message}}</i></span>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary" style="margin-top: 10px;">Update Company</button>
    </form>
</div>
@endsection
