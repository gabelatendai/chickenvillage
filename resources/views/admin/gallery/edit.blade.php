@extends('layouts.side_bar')

@section('content')
    <div class="panel-default">
<div class="panel-heading">
        <h2 align="center">Edit </h2></div>


        <form action="{{route('gallery.update',['id' => $galleries->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-group">
                <label for="inputName"  class="col-md-3 control-label pull-left">Category</label>
                <div class="col-md-9"><div class="input-icon right">
                        <select name="caption" class="select2_single form-control col-md-9" tabindex="-1">
                            <option value="">...Select.....</option>
                            <option value="team">Our Team</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="people">People</option>

                        </select>
                    </div></div></div>
                <div class="form-body pal">
                    <div class="form-group">
                        <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
                        <div class="col-md-9"><div class="input-icon right">
                                <input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
                        </div></div>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName"  class="col-md-3 control-label pull-left">Description</label>
                            <div class="col-md-9"><div class="input-icon right">
                                    <textarea id="summernote" type="text" name="description" cols="30" rows="10" class="form-control"  required >{{$galleries->description}}</textarea></div>
                            </div></div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Update</button>
                            </div>
                        </div></div>
            </form></div>


@endsection
