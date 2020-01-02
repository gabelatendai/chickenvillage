
@extends('layouts.header')

@section('content')

    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Search results for:{{ $query }}</h1>
        </div>
    </div>

    <div class="container">
        <div class="row medium-padding120">
            <main class="main">

                <div class="row">
                    @if($news->count()>0)
                    <div class="case-item-wrap">
                        @foreach($news as $new)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{$new->image}}" alt="our case">
                                    </div>
                                    <a href="{{route('page-news',['slug'=>$new->slug]) }}"><h6 class="case-item__title">{{$new->title}}</h6></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                        @else
                    <h3 class="text--center">no post was found</h3>
                        @endif
                </div>

            </main>
        </div>
    </div>
@endsection


