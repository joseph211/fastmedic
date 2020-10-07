@extends('layouts.app')
@section('content')
<h3>Add Lab Results</h3>
 {!! Form::open(['action'=> 'DiagnosLabsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
  <div class="row">
                  
 <div class="form-group">  
{{Form::label('LabName', 'Lab Name')}}
{{Form::text('LabName', '',['class' => 'form-control', 'placeholder' => 'Lab Name'])}}
 </div>

                    <div class="form-group">
 {{Form::label('Result', 'Result')}}
{{Form::text('Result', '',['class' => 'form-control', 'placeholder' => 'Results'])}}
</div>


                    <div class="form-group">
                    	{{Form::label('Diagnosis', 'Diagnosis')}}
{{Form::textarea('Diagnosis', '',['class' => 'form-control', 'placeholder' => 'Diagnosis'])}}
</div>
</div>





 {{Form::submit('Submit',['class'=>"btn btn-primary"])}}  

 {!! Form::close() !!}
 
@endsection