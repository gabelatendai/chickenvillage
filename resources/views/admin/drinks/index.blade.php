@extends('layouts.side_bar')

@section('content')
    <a href="{{'/drinks/create'}}" class="pull-right btn btn-info btn-xs"> <h3>Add Drink</h3></a>
    <div class="panel panel-default">
                <div class="panel-heading">Drinks</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Image</th>
                         <th> Name</th>
                         <th> Price</th>
                         <th>Description</th>
                         <th>Editing</th>
                          <th>Deleting</th>
                     </tr>
                     </thead>

                  @foreach ($drinks as $drink )
                      <tbody>
                      <tr> <td> <img src="{{ $drink ->image }}" width="40px" height="40px>"></td>
                          <td> {{  $drink->name }}</td>
                          <td> ${{  $drink->price }}</td>
                                <td> {{  $drink->description }}</td>
                                 <td> <a href="{{ route('drinks.edit',['id'=> $drink->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>
                          <td> <a href="{{ route('drinks.destroy',['id'=> $drink->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                </div>
            </div>

@endsection
