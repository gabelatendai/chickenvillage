@extends('layouts.side_bar')

@section('content')
    <div class="panel panel-default col-md-6">
    <div class="panel-heading text-center">Add FAQ</div>

    <div class="panel-body">
        <form action="{{route('faqs.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
                <div class="form-body pal">
                    <div class="form-group">
                        <label for="inputName"  class="col-md-3 control-label pull-left">FAQ Respond</label>
                        <div class="col-md-9"><div class="input-icon right">
                                <textarea id="" type="text" name="faq" cols="30" rows="10" class="form-control"  required ></textarea></div>
                        </div></div></div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
                        </div>
                    </div>
        </form></div>
    </div>
    <div class="panel panel-default col-md-6 pull-left">
        <div class="panel-heading text-center">Add Respond</div>

        <div class="panel-body">
            <form action="{{route('respond.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}


                <label class="control-label col-md-3" for="last-name"> Frequently Asked Questions <span class="required" style="color:red;">*</span>
                </label>
                <div class="col-md-9"> <div class="input-icon right">
                        <select name="faq_id" class="select2_single form-control" tabindex="-1" required="required">
                            @foreach ($faqs as $category)
                                <option value="{{ $category->id}}" >{{ $category->faq}}</option>
                            @endforeach
                        </select>
                    </div>
                </div><br><br><br>
                <div class="form-body pal">
                    <div class="form-group">
                        <label for="inputName"  class="col-md-3 control-label pull-left">FAQ Respond</label>
                        <div class="col-md-9"><div class="input-icon right">
                                <textarea id="" type="text" name="respond" cols="30" rows="10" class="form-control" placeholder="Enter Your Respond" required ></textarea></div>
                        </div></div></div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
                    </div>
                </div>
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
    <div class="panel panel-default col-md-6">
                <div class="panel-heading">Manage FAQs</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>FAQs</th>

                         <th>Deleting</th>
                     </tr>
                     </thead>

                  @foreach ($faqs as $banner )
                      <tbody>
                      <tr>
                          <td> {{  $banner->faq }}</td>
                          <td> <a href="{{ route('faqs.destroy',['id'=> $banner->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                    <div class="text-center">
                        {{$faqs->links()}}
                    </div>
                </div>
            </div>


@endsection
