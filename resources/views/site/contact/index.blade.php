@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')


    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/site/images/pic1.jpg);">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Contactos</h1>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Contactos</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENTG START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">

                <div class="section-content m-b50">
                    <div class="row">

                        <!-- LOCATION BLOCK-->
                        <div class="wt-box col-md-6">
                            <h4 class="text-uppercase">Localização</h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            <div class="gmap-outline m-b30">
                                <div id="gmap_canvas" class="google-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.010148022944!2d-0.13445098404809602!3d51.51302981811226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d31cdfefbb%3A0x27d5339f1859d7f1!2s62%20Dean%20St%2C%20London%20W1D%204QF%2C%20UK!5e0!3m2!1sen!2sin!4v1666266891426!5m2!1sen!2sin"
                                        width="600" height="450"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- CONTACT FORM-->
                        <div class="wt-box col-md-6">
                            <h4 class="text-uppercase">Formulário de Contato </h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>

                            <form class="cons-contact-form" method="post" action="{{ route('site.help.email') }}" action="form-handler.php">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input  name="name" placeholder="Nome" type="text" required class="form-control"
                                                 >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input name="email" placeholder="E-mail" class="form-control" required
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input name="phone_number" placeholder="Telefone" class="form-control" required
                                                    >
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon v-align-m"><i
                                                        class="fa fa-pencil"></i></span>
                                                <textarea name="subject" rows="4" class="form-control " required placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            {!! RecaptchaV3::field('register') !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button name="submit" type="submit" 
                                            class="site-button skew-icon-btn m-r15">Enviar <i
                                                class="fa fa-angle-double-right"></i></button>
                                        <button name="Resat" type="reset" value="Reset"
                                            class="site-button skew-icon-btn">Limpar dados <i
                                                class="fa fa-angle-double-right"></i></button>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                </div>

                <!-- DETALHE DE CONTATO BLOCK -->
                <div class="section-content ">
                    <div class="row">
                        <div class="wt-box col-md-12">
                            <h4 class="text-uppercase">DETALHE DE CONTATO </h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4 col-sm-12 m-b30">
                                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                        <div class="wt-icon-box-sm site-bg-primary m-b20 corner"><span
                                                class="icon-cell text-white"><i class="fa fa-phone"></i></span></div>
                                        <div class="icon-content">
                                            <h5>Telefone</h5>
                                            <p>{{ $configuration->telefone }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 m-b30">
                                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                        <div class="wt-icon-box-sm site-bg-primary m-b20 corner"><span
                                                class="icon-cell text-white"><i class="fa fa-envelope"></i></span></div>
                                        <div class="icon-content">
                                            <h6>Email</h6>
                                            <p>{{ $configuration->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 m-b30">
                                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                        <div class="wt-icon-box-sm site-bg-primary m-b20 corner"><span
                                                class="icon-cell text-white"><i class="fa fa-map-marker"></i></span></div>
                                        <div class="icon-content">
                                            <h5>Endereço</h5>
                                            <p>{{ $configuration->adress }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
@endsection
