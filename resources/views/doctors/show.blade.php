@extends('layouts.app')
@section('content')
<a href="/doctors" class="btn btn-default">Go back</a><br><br>
 @if(!Auth::guest())
  @if(Auth::user()->id == $doctor->user_id)
<a href="/doctors/create" class="btn btn-primary">Add Doctor</a>
  @endif
  @endif
<div class="well">
           <div class="row">
           	<div class="col-md-4 col-sm-4">
<img class="img-responsive" src="/storage/images/{{$doctor->img}}"><br><br>
</div>
<div class="col-md-7 col-sm-7">
	<h3>{{$doctor->fName}} {{$doctor->lName}}
		
                <a href="/chat" class="btn btn-primary">Chat</a>    
               @if(Cache::has('user-is-online-' . $doctor->dkt_id))
                <span class="text-success">Online</span>  
               @else
    <span class="text-secondary">Offline</span>
@endif
   
            </h3>
<h1>  {{$doctor->specialization}} </h1>
<p>{{$doctor->experience}} </p>
<p>Education Background </p>
<ul>
	<li>The educational backgrounds of health workers range from vocational training to master's degrees.</li>
	<li>The educational backgrounds of health workers range from vocational training to master's degrees.</li>
</ul>
</div>
</div>

<!--small> Added by {{$doctor->user->name}}</small-->
</div>
  <address>
  <strong>Contact Info.</strong>
 
  <abbr title="Phone">P:</abbr> (123) 456-7890<br><br>

  <strong>{{$doctor->fName}} {{$doctor->lName}}</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>

 <hr>
 @if(!Auth::guest())
  @if(Auth::user()->id == $doctor->user_id)
 <a href="/doctors/{{$doctor->id}}/edit" class="btn btn-default">Edit</a>
 
 {!! Form::open (['action' => ['DoctorsController@destroy',$doctor->id],'method'=>"POST", 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection