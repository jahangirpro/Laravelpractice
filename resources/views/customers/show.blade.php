@extends('master')
@section('title','Details for '.  $customer->name)
@section('content')
<div class="container">
    <div class="card">
        <h4 class="card-header">Details for {{ $customer->name }} </h4>
        <div class="container">
          <div class="row">
            <a class="btn btn-primary col-2" href="/customers/{{$customer->id}}/edit">Edit</a>
            <form action="/customers/{{$customer->id}}" method="POST">
            @method('delete')
            @csrf
            <button class="btn btn-danger  " type="submit">Delete</button>
            </form>
            </div>
        </div>
   
        <div class="card-body">
        <h5><strong>Name : </strong> {{ $customer->name}}</h5>
        <h5><strong>Email : </strong> {{ $customer->email}}</h5>
        <h5><strong>Company : </strong> {{ $customer->company->name}}</h5>
        </div>
      </div>
</div>
@endsection