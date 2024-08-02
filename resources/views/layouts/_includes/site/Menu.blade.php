<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-6  mobile-sider-drawer-menu">

            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                            <ul class="social-bx list-inline pull-right">
                            


                                <li><a target="_blank" href="{{ $configuration->facebook }}" class="fa fa-facebook"></a></li>
                                <li><a target="_blank" href="{{ $configuration->twitter }}" class="fa fa-twitter"></a></li>
                              
                                <li><a  target="_blank" href="{{ $configuration->instagram }}" class="fa fa-instagram"></a></li>
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i>{{ $configuration->email }}</li>
                                <li><i class="fa fa-phone"></i> {{ $configuration->telefone }}</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="sticky-header main-bar-wraper ">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="{{ route('site.home') }}">
                              
                                <img src="/site/logo.png" width="140" height="60" alt="" />
                            </a>
                        </div>
                        <!-- NAV TOGGLE BUTTON -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            
                           
                            <span  class="fa fa-bars"> </span>
                          
                        </button>
                     
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="{{ route('site.home') }}">Home<i class="fa fa-chevron-down"></i></a>
                                </li>
                                <li>
                                    <a href="{{ route('site.services') }}">Serviços</a>

                                </li>
                                <li>
                                    <a href="{{ route('site.gallery') }}">Galerias</a>

                                </li>

                                <li>
                                    <a href="{{ route('site.contact') }}">Contactos</a>

                                </li>
                                <li class="submenu-direction">
                                    <a href="{{ route('site.news') }}">Noticias</a>

                                </li>
                                <li>
                                    <a href="{{ route('site.about') }}">Sobre</a>

                                </li>

                            </ul>
                        </div>



                    </div>
                    <!-- SITE Search -->
                   
                </div>
            </div>

        </header>
        <!-- HEADER END -->
