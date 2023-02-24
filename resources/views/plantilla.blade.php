<!DOCTYPE html>
<html lang="en">

<?php 
if(!isset($_SESSION)){
                         session_start();
                       } 
$lng=session('lang');                        
?>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>AMBA HVAC/R</title>
    <link rel="icon" href="assets/imgs/AMBAicon.svg" type="image/svg" />

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="assets/css/amba.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="140" id="home">
  @section("navibar")
    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand amba-icon" href="/"> @include('complementos.piramide3d')
                <h6 class="nav-link icon-text">AMBA HVAC/R <br><span class="icon-subtext">Professionals.LLC</span></h6></a>
            
                

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"  href="#home">{{trans('index.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="Modal('aboutus','{{trans('index.about')}}')" href="#">{{trans('index.about')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="Modal('services','{{trans('index.services')}}')" href="#">{{trans('index.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="Modal('testmonial','{{trans('index.testmonial')}}')" href="#">{{trans('index.testimonial')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="Modal('blog','{{trans('index.blog')}}')" href="#">{{trans('index.blog')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="Modal('contact','{{trans('index.contact')}}')" href="#">{{trans('index.contact')}}</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <a class="nav-link btn btn-primary" href="components.html">{{trans('index.spareparts')}}</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        @include("usermenu")
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <div class="lang-icon title" style="width: 100%">  
                            @include('lang-icon')
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @include('complementos.modal')


	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    
    <!-- Owl carousel  -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>

    <!-- AMBA js -->
    <script src="assets/js/amba.js"></script>

  @show  

    
    @yield('content', 'Default Content')
      


</body>
</html>
