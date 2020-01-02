@extends ('layouts.master')
@section ('content')

   <section id="container" class="">
<section id="main-content">
      <section class="wrapper">
<div class="col-lg-6 col-lg-offset-3">

                                              <h2 align="center">Edit Tag {{ $tag->tag}}</h2>
@include('admin.includes.errors')


<form action="{{route('tags.update',['id' => $tag->id])}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}
<div class="form-body pal">
 <div class="form-group">
 <label for="inputName"  class="col-md-3 control-label pull-left">tag</label>
<div class="col-md-9"><div class="input-icon right">
<input id="name" type="text" value=" {{ $tag->tag }}" name="tag" placeholder="" class="form-control"   /></div>
 </div></div><hr>
<div class="ln_solid"></div>
 <div class="form-group">
 <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
<a href="{{ url('/view-records') }}"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
 <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Update</button>
 </div>
 </div>
</form>
 </div>
</div>
 </section> </section> </section>
</body>
</html>
        
@stop