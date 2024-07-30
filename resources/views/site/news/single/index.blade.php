@extends('layouts.merge.site')
@section('titulo', 'Notícia')
@section('content')
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/blog-banner.jpg);">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">{{ $news->title }}</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="{{ route('site.news') }}">Notícia</a></li>
                    <li>{{ $news->title }}</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="wt-mid-page">
                    <!-- BLOG START -->
                    <div class="blog-post date-style-1 blog-post-single">
                        <div class="wt-post-media wt-img-effect">
                            <img src="/storage/{{ $news->path }}" alt="">
                        </div>
                        <div class="post-description-area p-t30">
                            <div class="wt-post-title ">
                                <h3 class="post-title">{{ $news->title }}</h3>
                            </div>
                            <div class="wt-post-meta ">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>  {{ date('d-m-Y', strtotime($news->date)) }}</strong>  </li>
                                    
                                </ul>
                            </div>
                            <div class="wt-post-text">
                                <p> {!! html_entity_decode($news->body) !!}</p>

                            </div>
                          
                          
                        </div>
                    </div>

                    <div class="section-content p-t50">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <h2 class="text-uppercase">Postagem de Notícias relacionada</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square">
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <!-- CAROUSEL -->
                        <div class="section-content">
                            <div class="owl-carousel blog-related-slider  owl-btn-vertical-center">
                                <!-- COLUMNS 1 -->
                                @foreach ($lasted as $item)
                                <div class="item">
                                    <div class="blog-post blog-grid date-style-3">
                                        <div class="wt-post-media wt-img-effect zoom-slow">
                                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}"><img src="/storage/{{ $news->path }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="wt-post-info p-tb30 p-m30">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! mb_substr($item->title, 0, 48, 'UTF-8') !!}</a>
                                                </h3>
                                            </div>
                                          
                                            <div class="clearfix">
                                                <div class="wt-post-readmore pull-left">
                                                    <a href="{!! url('/noticia/' . urlencode($item->title)) !!}" title="READ MORE" rel="bookmark"
                                                        class="site-button-link">Saber Mais</a>
                                                </div>
                                            
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                             
                              
                             

                            </div>
                        </div>
                    </div>

                    <!-- BLOG END -->
                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>

@endsection
