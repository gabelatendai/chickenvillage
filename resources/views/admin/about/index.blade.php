@extends('layouts.side_bar')

@section('content')

    <div class="panel panel-default">
                <div class="panel-heading">Company Information</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Logo</th>
                         <th>Name</th>
                         <th> Phone Number</th>
                         <th>Email</th>
                         <th>Description</th>
                         <th> Bio Information</th>

                          <th>Edit</th>
                     </tr>
                     </thead>

                  @foreach ($abouts as $about )
                      <tbody>
                      <tr><td><img src=" {{ $about ->image }}" width="100" height="80" class="img-thumbnail"></td>
                          <td> {{ $about ->name }}</td>
                          <td> {{  $about->pnumber }}</td>
                          <td> {{  $about->email }}</td>
                                <td> {{  $about->description }}</td>
                          <td> {{  $about->about }}</td>
                                 <td> <a href="{{ route('about.edit',['id'=> $about->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                </div>
            </div>

@endsection
