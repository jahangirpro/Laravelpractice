@extends('master')
@section('title','Add a new Customer')
@section('content')
<div class="container">
    <h2>Add a new customer</h2>
<form action="/customer" method="POST">
    @csrf
        <div class="form-group">
          <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
           {{ $errors->first('name') }}
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
        <input  type="text" class="form-control" name="email" value="{{ old('email')}}" id="exampleInputPassword1" placeholder="Email">
          {{ $errors->first('email')}}
        </div>
        <div class="form-group" >
          <label for="active">Status</label>
            <select name="active" class="custom-select" required>
              <option value="" disabled>Select from here</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
              <option value="2">Part time</option>
            </select>
        </div>
         
        <div class="form-group" >
          <label for="active">Company Name</label>
            <select name="company_id" class="custom-select" required>
              <option value="" disabled>Select from here</option>
              @foreach ($companies as $company)
              
              <option value="{{ $company->id }}">{{ $company->name }} </option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
 </form>
      
</div>
@endsection