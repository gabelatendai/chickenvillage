@extends('layouts.side_bar')

@section('content')
                <div class="panel-heading text-center">Add Staff</div>

                <div class="panel-body">
<form action="{{route('team.save')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}

    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Name</label>
            <div class="col-md-9"><div class="input-icon right">
                    <input id="name" type="text" value="{{ old('name')}}"  name="name" class="form-control"  required /></div>
            </div></div>
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Role</label>
            <div class="col-md-9"><div class="input-icon right">
            <select name="role" class="select2_single form-control col-md-9" tabindex="-1">
                <option value="">...Select.....</option>
                <option value="Dirctor">Director</option>
                <option value="Shop Manager">Shop Manager</option>
                <option value="Shift Manager">Shift Manager</option>
                <option value="Chef">Cheff</option>
            </select>
                </div></div></div>
        <div class="form-body pal">
            <div class="form-group">
                <label for="inputName"  class="col-md-3 control-label pull-left">Phone Number</label>
                <div class="col-md-9"><div class="input-icon right">
                        <input id="name" type="text" name="pnumber" value="{{ old('pnumber')}}" class="form-control"   /></div>
                </div></div>
<div class="form-body pal">
 <div class="form-group">
 <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
<div class="col-md-9"><div class="input-icon right">
<input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
 </div></div>

<div class="ln_solid"></div>
 <div class="form-group">
 <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
 <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
 </div>
 </div></div>
</form></div>
                    </div>
@endsection
