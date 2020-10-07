@extends('layouts.app')
@section('content')
<h3>Add Hospitals</h3>
 {!! Form::open(['action'=> 'HospitalsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}

 <div class="form-group">  
{{Form::label('Name', 'Name')}}
{{Form::text('Name', '',['class' => 'form-control', 'placeholder' => 'Name'])}}
 </div>

                    <div class="form-group">
 {{Form::label('Area_specialization', 'Area_specialization')}}
{{Form::text('Area_specialization', '',['class' => 'form-control', 'placeholder' => 'Area of Specialization'])}}
</div>

<div class="form-group">
{{Form::label('Location', 'Location')}}
{{Form::text('Location', '',['class' => 'form-control', 'placeholder' => 'Location'])}}
</div>

<div class = 'form-group'>
    {{Form::file('img')}}
    </div>

 

 {{Form::submit('Submit',['class'=>"btn btn-primary"])}}  

 {!! Form::close() !!}
 
@endsection