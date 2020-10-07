@extends('layouts.app')
@section('content')
<a href="/labs" class="btn btn-default">Go back</a><br><br>
 @if(!Auth::guest())
           @if(Auth::user()->id == $lab->user_id)   
<a href="/labs/create" class="btn btn-primary panel-heading"> Add Labs Results </a>
@endif
@endif
<div class="well">
           <div class="row">
           	
<div class="col-md-7 col-sm-7">
	<h3>{{$lab->name}}</h3>
<h3><small>Location </small>:  {{$lab->location}} </h3>
<p> </p>
<p>Specialization</p>
<ul>
	<li>{{$lab->diagnosis}}</li>
</ul>
</div>
</div>


</div>
 <hr>
  @if(!Auth::guest())
           @if(Auth::user()->id == $lab->user_id)   
 <a href="/labs/{{$lab->id}}/edit" class="btn btn-default">Edit</a>

 {!! Form::open (['action' => ['DoctorsController@destroy',$lab->id],'method'=>"POST", 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection