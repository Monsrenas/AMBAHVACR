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
    <link rel="stylesheet" href="/assets/vendors/themify-icons/css/themify-icons.css">
    
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="assets/css/amba.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="140" id="home">
    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand amba-icon" href="#"> @include('complementos.piramide3d')
                
               <!-- <img src="assets/imgs/AMBAicon.svg" alt="" class="brand-img"> -->
                
                <h6 class="nav-link icon-text">AMBA HVAC/R <br><span class="icon-subtext">Professionals.LLC</span></h6></a>
            
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">{{trans('index.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">{{trans('index.about')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">{{trans('index.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">{{trans('index.testimonial')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">{{trans('index.blog')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">{{trans('index.contact')}}</a>
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
  
    

    <header id="home" class="header">
 
    
        <div class="overlay"></div>
     
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">  
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 style="color: white; text-shadow: 1px 1px white, -1px -1px #333;     background: linear-gradient(to right, rgb(4, 145, 188), rgb(165, 82, 4)); text-align: center;" class="carousel-title">
                                {{trans("index.companyname")}}</h1>
                            <h3 style="text-shadow: 0.1em 0.1em 0.2em black">
                                {{trans("index.comprehensive")}}<br> </h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">{{trans("index.weair-condition")}}<br>{{trans("index.yourhome")}}</h1>
                            <button class="btn btn-primary btn-rounded">{{trans("index.learnmore")}}</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">{{trans("index.weair-condition")}}<br>{{trans("index.yourbusiness")}}</h1>
                            <button class="btn btn-primary btn-rounded">{{trans("index.learnmore")}}</button>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">{{trans("index.weair-condition")}}<br>{{trans("index.yourvehicle")}}</h1>
                            <button class="btn btn-primary btn-rounded">{{trans("index.learnmore")}}</button>
                          </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="infos container mb-4 mb-md-2">
            <div  class="title">
                <a href="javascript:void(0)" class="link pr-1 "><img class="svgShadow" width="50" src="assets/imgs/ResidencialMN.svg" alt="icono residential">
                {{trans("index.residential")}}</a>
            </div>
            <div class="title">
                <a href="javascript:void(0)" class="link pr-1"> <img class="svgShadow" width="50" src="assets/imgs/bussinesMN.svg" alt="icono residential">
                {{trans("index.business")}}</a>
            </div>
            <div class="title">
                <a href="/vehicle" class="link pr-1" ><img  class="svgShadow" width="50" src="assets/imgs/vehicleMN.svg" alt="icono residential">
                {{trans("index.vehicle")}}</a>
            </div>
            <div class="socials text-right">
                <div class="row justify-content-between">
                    <div class="col">
                        <a class="d-block subtitle"><i class="ti-microphone pr-2"></i> (123) 456-7890</a>
                        <a class="d-block subtitle"><i class="ti-email pr-2"></i> amba.hvacr@gmail.com</a>
                        <div class="social-links">
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-facebook"></i></a>    
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include("aboutus")

    @include("expertises")

    @include("services")

    @include("testmonial")

    @include("blog")

    @include("contact")

	<div class="container">
        <footer class="footer mt-5 border-top">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center text-md-left">
                    <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a target="_blank" href="http://www.monsrenas.com">MONSRENAS</a></p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="social-links">
                        <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                        
                        <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                        
                    </div>
                </div>
            </div> 
        </footer>
    </div>
    
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    
    <!-- Owl carousel  -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>

    <!-- AMBA js -->
    <script src="assets/js/amba.js"></script>

</body>
</html>
