@extends('layouts.merge.site')
@section('titulo', 'Galerias')
@section('content')

<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/gallery-banner.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Galaerias de Imagens</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
     <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Gallery Grid 3</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB  ROW END -->               

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50 bg-no-repeat bg-bottom-center bg-cover" style="background-image:url(/site/images/background/bg-6.jpg);">
        <div class="container">
        
            <!-- PAGINATION TOP START -->
            <div class="filter-wrap p-tb15">
                <ul class="masonry-filter link-style  text-uppercase">
                    <li class="active"><a data-filter="*" href="#">All</a></li>
                    <li><a data-filter=".house" href="#">House</a></li>
                    <li><a data-filter=".building , .office" href="#">Building</a></li>
                    <li><a data-filter=".office" href="#">Office</a></li>
                    <li><a data-filter=".garden" href="#">Garden</a></li>
                    <li><a data-filter=".interior" href="#">Interior</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->
            
            <!-- GALLERY CONTENT START -->
            
            
            <div class="row portfolio-wrap mfp-gallery">
                <!-- COLUMNS 1 -->
                <div class="masonry-item house col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic1.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/site/images/gallery/pic1.jpg" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="masonry-item building  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic2.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/site/images/gallery/pic2.jpg" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="masonry-item office  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic3.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/site/images/gallery/pic3.jpg" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 4 -->
                <div class="masonry-item garden  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic4.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/site/images/gallery/pic4.jpg" class="mfp-link m-b15">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 5 -->
                <div class="masonry-item interior  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic5.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/site/images/gallery/pic5.jpg" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 6 -->
                <div class="masonry-item office  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic6.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/site/images/gallery/pic6.jpg" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 7 -->
                <div class="masonry-item building  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic7.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="/site/images/gallery/pic7.jpg" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 8 -->
                <div class="masonry-item house  col-lg-3 col-md-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                            <a href="javascript:void(0);">
                                <img src="/site/images/latest-projects/pic8.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                    </a>
                                    <a  href="/site/images/gallery/pic8.jpg" class="mfp-link">
                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
            <!-- GALLERY CONTENT END -->
            
            <!-- PAGINATION START -->
            <div class="pagination-bx  clearfix ">
               <ul class = "custom-pagination pagination-1">
                   <li><a href = "#">&laquo;</a></li>
                   <li class = "active"><a href = "#">1</a></li>
                   <li><a href = "#">2</a></li>
                   <li><a href = "#">3</a></li>
                   <li><a href = "#">4</a></li>
                   <li><a href = "#">5</a></li>
                   <li><a href = "#">&raquo;</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->                    
            
        </div>
    </div>
    <!-- SECTION CONTENT END -->
    
</div>
@endsection