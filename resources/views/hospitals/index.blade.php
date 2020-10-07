@extends('layouts.app')
@section('content')
<div class="container">
<h3>Specialist Hospitals </h3>
 @if (count($hospitals) >0)


              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Area of Specialization</th>
                      <th scope="col">Location</th>
                      <th scope="col">Action</th>
                      
                        
                          
      
              
           	 </tr>
            </thead>
             @foreach($hospitals as $hospital)
            <tbody>
                  <tr>
                    <th scope="row">{{$hospital->id}}</th>
                       <td>{{$hospital->name}} </td>
                       <td>{{$hospital->overview}} </td>
                       <td><small>  {{$hospital->location}} </small></td>
                       <td><a href="/hospitals/{{$hospital->id}}" class="btn btn-default"> View </a></td>
           	
    
   </tr>
       </tbody>
       </div>
       @endforeach
       
     </table>
   {{$hospitals->links()}}
   
 @else
 No records
 @endif
 
@endsection