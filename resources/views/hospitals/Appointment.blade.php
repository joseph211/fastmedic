 <h1>Book Appointment</h1>
          {!! Form::open(['action'=> 'DoctorsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
  <div class="row">
  
  <div class="form-group">  
{{Form::label('File/RegNo', 'File/RegNo')}}
{{Form::text('File-RegNo', '',['class' => 'form-control', 'placeholder' => 'File/RegNo'],required)}}
 </div>
              
 <div class="form-group">  
{{Form::label('FirstName', 'First Name')}}
{{Form::text('FirstName', '',['class' => 'form-control', 'placeholder' => 'First Name'])}}
 </div>


                    <div class="form-group">
 {{Form::label('MiddleName', 'Middle Name')}}
{{Form::text('MiddleName', '',['class' => 'form-control', 'placeholder' => 'Middle Name'])}}
</div>


                    <div class="form-group">
                    	{{Form::label('LastName', 'Last Name')}}
{{Form::text('LastName', '',['class' => 'form-control', 'placeholder' => 'Last Name'])}}
</div>

</div> 
 <div class="form-group">  
{{Form::label('Patienttype', 'PatientType')}}
{{Form::select('size', array('L' => 'General', 'S' => 'Private'))}}
</div>
 <div class="form-group">  
{{Form::label('hospName', 'Select Case')}}
{{Form::checkbox('hospName', '',['class' => 'form-control', 'placeholder' => 'Hospital Name'])}}
</div>
 <div class="form-group">  
{{Form::label('mobilenumber', 'MobileNumber')}}
{{Form::text('mobilenumber', '',['class' => 'form-control', 'placeholder' => 'Number'])}}
</div>


 {{Form::submit('Book Appointment',['class'=>"btn btn-primary"])}}  

 {!! Form::close() !!}
        