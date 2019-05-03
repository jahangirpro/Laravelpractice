@extends('master')
@section('title','Customer List')
@section('content')
<div class="container">
    <b>Customer List ............ !!!</b>
<form action="/customers" method="POST">
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

 <div class="row">
   <div class="col-4">
     <h3>Active Customers </h3>
      <ul>
          @foreach ($ActiveCustomers as $activecustomer)
                  <li>Name : {{ $activecustomer->name }} <span class="text-muted">({{ $activecustomer->company->name }})</span> </li>
          @endforeach  
          
        </ul>
   </div>

   <div class="col-4">
     <h3>Inactive Customers</h3>
      <ul>
          @foreach ($InactiveCustomers as $inactivecustomer)
                  <li>Name : {{ $inactivecustomer->name }} <span class="text-muted">({{ $inactivecustomer->email }})</span> </li>
          @endforeach  
          
        </ul>
   </div>


   <div class="col-4">
     <h3>Part time Customers </h3>
      <ul>
          @foreach ($ParttimeCustomers as $parttimecustomer)
                  <li>Name : {{ $parttimecustomer->name }} <span class="text-muted">({{ $parttimecustomer->email }})</span> </li>
          @endforeach  
          
        </ul>
   </div>
 </div>
 
 <div class="row">
   <div class="col-12">
     @foreach ($companies as $company)
     <h2>Total Customers of   {{ $company->name }}</h2>
        @foreach ($company->customers as $customer)
          <li>{{ $customer->name}}</li>    
        @endforeach         
     @endforeach
   </div>
 </div>
      
</div>
@endsection