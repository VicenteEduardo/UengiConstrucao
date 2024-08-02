@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')

<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/gallery-banner.jpg)">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">{{ $gallery->name }}</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{ route('site.gallery') }}">Galerias</a></li>
                <li>{{ $gallery->name }}</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->
    
    <!-- CONTENT SECTION START -->
    <div class="section-full p-t80 p-b50 bg-no-repeat bg-bottom-center bg-cover" style="background-image:url(images/background/bg-6.jpg);">
        <div class="container">

           
            <div class="portfolio-wrap mfp-gallery no-col-gap row">
            
                <!-- COLUMNS 1 --> 
                @foreach ($gallery->images as $item)
                <div class="masonry-item house col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="/storage/{{ $item->path }}">
                                <img src="/storage/{{ $item->path }}"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="/storage/{{ $item->path }}">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/storage/{{ $item->path }}" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                @endforeach
            
            </div>
            
                             
            
        </div>
    </div>
    <!-- CONTENT SECTION END  -->

</div>
@endsection