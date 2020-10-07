@extends('layouts.app')
@section('content')

 <p></p>
          <p></p>
<div class="jumbotron">
        <div class="container">
  <h2 class="display-3">UDSM TELEMEDICINE PROJECT</h2>
        	<div class="row">
   <div class="col-md-8">
        <p>This is a telemedine for remote patients </p>
         <p><a class="btn btn-primary btn-lg" href="/telemedicine" role="button">Learn more &raquo;</a></p>
    </div>
    <div class="col-md-4">
    	  <p></p><br>
       <p><a class="btn btn-primary btn-lg" href="/register" role="button"> Sign Up Today </a></p>
    </div>
</div>
        
         
         
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Hospitals</h2>
            <p> </p>
            <p><a class="btn btn-secondary" href="/hospitals" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Diagnostic Labs</h2>
            <p></p>
            <p><a class="btn btn-secondary" href="/labs" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Doctors</h2>
            <p></p>
            <p><a class="btn btn-secondary" href="/doctors" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Telemedicine 2020</p>
    </footer>
 
@endsection