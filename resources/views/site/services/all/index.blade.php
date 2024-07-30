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
                    
                      
                     
                        @foreach ($services as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a20 bg-white bdr-1 bdr-gray">
                                <div class="wt-icon-box-sm radius site-text-primary bdr-2 m-b20">
                                    <a href="{!! url('/servicos/' . urlencode($item->name)) !!}" class="icon-cell"><i class="fa fa-flag-checkered"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</h5>
                                    <p>{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</p>
                                    <a href="{!! url('/servicos/' . urlencode($item->name)) !!}" class="site-button skew-icon-btn m-r15">Saber Mais <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                      
             
               
            </div>
        </div>
     </div>
    <!-- SECTION CONTENT  END -->
    
</div>
@endsection