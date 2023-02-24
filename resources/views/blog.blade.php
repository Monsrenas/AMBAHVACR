
    <section class="section" id="blog">
        <div class="container mb-3">

            @php
            $locale = session()->get('locale');
             
            $lng=App::getLocale();
            
            @endphp
           ({{$locale}}) {{$lng}}
            <h6 class="xs-font mb-0">Culpa perferendis excepturi.</h6>
            <h3 class="section-title mb-5">Our Blog</h3>
                    <iframe style="width: 100%;" height="400"  src="https://amba-hvacr-{{$lng}}.blogspot.com/"></iframe>
        </div>
    </section>