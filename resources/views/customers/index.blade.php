@extends('master')
@section('title','Customer List')
@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">All Customers </h5>
        <div class="card-body">
          <a href="/customers/create" class="btn btn-primary">Add new Customer</a>
        </div>
      </div>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Company Name</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers as $customer)
      <tr>
      <th scope="row">{{ $customer->id }}</th>
      <td> <a href="/customers/{{ $customer->id }}"> {{ $customer->name }}</td></a>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->company->name }}</td>
        <td>{{ $customer->active }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  {{ $customers->links() }}
</div>
@endsection