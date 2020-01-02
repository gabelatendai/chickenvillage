<?php
/**
 * Created by PhpStorm.
 * User: gabela
 * Date: 26/10/2018
 * Time: 22:16
 */
?>

@extends('layouts.header')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <br>  <br>  <br>
    <div class="content-wrapper">

        <!-- Stunning Header -->


                <h1 class="page-header text--center">{{$news->title}}</h1>

        <div class="container">
            <div class="row medium-padding120">
                <main class="main">
                    <div class="col-lg-10 col-lg-offset-1">
                        <article class="hentry post post-standard-details">

                                <div class="post-thumb">
                                <img  class="img-thumbnail" src="{{$news->image}}" alt="seo">
                            </div>

                            <div class="post__content">


                                <div class="post-additional-info">



                                    <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                   {{$news->created_at->toFormattedDateString()}}
                                </time>

                            </span>

                                    <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">{{$news->category}}</a>

                            </span>

                                </div>

                                <div class="post__content-info">
{!!$news->msg!!}
                            </div>


                        <div class="pagination-arrow">
                            @if($prev)
                                <a href="{{route('page-news',['slug'=>$prev->slug])}}" class="btn-next-wrap">
                                    <div class="btn-content">
                                        <div class="btn-content-title">Next Post</div>
                                        <p class="btn-content-subtitle">{{$prev->title}}</p>
                                    </div>
                                    <svg class="btn-next">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </a>
                            @endif
@if($next)
                            <a href="{{route('page-news',['slug'=>$next->slug])}}" class="btn-prev-wrap">
                                <svg class="btn-prev">
                                    <use xlink:href="#arrow-left"></use>
                                </svg>
                                <div class="btn-content">
                                    <div class="btn-content-title">Previous Post</div>
                                    <p class="btn-content-subtitle">{{$next->title}}</p>
                                </div>
                            </a>
@endif

                        </div>

                    </div>

                    <!-- End Sidebar-->
                        </article></div>
                </main>
            </div>
        </div>


        <!-- End Subscribe Form -->

    </div>
@endsection



