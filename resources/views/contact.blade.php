<section id="contact" class="section pb-0">

    <div class="container">
        <h6 class="xs-font mb-0">{{trans("index.contactusH1")}}</h6>
        <h3 class="section-title mb-5"> {{trans("index.contactus")}} </h3>

        <div class="row align-items-center justify-content-between">
            <div class="col-md-8 col-lg-7">

                <form class="contact-form">
                    <div class="form-row">
                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="{{trans("index.CUname")}}">
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" placeholder="{{trans("index.CUemail")}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="{{trans("index.CUmessage")}}"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="{{trans("index.CUsend")}}">
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-none d-md-block order-1">
                <ul class="list">
                    <li class="list-head">
                        <h6>{{trans("index.contactinfo")}}</h6>
                    </li>
                    <li class="list-body">
                        <p class="py-2">{{trans("index.CItext")}}</p>
                        <p class="py-2"><i class="ti-location-pin"></i> 12345 Fake ST NoWhere AB Country</p>
                        <p class="py-2"><i class="ti-email"></i>amba.hvacr@gmail.com</p>
                        <p class="py-2"><i class="ti-microphone"></i> (123) 456-7890</p>

                    </li>
                </ul> 
            </div>
        </div>


    </div>
</section>