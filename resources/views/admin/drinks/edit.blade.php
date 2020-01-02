@extends('layouts.side_bar')

@section('content')


        <h2 align="center">Edit  {{ $drinks->name}}</h2>


        <form action="{{route('drinks.update',['id' => $drinks->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-body pal">
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Name</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input id="name" type="text" value="{{ $drinks->name}}"  name="name" class="form-control"  required /></div>
                    </div></div>
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Price</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input name="price" value="{{$drinks->price}}" type="text" class="select2_single form-control col-md-9" tabindex="-1" required="required"/>
                        </div></div></div>
                <div class="form-body pal">
                    <div class="form-group">
                        <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
                        <div class="col-md-9"><div class="input-icon right">
                                <input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
                        </div></div></div>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName"  class="col-md-3 control-label pull-left">Description</label>
                            <div class="col-md-9"><div class="input-icon right">
                                    <textarea id="summernote" type="text" name="description" cols="30" rows="10" class="form-control"  required >{{$drinks->description}}</textarea></div>
                            </div></div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save Banner</button>
                            </div>
                        </div></div>
            </form></div>
    </div>


@endsection
