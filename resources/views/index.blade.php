<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>AMBA HVAC/R</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="assets/css/ollie.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/imgs/AMBAicon.svg" alt="" class="brand-img"></a>
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
                        <a class="nav-link" href="#contact">Contact{{trans('index.contact')}}</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <a class="nav-link btn btn-primary" href="components.html">{{trans('index.spareparts')}}</a>
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
            <div  class="title">
                <a href="javascript:void(0)" class="link pr-1"> <img class="svgShadow" width="50" src="assets/imgs/bussinesMN.svg" alt="icono residential">
                {{trans("index.business")}}</a>
            </div>
            <div     class="title">
                <a href="javascript:void(0)" class="link pr-1" ><img  class="svgShadow" width="50" src="assets/imgs/vehicleMN.svg" alt="icono residential">
                {{trans("index.vehicle")}}</a>
            </div>
            <div class="socials text-right">
                <div class="row justify-content-between">
                    <div class="col">
                        <a class="d-block subtitle"><i class="ti-microphone pr-2"></i> (123) 456-7890</a>
                        <a class="d-block subtitle"><i class="ti-email pr-2"></i> amba.hvacr@gmail.com</a>
                    </div>
                    <div class="col">
                        <h6 class="subtitle font-weight-normal mb-2">{{trans("index.socialmedia")}}</h6>
                        <div class="social-links">
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-twitter-alt"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-google"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-pinterest-alt"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section" id="about" data-offset="3000" style="scroll-margin-inline-start: -400px" >

        <div class="container">

            <div class="row align-items-center mr-auto">
                <div class="col-md-4">
                    <!-- <h6 class="xs-font mb-0">nobis dolorem sapiente evenie.</h6> -->
                    <h3 class="section-title">{{trans("index.aboutus")}}</h3>
                    <p style="text-align: justify;">{{trans("index.aboutP1")}}</p>
                    <p style="text-align: justify;">{{trans("index.aboutP2")}}</p>     
                </div>
                <div class="col-md-4">
                    <!-- <h6 class="xs-font mb-0">nobis dolorem sapiente evenie.</h6> -->
                    <h6 class="section-title">{{trans("index.forit")}}</h6>
                    <p style="text-align: justify;"> <span style="color: rgb(252, 250, 250); background-color: gray; padding: 2px;">
                        {{trans("index.ourmission")}}</span> {{trans("index.missionP1")}}</p>
                    <p style="text-align: justify;">{{trans("index.missionP2")}}</p>     
                </div>

                <div class="col-md-4">
                    <!-- <h6 class="xs-font mb-0">nobis dolorem sapiente evenie.</h6> -->
                    <h6 class="section-title">{{trans("index.isreasonwhy")}}</h6>
                    <p style="text-align: justify;"><span style="color: rgb(252, 250, 250); background-color: gray; padding: 2px;">
                        {{trans("index.ourvision")}}</span> {{trans("index.visionP1")}}</p>
                    <p style="text-align: justify;">{{trans("index.visionP2")}}</p>     
                </div>
                <!--
                <div class="col-sm-6 col-md-4 ml-auto">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-calendar"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">15+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-face-smile"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">125+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-star"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">3434+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-user"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">80+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                </div>
                -->
             </div>
             
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h6 class="xs-font mb-0">HVAC specialist</h6>
            <h3 class="section-title mb-4">Expertises</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="assets/imgs/home-air-conditioner.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Air conditioning</h4>
                            <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="assets/imgs/air-conditioner-bussines.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Heating</h4>
                            <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="assets/imgs/air-condicioner-vehicle.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Cooling</h4>
                            <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="services">
        <div class="container">
            <h6 class="xs-font mb-0">Culpa perferendis excepturi.</h6>
            <h3 class="section-title pb-4">Our Products</h3>
        </div>

        <div id="owl-portfolio1" class="owl-carousel1 owl-theme mt-4">
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-1.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Fuga asperiores</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-2.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Voluptatibus iure!</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-3.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Autem minus animi</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-4.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Sed eligendi</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-8.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Totam eveniet assumenda!</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a> 
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="assets/imgs/img-9.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                <h6 class="mt-3 mb-2">Sapiente dolore ut</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>             
        </div>
    </section>


    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="xs-font mb-0">Culpa perferendis excepturi.</h6>
            <h3 class="section-title">Testmonials</h3>

            @include("complementos.evaluation")  
        </div>
    </section>

    <section class="section bg-overlay">

        <div class="container">
            <div class="infos mb-4 mb-md-2">
            <div class="title">
                <h6 class="subtitle font-weight-normal">Are locking for</h6>
                <h5>Lorem inpsum</h5>
                <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="socials">
                <div class="row justify-content-between">
                    <div class="col">
                        <a class="d-block subtitle"><i class="ti-microphone"></i> (123) 456-7890</a>
                        <a class="d-block subtitle"><i class="ti-email"></i>amba.hvacr@gmail.com</a>
                    </div>
                    <div class="col">
                        <h6 class="subtitle font-weight-normal mb-1">{{trans("index.socialmedia")}}</h6>
                        <div class="social-links">
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-twitter-alt"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-google"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-pinterest-alt"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="link pr-1"><i class="ti-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>
    </section>

    <section class="section" id="blog">

        <div class="container mb-3">
            <h6 class="xs-font mb-0">Culpa perferendis excepturi.</h6>
            <h3 class="section-title mb-5">Our Blog</h3>

            <div class="blog-wrapper">
                <div class="img-wrapper">
                    <img src="assets/imgs/img-3.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <div class="date-container">
                        <h6 class="day">29</h6>
                        <h6 class="mun">Jun</h6> 
                    </div>
                </div>
                <div class="txt-wrapper">
                    <h4 class="blog-title">Lorem ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum vitae ducimus dolor sed numquam, assumenda non dolorem in facilis eius alias voluptates, fugit maiores aspernatur ad rem saepe molestiae consequuntur. adipisicing elit. Repellat nam placeat laboriosam dolorum aperiam fuga voluptate, quis ea vel ab sunt incidunt quasi, molestias atque deserunt voluptates quae voluptatum sit.</p>

                    <a href="#" class="badge badge-info">Graphic Design</a>

                    <h6 class="blog-footer">
                        <a href="javascript:void(0)"><i class="ti-user"></i> Admin </a> |
                        <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 213 </a> |
                        <a href="javascript:void(0)"><i class="ti-comments"></i> 123</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section pb-0">

        <div class="container">
            <h6 class="xs-font mb-0">Culpa perferendis excepturi.</h6>
            <h3 class="section-title mb-5">Contact Us</h3>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-8 col-lg-7">

                    <form class="contact-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 d-none d-md-block order-1">
                    <ul class="list">
                        <li class="list-head">
                            <h6>CONTACT INFO</h6>
                        </li>
                        <li class="list-body">
                            <p class="py-2">Contact us and we'll get back to you within 24 hours.</p>
                            <p class="py-2"><i class="ti-location-pin"></i> 12345 Fake ST NoWhere AB Country</p>
                            <p class="py-2"><i class="ti-email"></i>amba.hvacr@gmail.com</p>
                            <p class="py-2"><i class="ti-microphone"></i> (123) 456-7890</p>

                        </li>
                    </ul> 
                </div>
            </div>

            <footer class="footer mt-5 border-top">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a target="_blank" href="http://www.monsrenas.com">MONSRENAS</a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <div class="social-links">
                            <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                        </div>
                    </div>
                </div> 
            </footer>
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    
    <!-- Owl carousel  -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="assets/js/Ollie.js"></script>

</body>
</html>