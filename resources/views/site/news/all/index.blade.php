@extends('layouts.merge.site')
@section('titulo', 'Notícia')
@section('content')

<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/blog-banner.jpg);">
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
                <li>Blog grid 2 with sidebar</li>
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
                    
                        <!-- COLUMNS 1 --> 
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="images/blog/grid/pic1.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b15  bg-white bdr-1 bdr-gray">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">Post Title</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Jun</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single.html">By <span>Devid</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">17  Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over.</p> 
                                    </div>
                                    <div class="wt-post-readmore">
                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 --> 
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="images/blog/grid/pic2.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b15  bg-white bdr-1 bdr-gray">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">Post Title</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Jun</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single.html">By <span>Devid</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">17  Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over.</p> 
                                    </div>
                                    <div class="wt-post-readmore">
                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 --> 
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="images/blog/grid/pic3.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b15  bg-white bdr-1 bdr-gray">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">Post Title</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Jun</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single.html">By <span>Devid</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">17  Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over.</p> 
                                    </div>
                                    <div class="wt-post-readmore">
                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 --> 
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="images/blog/grid/pic4.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b15  bg-white bdr-1 bdr-gray">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">Post Title</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Jun</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single.html">By <span>Devid</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">17  Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over.</p> 
                                    </div>
                                    <div class="wt-post-readmore">
                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 --> 
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="images/blog/grid/pic5.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b15  bg-white bdr-1 bdr-gray">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">Post Title</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Jun</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single.html">By <span>Devid</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">17  Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over.</p> 
                                    </div>
                                    <div class="wt-post-readmore">
                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 --> 
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="images/blog/grid/pic6.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a30 p-b15 bg-white bdr-1 bdr-gray">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">Post Title</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Jun</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single.html">By <span>Devid</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">17  Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over.</p> 
                                    </div>
                                    <div class="wt-post-readmore">
                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- BLOG GRID END -->
                    
                    <!-- PAGINATION START -->
                    <div class="pagination-bx col-lg-12 clearfix ">                                
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
                <!-- RIGHT PART END -->
                
                <!-- RIGHT PART START -->
                
                <!-- SIDE BAR START -->
                <div class="col-lg-4 col-md-12">
                
                    <aside  class="side-bar">

                            <!-- 2. RECENT POSTS -->
                            <div class="widget bg-white  recent-posts-entry">
                            <h4 class="widget-title">Posts</h4>
                            <div class="section-content">
                                <div class="wt-tabs tabs-default border">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#web-design-1">Recent</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#graphic-design-1">Popular</a></li>
                                    </ul>
                                    <div class="tab-content">
                                    
                                        <div id="web-design-1" class="tab-pane active ">
                                            <div class="widget-post-bx">
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="images/blog/recent-blog/pic1.jpg"  alt="" class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Lorem ipsum dolor sit </h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 20 comment</li>
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
                                                            <h6 class="post-title">Debitis nihil placeat, illum</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 15 comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="images/blog/recent-blog/pic3.jpg" alt=""  class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Elit Assumenda vel amet </h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 07 comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                            <h4 class="widget-title">Our Gallery</h4>
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
                        <!-- 7. OUR CLIENT -->
                        <div class="widget">
                            <h4 class="widget-title">Our Client</h4>
                            <div class="owl-carousel widget-client p-t10">
                            
                                <!-- COLUMNS 1 --> 
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="about-1.html"><img src="images/client-logo/logo1.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 --> 
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="about-1.html"><img src="images/client-logo/logo2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 --> 
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="about-1.html"><img src="images/client-logo/logo3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                
                            </div>
                        </div>                                 
                        <!-- 13. SEARCH -->
                        <div class="widget bg-white ">
                            <h4 class="widget-title">Search</h4>
                            <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>                                
                            <!-- 6. NEWSLETTER -->
                        <div class="widget widget_newsletter-2 bg-white  ">
                            <h4 class="widget-title">Newsletter</h4>
                            <div class="newsletter-bx p-a30">
                                <div class="newsletter-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                
                                <div class="newsletter-content">
                                    <i>Enter your e-mail and subscribe to our newsletter. Sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</i>
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
                        <!-- 12. TAGS -->
                        <div class="widget bg-white  widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="about-1.html">Trouble </a>
                                <a href="about-1.html">Programmers</a>
                                <a href="about-1.html">Never</a>
                                <a href="about-1.html">Tell</a>
                                <a href="about-1.html">Doing</a>
                                <a href="about-1.html">Person</a>
                                <a href="about-1.html">Inventors Tag</a>
                                <a href="about-1.html">Between </a>
                                <a href="about-1.html">Abilities</a>
                                <a href="about-1.html">Fault </a>
                                <a href="about-1.html">Gets </a>
                                <a href="about-1.html">Macho</a>
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