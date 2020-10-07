@extends('layouts.app')
@section('content')
<h3>Add Doctors and Specialists</h3>
 {!! Form::open(['action'=> 'DoctorsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
 <div class="row">
                  <div class="col-xs-3 col-sm-3 col-md-3">
<div class="form-group">  
{{Form::label('FirstName', 'First Name')}}
{{Form::text('FirstName', '',['class' => 'form-control', 'placeholder' => 'First Name'])}}
 </div>
</div>
<div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
{{Form::label('MiddleName', 'Middle Name')}}
{{Form::text('MiddleName', '',['class' => 'form-control', 'placeholder' => 'Middle Name'])}}
</div>
</div>
<div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                    	{{Form::label('LastName', 'Last Name')}}
{{Form::text('LastName', '',['class' => 'form-control', 'placeholder' => 'Last Name'])}}
</div>
</div>
</div> 
 <div class="form-group">  
{{Form::label('experience', 'Experience')}}
{{Form::textarea('experience', '',['class' => 'form-control', 'placeholder' => 'Experience'])}}
</div>
 <div class="form-group">  
{{Form::label('hospName', 'Name of Hospital')}}
{{Form::text('hospName', '',['class' => 'form-control', 'placeholder' => 'Hospital Name'])}}
</div>
 <div class="form-group">  
{{Form::label('certificate', 'Certificate')}}
{{Form::text('certificate', '',['class' => 'form-control', 'placeholder' => 'Certificate'])}}
</div>
<div class = 'form-group'>
    {{Form::file('img')}}
    </div>

{{Form::submit('Submit',['class'=>"btn btn-primary"])}}  

{!! Form::close() !!}
 
@endsection