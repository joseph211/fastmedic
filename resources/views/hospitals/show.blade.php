@extends('layouts.app')
@section('content')

 {!! $map['html'] !!}

<a href="/hospitals" class="btn btn-default">Go back</a><br><br>
 @if(!Auth::guest())
  @if(Auth::user()->id == $hospital->user_id)
<a href="/hospitals/create" class="btn btn-primary">Add Hospital</a>
  @endif
  @endif
<div class="well">
 <h1>  Background </h1>
 <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> Area of Specialization {{$hospital->overview}} <span class="text-muted"><strong></strong> </h2>
          <p class="lead">{{$hospital->specialization_area}}.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="/storage/images/{{$hospital->img}}" alt="Generic placeholder image">
           {{$hospital->welcome}}
          <a href="/hospitals" class="btn btn-primary"> Read More </a>
         
      </div>


</div>


</div>

 

 <p>
  <address>
  <strong><a href="/googlemap" ></a>Location.</strong><br>
    {{$hospital->location}}<br>
  <br>
  
</address>

 
 </p>

 <hr>
          @if(!Auth::guest())
           @if(Auth::user()->id == $hospital->user_id)   
 <a href="/doctors/{{$hospital->id}}/edit" class="btn btn-default">Edit</a>

 
 {!! Form::open (['action' => ['HospitalsController@destroy',$hospital->id],'method'=>"POST", 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
 @endif
 @endif
@endsection