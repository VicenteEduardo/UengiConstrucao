<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-6  mobile-sider-drawer-menu">

            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                            <ul class="social-bx list-inline pull-right">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i>geral@UENGI.aom</li>
                                <li><i class="fa fa-phone"></i>+244 999 999 999</li>
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
                                UENGI
                                <img src="" width="230" height="67" alt="" />
                            </a>
                        </div>
                        <!-- NAV TOGGLE BUTTON -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                        <!-- MAIN NAV -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="{{ route('site.home') }}">Home<i class="fa fa-chevron-down"></i></a>

                                </li>


                                <li>
                                    <a href="javascript:;">Serviços</a>

                                </li>
                                <li>
                                    <a href="{{ route('site.gallery') }}">Galerias</a>

                                </li>

                                <li>
                                    <a href="{{ route('site.contact') }}">Contactos</a>

                                </li>
                                <li class="submenu-direction">
                                    <a href="{{ route('site.news') }}">Noticias<i class="fa fa-chevron-down"></i></a>

                                </li>
                                <li>
                                    <a href="{{ route('site.about') }}">Sobre</a>

                                </li>

                            </ul>
                        </div>



                    </div>
                    <!-- SITE Search -->
                    <div class="site-search">
                        <form action="#">
                            <div class="input-group">
                                <input name="site-search" type="text" class="form-control"
                                    placeholder="Type to search">
                                <span class="input-group-btn">
                                    <button type="button" class="site-button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->
