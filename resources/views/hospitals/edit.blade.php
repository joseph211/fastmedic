@extends('layouts.app')
@section('content')
<h3>Edit Hospitals</h3>
<a href="/hospitals" class="btn btn-default">Go back</a><br><br>
 {!! Form::open(['action'=> ['HospitalsController@update',$hospital->id],'method' => 'POST','enctype' => 'multipart/form-data']) !!}
  <div class="row">
                  <div class="col-xs-3 col-sm-3 col-md-3">
 <div class="form-group">  
{{Form::label('name', ' Name')}}
{{Form::text('Name', $hospital->name,['class' => 'form-control', 'placeholder' => 'Name of Hospital'])}}
 </div>
</div>
<div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
 {{Form::label('areaspecialization', 'Area of Specialization')}}
{{Form::text('areaspecialization', $doctor->specialization_area,['class' => 'form-control', 'placeholder' => 'Area of Specialization'])}}
</div>
</div>
<div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                    	{{Form::label('Location', 'Location')}}
{{Form::text('Location', $doctor->location,['class' => 'form-control', 'placeholder' => 'Location'])}}
</div>
</div>
</div> 
 
{{Form::hidden('_method','PUT')}}
 {{Form::submit('Submit',['class'=>"btn btn-primary"])}}  

 {!! Form::close() !!}
 
@endsection