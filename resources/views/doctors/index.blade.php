@extends('layouts.app')
@section('content')
 <div class="container">

<h3>Doctors and Specialists</h3>
 @if (count($doctors) >0)
       <div class="well">
           <div class="row">
               @foreach($doctors as $doctor)
              
           	<div class="col-md-4 col-sm-4">
           		<img src="/storage/images/{{$doctor->img}}" class="img-responsive">
           	
    <h3 class="text-center"><a href="/doctors/{{$doctor->id}}">	{{$doctor->fName}} {{$doctor->lName}}</a> </h3>
     
       <h4 class="text-center"> {{$doctor->specialization}}</h4>
         <!--small> Added by {{$doctor->user->name}}</small -->
       </div>
       @endforeach

       </div>

   </div>
  
    {{$doctors->links()}}
  
   
 @else
 No records
 @endif
 
@endsection