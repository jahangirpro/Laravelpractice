@extends('master')

@section('content')
<div class="container">
    <b>Customer List ............ !!!</b>
<form action="/customers" method="POST">
    @csrf
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
           {{ $errors->first('name') }}
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input   class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
          {{ $errors->first('email')}}
        </div>
         
        <button type="submit" class="btn btn-primary">Submit</button>
 </form>


      <ul>
        @foreach ($customers as $customer)
                <li>Name : {{ $customer->name }} Email: {{ $customer->email }}</li>
        @endforeach  
        
      </ul>
</div>
@endsection