@extends('layouts.side_bar')

@section('content')
                <div class="panel-heading text-center">Add Dish</div>

                <div class="panel-body">
<form action="{{route('dishes.store')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}

    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Name</label>
            <div class="col-md-9"><div class="input-icon right">
                    <input id="name" type="text" value="{{ old('name')}}"  name="name" class="form-control"  required /></div>
            </div></div>
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
        <div class="form-body pal">
            <div class="form-group">
                <label for="inputName"  class="col-md-3 control-label pull-left">Price</label>
                <div class="col-md-9"><div class="input-icon right">
                        <input id="name" type="text" name="price" value="{{ old('price')}}" class="form-control"  required /></div>
                </div></div>
<div class="form-body pal">
 <div class="form-group">
 <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
<div class="col-md-9"><div class="input-icon right">
<input id="name" type="file" name="image" placeholder="" class="form-control"  required  /></div>
 </div></div>
    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Description</label>
            <div class="col-md-9"><div class="input-icon right">
                    <textarea id="" type="text" name="description" cols="30" rows="10" class="form-control"  required >{{ old('description')}}</textarea></div>
            </div></div>

<div class="ln_solid"></div>
 <div class="form-group">
 <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
 <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save Product</button>
 </div>
 </div></div>
</form></div>
                    </div>

                <script src="{{asset('js/summernote.js')}}"></script>
                <script>

	                $(document).ready(function () {
		                $('#summernote').summernote();
	                });
                </script>

                <script src="lib/bootstrap/js/bootstrap.js"></script>
                <script type="text/javascript">
	                $("[rel=tooltip]").tooltip();
	                $(function() {
		                $('.demo-cancel-click').click(function(){return false;});
	                });
                </script>
@endsection
