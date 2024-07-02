@extends('layouts.merge.site')
@section('titulo', 'Serviços')
@section('content')

<div class="page-content  bg-white">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/services.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Serviços</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Serviços</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->                   
    
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="bg-service-team">
            <div class="container">
                <div class="section-content m-b50 ">
                    <div class="row">
                    
                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-trophy"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Best Quality</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-pencil"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Integrity</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-flag-checkered"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Strategy</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-hand-rock-o"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Safety</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-recycle"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Community</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-graduation-cap"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Sustainability</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-trophy"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Best Quality</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-pencil"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Integrity</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{{ route('site.services') }}" class="icon-cell"><i class="fa fa-flag-checkered"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Strategy</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
                                    <a href="{{ route('site.services') }}" class="site-button skew-icon-btn m-r15">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                      
                <!-- PAGINATION START -->
                <div class="pagination-bx clearfix ">
                    <ul class="custom-pagination pagination-1">
                       <li><a href="#">«</a></li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">»</a></li>
                    </ul>
                </div>
               <!-- PAGINATION END -->
               
            </div>
        </div>
     </div>
    <!-- SECTION CONTENT  END -->
    
</div>
@endsection