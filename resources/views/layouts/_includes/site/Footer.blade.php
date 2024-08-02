<!-- FOOTER START -->
<footer class="site-footer footer-dark">
    <!-- COLL-TO ACTION START -->
    <div class="call-to-action-wrap call-to-action-skew" style="background-image:url(/site/images/background/bg-4.png); background-repeat:repeat;background-color:#273447;">
        <div class="container">
            <div class="row ftr-c-t-action">
                <div class="col-lg-8 col-md-8">
                    <div class="call-to-action-left p-tb20 p-r50">
                        <h4 class="text-uppercase m-b10">Estamos prontos para construir seu sonho conte-nos mais sobre seu projeto</h4>
                       
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="call-to-action-right p-tb30">
                        <a href="{{ route('site.contact') }}" class="site-button skew-icon-btn text-uppercase"  style="font-weight:600;">
                            Contate-nos <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- FOOTER BLOCKES START -->  
    <div class="footer-top overlay-wraper">
        <div class="overlay-main bg-black" style="opacity:0;"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-lg-3 col-md-6">  
                    <div class="widget widget_about">
                        <h4 class="widget-title">Sobre companhia</h4>
                        <div class="logo-footer clearfix p-b15">
                            <a href="{{ route('site.home') }}"><img src="/site/LOGOAtivo16.png" width="230" height="67" alt=""/></a>
                        </div>
                        <p>A Uengi é uma empresa especializada em transformar visões em realidade através da construção. Nosso compromisso com a excelência e qualidade nos diferencia, oferecendo soluções personalizadas para projetos residenciais, comerciais e industriais.
                        </p>  
                    </div>
                </div> 
                <!-- RESENT POST -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget recent-posts-entry-date">
                        <h4 class="widget-title">Postagem recente</h4>
                        <div class="widget-post-bx">
                          
                          @foreach ($NewsP as $item )
                              
                       
                            <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                    <strong> {{ date('d', strtotime($item->date)) }}</strong>
                                    <span> {{ date('m', strtotime($item->date)) }}</span>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-header">
                                        <h6 class="post-title"><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! mb_substr($item->title, 0, 48, 'UTF-8') !!} </a></h6>
                                    </div>
                                 
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>      
                <!-- LINKS ÚTEIS -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">LINKS ÚTEIS</h4>
                        <ul>
                            <li><a href="{{ route('site.home') }}">Home</a></li>
                            <li><a href="{{ route('site.services') }}">Serviços</a></li>
                            <li><a href="{{ route('site.gallery') }}">Galerias</a></li>
                            <li><a href="{{ route('site.news') }}">Notícias</a></li>
                            <li><a href="{{ route('site.about') }}">Sobre</a></li>
                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">Newsletter</h4>
                        <div class="newsletter-bx">
                            <form role="search" method="post">
                                <div class="input-group">
                                <input name="news-letter" class="form-control" placeholder="DIGITE SEU E-MAIL" type="text">
                                <span class="input-group-btn">
                                    <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                </span>
                            </div>
                             </form>
                        </div>
                    </div>
                    <!-- SOCIAL LINKS -->
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">Social Links</h4>
                        <ul class="social-icons social-square social-darkest">
                            <li><a target="_blank" href="{{ $configuration->facebook }}" class="fa fa-facebook"></a></li>
                            <li><a target="_blank" href="{{ $configuration->twitter }}" class="fa fa-twitter"></a></li>
                          
                            <li><a  target="_blank" href="{{ $configuration->instagram }}" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
               
               <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                   <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md site-text-primary">
                            <span class="flaticon-placeholder"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Endereço</h5>
                            <p>{{ $configuration->adress }}</p>
                        </div>
                   </div>
                </div>
               <div class="col-lg-3 col-md-6 col-sm-6 p-tb20 ">
                   <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                        <div class="icon-md site-text-primary">
                            <span class="flaticon-smartphone"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Telefone</h5>
                            <p class="m-b0"> {{ $configuration->telefone }}</p>
                           
                        </div>
                   </div>
               </div>
             
               <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                   <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md site-text-primary">
                            <span class="flaticon-email"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                            <p class="m-b0">{{ $configuration->email }}</p>
                        
                        </div>
                    </div>
                </div>

          </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main bg-black" style="opacity:0;"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="cpr-ftr-section">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">© @php
                        echo date('Y')
                    @endphp UENGI.Todos os direitos reservados. Projetado por <a target="_blank" href="https://vrlidentidade.ao/">VRLIDENTIDADE.</a> </span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right"> 
                        <li><a href="{{ route('site.termsOfUse') }}">Termos e Condições</a></li>
                     
                        <li><a href="{{ route('site.contact') }}">Contactos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->


<!-- SCROLL TOP BUTTON -->
<button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>

