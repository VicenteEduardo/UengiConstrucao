@extends('layouts.merge.site')
@section('titulo', 'Erro 500')
@section('content')
<div class="page-content">
        
    <!-- BREADCRUMB ROW -->                            
   <div class="bg-gray-light p-tb20">
       <div class="container">
           <ul class="wt-breadcrumb breadcrumb-style-1">
               <li><a href="{{ route('site.home') }}">Home</a></li>
               <li>Error 500</li>
           </ul>
       </div>
   </div>
   <!-- BREADCRUMB ROW END -->
   
   <!-- SECTION CONTENT -->
   <div class="section-full p-t80 p-b50">
   
       <div class="container">
           <div class="section-content">
               <div class="row">
               
                   <div class="col-lg-8 col-md-6 col-sm-6">
                       <div class="page-notfound text-center">
                           <form method="post">
                               <strong class="text-uppercase">Error</strong>
                               <strong>500<i class="fa fa-frown-o site-text-primary"></i><i class="fa fa-frown-o site-text-primary"></i></strong>
                               <span>Erro interno</span>
                               <a href="{{ route('site.home') }}" class="site-button skew-icon-btn">GO TO HOME <i class="fa fa-angle-double-right"></i></a>
                           </form>
                       </div>
                   </div>
                   
                   <div class="col-lg-4 col-md-6 col-sm-6">
                       <div class="page-notfound-left text-center bg-gray">
                           <div class="constrot-strip"></div>
                           <span class="flaticon-plumber-working"></span>
                           <div class="constrot-strip"></div>
                       </div>
                   </div>
                   
               </div>
           </div>
       </div>
       
   </div>
   <!-- SECTION CONTENT END -->

</div>

@endsection
