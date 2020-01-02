@extends('layouts.side_bar')

@section('content')
    <a href="{{'/testimonial/create'}}" class="pull-right btn btn-info btn-xs"> <h3>Add New Testimonial</h3></a>
    <div class="panel panel-default">
                <div class="panel-heading">Testimonials</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Image</th>
                         <th>Person's Name</th>
                         <th> Position</th>
                         <th>Person's Comment</th>
                         <th>Editing</th>
                          <th>Deleting</th>
                     </tr>
                     </thead>

                  @foreach ($testimonials as $banner )
                      <tbody>
                      <tr> <td> <img src="{{ $banner ->image }}" width="40px" height="40px>"></td>
                          <td> {{  $banner->name }}</td>
                          <td> {{  $banner->position }}</td>
                                <td> {{  $banner->description }}</td>
                                 <td> <a href="{{ route('testimonial.edit',['id'=> $banner->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>
                          <td> <a href="{{ route('testimonial.destroy',['id'=> $banner->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                </div>
            </div>

@endsection