</div>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
<div class="loading-box"></div>
<div class="loading-pic">
    <div class="noTrespassingOuterBarG">
        <div class="noTrespassingFrontBarG noTrespassingAnimationG">
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
        </div>
    </div>
    <div id="cssload-cupcake" class="cssload-box">
        <span class="cssload-letter">L</span>
    
        <div class="cssload-cupcakeCircle cssload-box">
            <div class="cssload-cupcakeInner cssload-box">
                <div class="cssload-cupcakeCore cssload-box"></div>
            </div>
        </div>
    
        <span class="cssload-letter cssload-box">A</span>
        <span class="cssload-letter cssload-box">D</span>
        <span class="cssload-letter cssload-box">I</span>
        <span class="cssload-letter cssload-box">N</span>
        <span class="cssload-letter cssload-box">G</span>
    </div>
    <div class="noTrespassingOuterBarG">
        <div class="noTrespassingFrontBarG noTrespassingAnimationG">
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
            <div class="noTrespassingBarLineG"></div>
        </div>
    </div>
</div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- STYLE SWITCHER  ======= --> 
<div class="styleswitcher">



<div class="styleswitcher-inner">

    <h6 class="switcher-title">Color Skin</h6>
    <ul class="color-skins">
        <li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1" title="default Theme"></a></li>
        <li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2" title="pink Theme"></a></li>
        <li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3" title="sky Theme"></a></li>
        <li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4" title="green Theme"></a></li>
        <li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5" title="red Theme"></a></li>
        <li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6" title="orange Theme"></a></li>
        <li><a class="theme-skin skin-7" href="?theme=css/skin/skin-7" title="purple Theme"></a></li>
        <li><a class="theme-skin skin-8" href="?theme=css/skin/skin-8" title="blue Theme"></a></li>
        <li><a class="theme-skin skin-9" href="?theme=css/skin/skin-9" title="gray Theme"></a></li>
        <li><a class="theme-skin skin-10" href="?theme=css/skin/skin-10" title="brown Theme"></a></li>
        <li><a class="theme-skin skin-11" href="?theme=css/skin/skin-11" title="gray Theme"></a></li>
        <li><a class="theme-skin skin-12" href="?theme=css/skin/skin-12" title="golden Theme"></a></li>
    </ul>   
    
    <h6 class="switcher-title">Background Image</h6>
    <ul class="background-switcher">
        <li><img src="/site/images/switcher/switcher-bg/thum/bg1.jpg" rel="/site/images/switcher/switcher-bg/large/bg1.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-bg/thum/bg2.jpg" rel="/site/images/switcher/switcher-bg/large/bg2.jpg"  alt=""></li>
        <li><img src="/site/images/switcher/switcher-bg/thum/bg3.jpg" rel="/site/images/switcher/switcher-bg/large/bg3.jpg"  alt=""></li>
        <li><img src="/site/images/switcher/switcher-bg/thum/bg4.jpg" rel="/site/images/switcher/switcher-bg/large/bg4.jpg"  alt=""></li>
    </ul>
    
    <h6 class="switcher-title">Background Pattern</h6>
    <ul class="pattern-switcher">
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg1.jpg" rel="/site/images/switcher/switcher-patterns/large/pt1.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg2.jpg" rel="/site/images/switcher/switcher-patterns/large/pt2.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg3.jpg" rel="/site/images/switcher/switcher-patterns/large/pt3.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg4.jpg" rel="/site/images/switcher/switcher-patterns/large/pt4.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg5.jpg" rel="/site/images/switcher/switcher-patterns/large/pt5.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg6.jpg" rel="/site/images/switcher/switcher-patterns/large/pt6.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg7.jpg" rel="/site/images/switcher/switcher-patterns/large/pt7.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg8.jpg" rel="/site/images/switcher/switcher-patterns/large/pt8.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg9.jpg" rel="/site/images/switcher/switcher-patterns/large/pt9.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg10.jpg" rel="/site/images/switcher/switcher-patterns/large/pt10.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg11.jpg" rel="/site/images/switcher/switcher-patterns/large/pt11.jpg" alt=""></li>
        <li><img src="/site/images/switcher/switcher-patterns/thum/bg12.jpg"  rel="/site/images/switcher/switcher-patterns/large/pt12.jpg" alt=""></li>
    </ul>
    
    <h6 class="switcher-title">Layout</h6>
    <ul class="layout-view">
        <li class="wide-layout active">Wide</li>
        <li class="boxed">Boxed</li>
    </ul>
    
    <h6 class="switcher-title">Nav</h6>
    <ul class="nav-view">
        <li class="nav-light active">Light</li>
        <li class="nav-dark">Dark</li>
    </ul>
    
    <h6 class="switcher-title">Nav</h6>
    <ul class="nav-width">
        <li class="nav-boxed active">Boxed</li>
        <li class="nav-wide">Wide</li>
    </ul>   
    
    <h6 class="switcher-title">Header</h6>
    <ul class="header-view">
        <li class="header-fixed active">Fixed</li>
        <li class="header-static">Static</li>
    </ul>
    
</div>    
</div>
<!-- STYLE SWITCHER END ==== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="/site/js/jquery-3.7.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="/site/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="/site/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="/site/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script  src="/site/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
<script  src="/site/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="/site/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="/site/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="/site/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
<script  src="/site/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="/site/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="/site/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="/site/js/jquery.owl-filter.js"></script><!-- OWL  Filter  -->
<script  src="/site/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->
<script  src="/site/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="/site/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script  src="/site/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->

<!-- SLIDER REVOLUTION -->
<script  src="/site/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="/site/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script  src="/site/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<script src="/site/js/rev-script-3.js"></script>


</body>

</html>
