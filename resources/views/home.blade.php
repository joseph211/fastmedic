@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="/chat" class="btn btn-primary">Chat</a>    
            <example-comp></example-comp>
       
        <h3>Specialists</h3>
               
               @if(count($doctors )>0)

              <table class="table table-striped">
                  <tr>
                      <th>Name</th>
                      <th>Experience</th>
                      <th colspan="2">Action</th>
                      <th></th>

                  @foreach($doctors as $doctor)
              </tr>
                  <tr>
                       <td>{{$doctor->fName}} {{$doctor->lName}} <br><small>Added by {{$doctor->user->name}}</small></td>
                       <td><small>  {{$doctor->experience}} </small></td>
                      <td>   <a href="/doctors/{{$doctor->id}}/edit" class="btn btn-default">Edit</a></td>
                      <td>  
{!! Form::open(['action'=>['DoctorsController@destroy',$doctor->id],'method' => 'POST'])!!}
                        {{Form::hidden('_method','DELETE')}}
                           {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!}
                       </td>
                  </tr>
                  @endforeach
                 
              </table>
                   
              @else
                  <p>You have no Entries</p>
              @endif
                </div>

  
        </div>

    </div>
</div>
 
      
@endsection
