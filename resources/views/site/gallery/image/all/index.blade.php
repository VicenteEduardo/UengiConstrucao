@extends('layouts.merge.site')
@section('titulo', 'Galerias')
@section('content')

<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/gallery-banner.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Galerias de Imagens</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
     <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Galerias</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB  ROW END -->               

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50 bg-no-repeat bg-bottom-center bg-cover" style="background-image:url(/site/images/background/bg-6.jpg);">
        <div class="container">
        
            <!-- PAGINATION TOP START -->
         
            <!-- PAGINATION END -->
            
            <!-- GALLERY CONTENT START -->
            
            
            <div class="row portfolio-wrap mfp-gallery">
                @foreach ($galleries as $item)
                <div class="masonry-item house  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="{!! route('site.gallery.show', urlencode($item->name)) !!}">
                                <img src="/storage/{{ $item->cover }}"  alt="">
                            </a>
                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- GALLERY CONTENT END -->
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <h4 class="text-center"><b>{{ $galleries->links() }}</b></h4>
                </div>
    
            </div>
            <!-- PAGINATION START -->
          
            <!-- PAGINATION END -->                    
            
        </div>
    </div>
    <!-- SECTION CONTENT END -->
    
</div>
@endsection