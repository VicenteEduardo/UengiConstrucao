@extends('layouts.merge.site')
@section('titulo', 'Serviços')
@section('content')
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/product-banner.jpg);">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">{{ $service->name }}</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="{{ route('site.services') }}">Serviços</a></li>
                    <li>{{ $service->name }}</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">

            <!-- PRODUCT DETAILS -->
            <div class="container woo-entry">
                <div class="row m-b30">
                    <div class="col-md-4 col-sm-4 m-b30">
                        <div class="wt-box wt-product-gallery">
                            <a href="javascript:void(0);"><img src="/storage/{{ $service->photo }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="wt-post-title ">
                            <h3 class="post-title"><a href="javascript:void(0);">{{ $service->name }}</a></h3>
                        </div>
                        <h2 class="m-tb10">{!! number_format($service->price, 2, ',', '.') . ' ' . 'KZ' !!}</h2>
                        <div class="wt-post-text">
                            <p class="m-b10"> {!! html_entity_decode($service->description) !!}</p>
                        </div>
                       
                      
                    </div>
                </div>

                <!-- TITLE START -->
                <div class="p-b10">
                    <h2 class="text-uppercase">Serviços Relacionados</h2>
                    <div class="wt-separator-outer  m-b30">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <div class="row m-b30">
                    @foreach ($lasted as $item)
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="wt-box wt-product-box">
                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                <img src="images/products/pic-5.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="product-detail.html">
                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                        </a>
                                        <a class="mfp-link" href="{!! url('/servicos/' . urlencode($item->name)) !!}">
                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-info  text-center">
                                <div class="p-a10 bg-white">
                                    <h4 class="wt-title">
                                        <a href="{!! url('/servicos/' . urlencode($item->name)) !!}">{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</a>
                                    </h4>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                  

                </div>
             
             

            </div>
            <!-- PRODUCT DETAILS -->

        </div>
        <!-- CONTENT CONTENT END -->


    </div>

@endsection
