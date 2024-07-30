@extends('layouts.merge.site')
@section('titulo', 'Notícia')
@section('content')

<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/blog-banner.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Notícias</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END --> 
               
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Notícia</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->                   

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50 bg-white">
        <div class="container">
            <div class="row">
            
                <!-- RIGHT PART START -->
                <div class="col-lg-8 col-md-12">
                    
                    <!-- BLOG GRID START -->
                    <div class="portfolio-wrap wt-blog-grid-2 row">
                    
                        @foreach ($news as $item)
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{!! url('/noticia/' . urlencode($item->title)) !!}"><img src="/storage/{{ $item->path }}" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b15 bg-white bdr-1 bdr-gray">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! mb_substr($item->title, 0, 48, 'UTF-8') !!}</a></h3>
                                    </div>
                                  
                                  
                                    <div class="wt-post-readmore">
                                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}" title="READ MORE" rel="bookmark" class="site-button">Consulte Mais Informação</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- BLOG GRID END -->
                    <div class="pagination-bx col-lg-12 clearfix">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 py-5">
                                    <b>{{ $news->links() }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
                <!-- RIGHT PART END -->
                
                <!-- RIGHT PART START -->
                
                <!-- SIDE BAR START -->
                <div class="col-lg-4 col-md-12">
                
                    <aside  class="side-bar">

                            <!-- 2. RECENT POSTS -->
                            <div class="widget bg-white  recent-posts-entry">
                            <h4 class="widget-title">Postagens</h4>
                            <div class="section-content">
                                <div class="wt-tabs tabs-default border">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#web-design-1">Recente</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#graphic-design-1">Popular</a></li>
                                    </ul>
                                    <div class="tab-content">
                                    
                                        <div id="web-design-1" class="tab-pane active ">
                                            <div class="widget-post-bx">
                                                @foreach ($lasted as $item)
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="/storage/{{ $item->path }}"  alt="" class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}"> <h6 class="post-title">{!! mb_substr($item->title, 0, 48, 'UTF-8') !!} </h6></a>
                                                           
                                                        </div>

                                                       
                                                    </div>
                                                </div>
                                                @endforeach
                                              
                                            </div>
                                        </div>
                                        
                                        <div id="graphic-design-1" class="tab-pane">
                                            <div class="widget-post-bx">
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="images/blog/recent-blog/pic3.jpg" alt=""  class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Blog post title doler sit</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 10 comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="images/blog/recent-blog/pic1.jpg"  alt=""  class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Blog post title lorem </h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 29 comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="images/blog/recent-blog/pic2.jpg" alt=""  class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Blog post title a dummy</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 05 comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4. OUR GALLERY  -->
                        <div class="widget widget_gallery mfp-gallery">
                            <h4 class="widget-title">Nossa Galeria</h4>
                            <ul>
                                <li>
                                    <div class="wt-post-thum">
                                        <a href="images/gallery/pic1.jpg" class="mfp-link" ><img src="images/gallery/thumb/pic1.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic2.jpg" class="mfp-link"><img src="images/gallery/thumb/pic2.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum  ">
                                        <a href="images/gallery/pic3.jpg" class="mfp-link"><img src="images/gallery/thumb/pic3.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic4.jpg" class="mfp-link"><img src="images/gallery/thumb/pic4.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic5.jpg" class="mfp-link"><img src="images/gallery/thumb/pic5.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic6.jpg" class="mfp-link"><img src="images/gallery/thumb/pic6.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum">
                                        <a href="images/gallery/pic7.jpg" class="mfp-link" ><img src="images/gallery/thumb/pic7.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic8.jpg" class="mfp-link"><img src="images/gallery/thumb/pic8.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum  ">
                                        <a href="images/gallery/pic7.jpg" class="mfp-link"><img src="images/gallery/thumb/pic7.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic6.jpg" class="mfp-link"><img src="images/gallery/thumb/pic6.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic5.jpg" class="mfp-link"><img src="images/gallery/thumb/pic5.jpg" alt=""></a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="images/gallery/pic4.jpg" class="mfp-link"><img src="images/gallery/thumb/pic4.jpg" alt=""></a>
                                    </div>
                                </li>
                            </ul>
                            
                        </div> 
                                                     
                                                       
                            <!-- 6. NEWSLETTER -->
                        <div class="widget widget_newsletter-2 bg-white  ">
                            <h4 class="widget-title">Newsletter</h4>
                            <div class="newsletter-bx p-a30">
                                <div class="newsletter-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                
                                <div class="newsletter-content">
                                    <i>Digite seu e-mail e assine nossa newsletter.</i>
                                    </div>
                                    <div class="m-t20">
                                    <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>                                                                    
                     
                    </aside>

                </div>
                <!-- SIDE BAR END --> 
                                       
                <!-- RIGHT PART END -->
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
@endsection