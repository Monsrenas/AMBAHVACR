    <section class="section" id="services">
        <div class="container">
            <h6 class="xs-font mb-0">{{trans("index.ourservicesH1")}}</h6>
            <h3 class="section-title pb-4">{{trans("index.ourservices")}}</h3>
        </div>
        
        <div id="owl-portfolio" class="owl-carousel owl-theme mt-4">
        
            <?php
                
             
                $xImagen=[["assets/imgs/servicio001.png","","Lorem ipsum dolor sit amet, consectetur adipisicing elit."],
                        ["assets/imgs/img-1.jpg","","Lorem ipsum dolor sit amet, consectetur adipisicing elit."],
                        ["assets/imgs/img-2.jpg","","Lorem ipsum dolor sit amet, consectetur adipisicing elit."],
                        ["assets/imgs/img-3.jpg","Autem minus animi","Lorem ipsum dolor sit amet, consectetur adipisicing elit."],
                        ["assets/imgs/img-4.jpg","Sed eligendi","Lorem ipsum dolor sit amet, consectetur adipisicing elit."],
                        ["assets/imgs/img-8.jpg","Totam eveniet assumenda!","Lorem ipsum dolor sit amet, consectetur adipisicing elit."],
                        ["assets/imgs/img-9.jpg","Sapiente dolore ut","Lorem ipsum dolor sit amet, consectetur adipisicing elit."]];
                $i=0;
                ?>
        
            @forelse($xImagen as $imgs)
                <a href="javascript:void(0)" class="item expertises-item">
                    <img src="{{$imgs[0]}}"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page" class="box-shadow">
                    <h6 class="mt-3 mb-2">{{$i++}} {{$imgs[1]}}</h6>
                    <p class="xs-font">{{$imgs[2]}}</p>
                </a>    
                
            @empty
                <p>No hay usuarios</p>
            @endforelse
        </div>
    </section>
    	<!-- core  -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    
        <!-- bootstrap 3 affix -->
        <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
        
        <!-- Owl carousel  -->
        <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>
    
        <!-- AMBA js -->
        <script src="assets/js/amba.js"></script>
    