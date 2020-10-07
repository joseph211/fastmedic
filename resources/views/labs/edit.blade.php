@extends('layouts.app')
@section('content')
<h3 class="text-center">Edit Lab Results</h3>
<a href="/labs" class="btn btn-default">Go back</a><br><br>
 {!! Form::open(['action'=> ['DiagnosLabsController@update',$lab->id],'method' => 'POST','enctype' => 'multipart/form-data']) !!}
  <div class="row">
                  
 <div class="form-group">  
{{Form::label('LabName', 'Lab Name')}}
{{Form::text('LabName', $lab->name,['class' => 'form-control', 'placeholder' => 'Lab Name'])}}
 </div>

                    <div class="form-group">
 {{Form::label('Result', 'Result')}}
{{Form::text('Result', $lab->results,['class' => 'form-control', 'placeholder' => 'Results'])}}
</div>


                    <div class="form-group">
                    	{{Form::label('Diagnosis', 'Diagnosis')}}
{{Form::textarea('Diagnosis', $lab->diagnosis,['class' => 'form-control', 'placeholder' => 'Diagnosis'])}}
</div>
</div>

{{Form::hidden('_method','PUT')}}
 {{Form::submit('Submit',['class'=>"btn btn-primary"])}}  

 {!! Form::close() !!}


 
@endsection