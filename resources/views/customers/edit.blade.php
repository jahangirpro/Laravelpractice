@extends('master')
@section('title','Edit for'. $customer->name )
@section('content')
<div class="container">
<h2>Edit for {{ $customer->name}}</h2>
<form action="/customers/{{$customer->id}}" method="POST">
  @method('PATCH')
    @csrf
        <div class="form-group">
          <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $customer->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
           {{ $errors->first('name') }}
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
        <input  type="text" class="form-control" name="email" value="{{ $customer->email}}" id="exampleInputPassword1" placeholder="Email">
          {{ $errors->first('email')}}
        </div>
        <div class="form-group" >
          <label for="active">Status</label>
            <select name="active" class="custom-select" required>
              <option value="" disabled>Select from here</option>
              <option value="0" @if($customer->active == 'Inactive') selected @endif>Inactive</option>
              <option value="1" @if($customer->active == 'Active') selected @endif>Active</option>
              <option value="2" @if($customer->active == 'Part Time') selected @endif>Part Time </option>      
            </select>
        </div>
        
        <div class="form-group" >
          <label for="active">Company Name</label>
            <select name="company_id" class="custom-select" required>
              <option value="" disabled>Select from here</option>
              @foreach (\App\Company::all() as $company)
            <option value="{{$company->id}}" @if($company->id==$customer->company_id) selected @endif() >{{$company->name}}</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
 </form>
      
</div>
@endsection