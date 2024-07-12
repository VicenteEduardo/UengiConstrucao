@extends('layouts.merge.site')
@section('titulo', 'Sobre')
@section('content')

<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/banner/about-banner.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Sobre </h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Sobre</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->                   
    

    
    <!-- NOSSOS MELHORES SERVIÇOS SECTION START -->
    <div class="section-full text-center bg-gray p-t80 p-b50">
        <div class="container">
        
            <!-- TITLE START -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">NOSSOS MELHORES SERVIÇOS</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <p>Melhores ofertas de construção</p>
            </div>
            <!-- TITLE END -->
            
            <!-- NOSSOS MELHORES SERVIÇOS BLOCKS START -->
            <div class="section-content">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white">
                            <div class="icon-sm site-text-primary m-b20">
                                <a href="services-detail.html" class="icon-cell"><i class="fa fa-life-ring" aria-hidden="true"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">MELHOR QUALIDADE</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white">
                            <div class="icon-sm site-text-primary m-b20">
                                <a href="services-detail.html" class="icon-cell"><i class="fa fa-trophy" aria-hidden="true"></i></a>
                            </div>
                            <div class="icon-content ">
                                <h5 class="wt-tilte text-uppercase">INTEGRIDADE</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white">
                            <div class="icon-sm site-text-primary m-b20">
                                <a href="services-detail.html" class="icon-cell"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">ESTRATÉGIA</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white">
                            <div class="icon-sm site-text-primary m-b20">
                                <a href="services-detail.html" class="icon-cell"><i class="fa fa-users" aria-hidden="true"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">SEGURANÇA</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white ">
                            <div class="icon-sm site-text-primary m-b20">
                                <a href="services-detail.html" class="icon-cell"><i class="fa fa-area-chart" aria-hidden="true"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">COMUNIDADE</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 6 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white">
                            <div class="icon-sm site-text-primary m-b20">
                                <a href="services-detail.html" class="icon-cell"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">SUSTENTABILIDADE</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- NOSSOS MELHORES SERVIÇOS BLOCKS END -->
            
        </div>
    </div>
    <!-- NOSSOS MELHORES SERVIÇOS SECTION END -->

    
    <!-- COUNTER SECTION START -->
    <div class="section-full p-t80 p-b50">
        
        <div class="container">
        
            <div class="section-head text-center">
                <h2 class="text-uppercase">Counter</h2>
                <span class="title-small">Melhores ofertas de construção</span>
                <div class="wt-separator site-bg-primary"></div>
            </div>
            <!-- COUNTER SECTION BLOCK START -->   
            <div class="section-content">
                <div class="row">
                        
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper left p-a20 text-black">
                            <span class="icon-md p-t10">
                                <i class="fa fa-building"></i>
                            </span>
                            <div class="icon-content">
                                <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">1000</span><b>+</b></div>
                                <span class="text-uppercase">Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper left p-a20 text-black">
                            <span class="icon-md p-t10">
                                <i class="fa fa-users"></i>
                            </span>
                            <div class="icon-content">
                                <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">1500</span><b>+</b></div>
                                <span>HAPPY CLIENTS</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper left p-a20 text-black">
                            <span class="icon-md p-t10">
                                <i class="fa fa-user-plus"></i>
                            </span>
                            <div class="icon-content">
                                <div class="counter font-26 font-weight-800 text-black m-b5">4500</div>
                                <span>WORKERS EMPLOYED</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper left p-a20 text-black">
                            <span class="icon-md p-t10">
                                <i class="fa fa-trophy"></i>
                            </span>
                            <div class="icon-content">
                                <div class="counter font-26 font-weight-800 text-black m-b5">260</div>
                                <span>AWARDS WON</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- COUNTER SECTION BLOCK END -->
        </div>
    </div>
    <!-- COUNTER END -->

    <!-- OUR BEST PROJECT SCETION START -->
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
        
            <!-- TITLE START -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">NOSSOS MELHORES PROJETOS</h2>
                <span class="title-small">Melhores ofertas de construção</span>
                <div class="wt-separator site-bg-primary"></div>
            </div>
            <!-- TITLE END -->
            
             <!-- OUR BEST PROJECT BLOCK START -->   
             <div class="section-content">
                <div class="row justify-content-center">
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-4 m-b30">
                        <div class="wt-box m-b30 p-a20 bg-white">
                            <div class="wt-media">
                                <a href="portfolio-detail.html"><img src="images/our-work/pic1.jpg" alt=""></a>
                          </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="portfolio-detail.html">Prédio comercial</a></h4>
                                <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat.</p>
                                <a href="portfolio-detail.html" class="site-button skew-icon-btn ">More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-4 m-b30">
                        <div class="wt-box m-b30  p-a20 bg-white">
                            <div class="wt-media">
                                <a href="portfolio-detail.html"><img src="images/our-work/pic2.jpg" alt=""></a>
                          </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="portfolio-detail.html">Centro de compras</a></h4>
                                <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat.</p>
                                <a href="portfolio-detail.html" class="site-button skew-icon-btn ">More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-4 m-b30">
                        <div class="wt-box m-b30 p-a20 bg-white">
                            <div class="wt-media">
                                <a href="portfolio-detail.html"><img src="images/our-work/pic3.jpg" alt=""></a>
                          </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="portfolio-detail.html">Prédio Hospitalar</a></h4>
                                <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat.</p>
                                <a href="portfolio-detail.html" class="site-button skew-icon-btn ">More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- OUR BEST PROJECT BLOCK END -->
             
        </div>
    </div>
    <!-- OUR BEST PROJECT SCETION END -->            

            
</div>
@endsection