 @extends('layouts.app')
@section('content')

 {!! $map['html'] !!}

<a href="/msds" class="btn btn-default">Go back</a><br><br>
 <!--strong><a href="/googlemap" >Location.</a></strong--><br>
  @if(!Auth::guest())
  @if(Auth::user()->id == $msd->user_id)
<a href="/msds/create" class="btn btn-primary">Add Pharmacy</a>
  @endif
  @endif
<div class="well">
 
 <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">  {{$msd->name}} <span class="text-muted"><strong></strong> </h2>
          <p class="lead"><small>Region </small>{{$msd->region}}.</p>
        </div>
        <div class="col-md-5">
          
         
      </div>


</div>


</div>

 

 <p>
  <address>
 
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