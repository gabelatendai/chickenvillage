@extends ('layouts.header')
@section ('content')

   <section id="container" class="">
<section id="main-content">
      <section class="wrapper">

<div class="col-lg-6 col-lg-offset-3">
 <div class="panel-heading">
                                              <h2 align="center">Add New User </h2>
</div>
 <div class="panel panel-body">
<form action="" method="post">
 {{ csrf_field()}}
<div class="form-body pal">
 <div class="form-group">
 <label for="inputName"  class="col-md-3 control-label pull-left">Name</label>
<div class="col-md-9"><div class="input-icon right">
<input id="name" type="text" name="name" placeholder="" class="form-control"  required  /></div>
 </div></div><br><br><br>
 <div class="form-body pal">
  <div class="form-group">
  <label for="inputName"  class="col-md-3 control-label pull-left">Email</label>
 <div class="col-md-9"><div class="input-icon right">
 <input id="name" type="email" name="email" placeholder="" class="form-control"  required  /></div>
  </div></div>
<div class="ln_solid"></div>
 <div class="form-group">
 <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
 <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Submit</button>
 </div>
 </div>
</form>
 </div>
</div>
 </section> </section> </section>
</body>
</html>
        
@stop