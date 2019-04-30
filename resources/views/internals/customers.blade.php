@extends('master')

@section('content')
<ul>
    @foreach ($values as $value)
   
   <li>{{ $value }}</li>
        
    @endforeach
   </ul>
@endsection