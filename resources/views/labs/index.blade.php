@extends('layouts.app')
@section('content')
<div class="container">
 
<h3 class="text-center">Diagnostic Labs</h3>


</div>
 @if (count($labs) >0)

       <div class="well">


              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Location</th>
                      <th scope="col">Action</th>
                      
                        
                          
      
              
             </tr>
            </thead>
       
               @foreach($labs as $lab)
       <tbody>
                  <tr>
                    <th scope="row">{{$lab->id}}</th>
                      <td> {{$lab->name}} </td>
                      <td> {{$lab->location}}</td>
                     
                      <td><a href="/labs/{{$lab->id}}" class="btn btn-default"> View </a></td>
            
    
   </tr>
       </tbody>

       
       </div>
       @endforeach

       </div>

   </div>
  
    {{$labs->links()}}
  
   
 @else
 No records
 @endif
 
@endsection