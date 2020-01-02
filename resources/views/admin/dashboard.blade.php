<?php
/**
 * Created by PhpStorm.
 * User: gabela
 * Date: 28/10/2018
 * Time: 11:15
 */?>
@extends('layouts.side_bar')

@section('content')
    <div class="panel panel-default">
        <a href="#page-stats" class="panel-heading" data-toggle="collapse">Latest Stats</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="knob-container">
                        <input class="knob" data-width="200" data-min="0" data-max="3000" data-displayPrevious="true" value="{{$meals->count()}}" data-fgColor="#92A3C2" data-readOnly=true;>
                        <h3 class="text-muted text-center">Meals/Menu</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="knob-container">
                        <input class="knob" data-width="200" data-min="0" data-max="2000" data-displayPrevious="true" value="{{$dishes->count()}}" data-fgColor="#92A3C2" data-readOnly=true;>
                        <h3 class="text-muted text-center">Dishes</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="knob-container">
                        <input class="knob" data-width="200" data-min="0" data-max="2000" data-displayPrevious="true" value="{{$news->count()}}" data-fgColor="#92A3C2" data-readOnly=true;>
                        <h3 class="text-muted text-center">News & Events</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="knob-container">
                        <input class="knob" data-width="200" data-min="0" data-max="2000" data-displayPrevious="true" value="{{$banners->count()}}" data-fgColor="#92A3C2" data-readOnly=true;>
                        <h3 class="text-muted text-center">Banners</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading no-collapse">Our Team<span class="label label-warning">+10</span></div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                    <tr>
                        <td><img src="{{$team->image}}" width="50" height="40"></td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->role}}</td>
                       
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{$teams->links()}}
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading no-collapse">
                <span class="panel-icon pull-right">
                    <a href="#" class="demo-cancel-click" rel="tooltip" title="Click to refresh"><i class="fa fa-refresh"></i></a>
                </span>

                   About
                </div>
                <table class="table list">
                    <tbody>
                    @foreach($abouts as $about)
                    <tr>
                        <td>
                        Name
                        </td>
                        <td>
                            {{$about->name}}

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><p class="title">Address</p></a>
                        </td>
                        <td>
                            <p>{{$about->address}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><p class="title"> Phone Number</p></a>

                        </td>
                        <td>
                            <p>{{$about->pnumber}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><p class="title">Email Address</p></a>

                        </td>
                        <td>
                            <p>{{$about->email}}</p>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{'admin/about'}}" class="text-center pull-right"><p align="center">Edit</p></a>
                        </td>
                    </tr>@endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <footer>
        <hr>

        <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
        <p class="pull-right"> Chicken Village</p>
        <p>© 2018 </p>
    </footer>
    </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <script type="text/javascript">
		$("[rel=tooltip]").tooltip();
		$(function() {
			$('.demo-cancel-click').click(function(){return false;});
		});
    </script>

@endsection