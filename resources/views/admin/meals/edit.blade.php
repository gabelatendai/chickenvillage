@extends('layouts.side_bar')

@section('content')


        <h2 align="center">Edit  {{ $meals->food_name}}</h2>


        <form action="{{route('meals.update',['id' => $meals->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}


                    <div class="form-group">
                        <label for="inputName"  class=" control-label pull-left">Name</label>
                                <input id="name" type="text" name="food_name" value="{{ $meals->food_name}}" class="form-control"   /></div>


                        <div class="form-group">
                            <label for="inputName"  class=" control-label pull-left">Meal</label>
                                    <select name="meal" class="select2_single form-control" tabindex="-1" required="required">
                                        <option value="">...Select.....</option>
                                        <option value="breakfast">Breakfast</option>
                                        <option value="lunch">Lunch</option>
                                        <option value="supper">Supper</option>
                                    </select>
                            </div>
            <div class="form-group">
                <label for="inputName"  class=" control-label pull-left">Price</label>

                <input id="name" type="text" name="price" value="{{ $meals->price}}" class="form-control"  required /></div>
                        <div class="form-group">
                            <label for="inputName"  class=" control-label pull-left">Image</label>

                                    <input id="name" type="file" name="image" placeholder="" class="form-control"   /></div>

                            <div class="form-group">
                                <label for="inputName"  class=" control-label pull-left">Description</label>

                                        <textarea id="name" type="text" name="description" cols="30" rows="10" class="form-control"  >
                                            {{ $meals->description}}</textarea></div>



                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
                                </div>
                            </div>
            </form></div>
    </div>


@endsection
