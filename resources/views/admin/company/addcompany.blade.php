@extends('admin.templateadmin.template')
@section('title','Company')
@section('breadcrum','Dashboard/Company/Add Company')

@section('contentadmin')
<div class="panel-body">
    <form action="{{ url('addcompany') }}" method="POST" autocomplite="off" id="form-input" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label name="name">Nama Company</label>
            <input type="text" name="company_name" class="form-control @error('company_name') is-invalid invalid @enderror" placeholder="Nama Company" value="{{old('company_name')}}">
            @error('company_name')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="email">Email Company</label>
            <input type="text" name="company_email" class="form-control @error('company_email') is-invalid invalid @enderror" placeholder="Email Company" value="{{old('company_email')}}">
            @error('company_email')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
            <label name="name">Website</label>
            <input type="text" name="website" class="form-control @error('website') is-invalid invalid @enderror" placeholder="Website Company" value="{{old('website')}}">
            @error('website')
            <span class="invalid"><i>{{$message}}</i></span>
            @enderror
        </div>
        <div class="form-group">
			<label for="logo">Logo</label>
			<input type="file" name="logo" class="form-control-file @error('logo') is-invalid invalid @enderror" id="logo" value="{{old('logo')}}">
			@error('logo')
		    <span class="invalid"><i>{{$message}}</i></span>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary" style="margin-top: 10px;">Add New Company</button>
    </form>
</div>
@endsection
