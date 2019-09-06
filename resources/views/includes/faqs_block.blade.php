@include('includes.breadcrumbs')
<section class="section section-lg bg-white text-sm-left">
  <div class="shell-wide">
    <div class="range range-sm-center">
      <div class="cell-lg-11 cell-xl-8">
        <div class="range range-sm-center range-lg-justify range-50">
          <div class="cell-sm-10 cell-md-8">
            <h2>Frequently Asked Questions</h2>
            <p>You can contact us directly any time but take some time and read through the frequently asked questions on our website. If you have requested a quote already and you have some queries on that quote or your itinerary kindly contact our customer support or booking agent directly.</p>
            <!-- RD Mailform-->            
            <div class="range range-15">
              <div class="cell-sm-12">
                  @foreach((config('data.faqs.list')) as $key)

                  <h6>{{ $key['Q'] }}</h6>
                  {{ $key['A'] }}<br><br>
                  
                  @endforeach                     
              </div>                
            </div>        
          </div>
          <div class="cell-sm-10 cell-md-4 cell-lg-3 text-left">
            <ul class="list-lg list-contact contact-aside">
              <li>
                <h5>Socials</h5>
                <ul class="list-inline list-inline-sm">
                  <li><a class="icon icon-sm icon-gray-light fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-gray-light fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-gray-light fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-gray-light fa-google-plus" href="#"></a></li>
                  <li><a class="icon icon-sm icon-gray-light fa-pinterest" href="#"></a></li>
                  <!--li><a class="icon icon-sm icon-gray-light fa-linkedin" href="#"></a></li-->
                </ul>
              </li>
              <li> 
                <h5>Address</h5>
                <div class="box-inline"><span class="icon icon-secondary mdi mdi-map-marker"></span>
                  <div><a href="#">{{config('data.meta.contact_address')}}</a></div>
                </div>
              </li>
              <li> 
                <h5>Phone</h5>
                <div class="box-inline"><span class="icon icon-secondary mdi mdi-phone"></span>
                  <ul>
                    <li><a href="callto:#">{{config('data.meta.contact_number')}}</a></li>                    
                  </ul>
                </div>
              </li>
              <li> 
                <h5>E-mail</h5>
                <div class="box-inline"><span class="icon icon-secondary mdi mdi-email-open"></span><a href="mailto:#">{{config('data.meta.contact_email')}} </a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>