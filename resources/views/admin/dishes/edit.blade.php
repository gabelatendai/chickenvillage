@extends('layouts.side_bar')

@section('content')


        <h2 align="center">Edit  {{ $dishes->name}}</h2>


        <form action="{{route('dishes.update',['id' => $dishes->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}


                    <div class="form-group">
                        <label for="inputName"  class=" control-label pull-left">Name</label>
                                <input id="name" type="text" name="name" value="{{ $dishes->name}}" class="form-control"   /></div>

            <div class="form-group">
                <label for="inputName"  class="col-md-3 control-label pull-left">Category</label>
                <div class="col-md-9"><div class="input-icon right">
                        <select name="category" class="select2_single form-control col-md-9" tabindex="-1">
                            <option value="">...Select.....</option>
                            <option value="salad">Salads</option>
                            <option value="main">Main</option>
                            <option value="drink">Drink</option>
                            <option value="desert">Desert</option>
                            <option value="soup">Soup</option>


                        </select>
                    </div></div></div>
                        <div class="form-group">
                            <label for="inputName"  class=" control-label pull-left">Image</label>

                                    <input id="name" type="file" name="image" placeholder="" class="form-control"   /></div>

                            <div class="form-group">
                                <label for="inputName"  class=" control-label pull-left">Description</label>

                                        <textarea id="name" type="text" name="description" cols="30" rows="10" class="form-control"  >
                                            {{ $dishes->description}}</textarea></div>


                                <div class="form-group">
                                    <label for="inputName"  class=" control-label pull-left">Price</label>

                                            <input id="name" type="text" name="price" value="{{ $dishes->price}}" class="form-control"  required /></div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
                                </div>
                            </div>
            </form></div>
    </div>


@endsection
