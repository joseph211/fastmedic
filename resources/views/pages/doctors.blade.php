@extends('layouts.app')
@section('content')
<h3>{{$title}}</h3>
@if(count($doctors)>0)


 Telemedicine || 
 Remote Doctors
<ul class="list-group">
	@foreach($doctors as $doctor)
	<li class="list-group-item"> {{$doctor}}</li>
	@endforeach
</ul>
	@endif
 
@endsection