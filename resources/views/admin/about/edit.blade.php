@extends('layouts.side_bar')

@section('content')


        <h2 align="center">Edit  {{ $abouts->name}}</h2>


        <form action="{{route('about.update',['id' => $abouts->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-body pal">
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Company Name</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input id="name" type="text" value="{{ $abouts->name}}"  name="name" class="form-control"  required /></div>
                    </div></div>
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Phone Number</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input name="pnumber" value="{{$abouts->pnumber}}" type="text" class="select2_single form-control col-md-9" tabindex="-1" required="required"/>
                        </div></div></div>
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Email</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input name="email" value="{{$abouts->email}}" type="email" class="select2_single form-control col-md-9" tabindex="-1" required="required"/>
                        </div></div></div>

                        <div class="form-body pal">
                            <div class="form-group">
                                <label for="inputName"  class="col-md-3 control-label pull-left">Address</label>
                                <div class="col-md-9"><div class="input-icon right">
                                        <textarea id="" type="text" name="address" cols="10" rows="2" class="form-control"  required >{{$abouts->address}}</textarea></div>
                                </div></div>
                            <div class="form-body pal">
                                <div class="form-group">
                                    <label for="inputName"  class="col-md-3 control-label pull-left">Bio Information/About</label>
                                    <div class="col-md-9"><div class="input-icon right">
                                            <textarea id="" type="text" name="about" cols="10" rows="5" class="form-control"  required >{{$abouts->about}}</textarea></div>
                                    </div></div>
                            <div class="form-body pal">
                                <div class="form-group">
                                    <label for="inputName"  class="col-md-3 control-label pull-left">Description</label>
                                    <div class="col-md-9"><div class="input-icon right">
                                            <textarea id="summernote" type="text" name="description" cols="10" rows="5" class="form-control"  required >{{$abouts->description}}</textarea></div>
                                    </div></div>
                                <div class="form-body pal">
                                    <div class="form-group">
                                        <label for="inputName"  class="col-md-3 control-label pull-left">Company Logo</label>
                                        <div class="col-md-9"><div class="input-icon right">
                                                <input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
                                        </div></div></div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Update</button>
                            </div>
                        </div></div>
            </form></div>
    </div>


@endsection
