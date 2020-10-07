@extends('layouts.app')
@section('content')
<div class="container">
<h3> MSD Pharmacies </h3>
 @if (count($msds) >0)


              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Location</th>
                      <th scope="col">Action</th>
                      
                        
                          
      
              
           	 </tr>
            </thead>
             @foreach($msds as $msd)
            <tbody>
                  <tr>
                    <th scope="row">{{$msd->id}}</th>
                       <td>{{$msd->name}} </td>
                       <td>{{$msd->region}} </td>
                      <td><a href="/msds/{{$msd->id}}" class="btn btn-default"> View </a></td>
           	
    
   </tr>
       </tbody>
       </div>
       @endforeach
       
     </table>
   {{$msds->links()}}
   
 @else
 No records
 @endif
 
@endsection