@extends('master')
@section('title','Details for '.  $customer->name)
@section('content')
<div class="container">
    <div class="card">
        <h4 class="card-header">Details for {{ $customer->name }} </h4>
        <div class="card-body">
        <h5><strong>Name : </strong> {{ $customer->name}}</h5>
        <h5><strong>Email : </strong> {{ $customer->email}}</h5>
        <h5><strong>Company : </strong> {{ $customer->company->name}}</h5>
        </div>
      </div>
</div>
@endsection