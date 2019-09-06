@include('includes.breadcrumbs')
<section class="section section-lg bg-white text-sm-left">
  <div class="shell-wide">
    <div class="range range-sm-center">
      <div class="cell-lg-11 cell-xl-8">
        <div class="range range-sm-center range-lg-justify range-50">
          <div class="cell-sm-10 cell-md-8">
            <h2>Get in Touch</h2>
            <p>You can contact us any way that is convenient for you. We are available 24/7 via phone or email. You can also use a quick contact form below or visit our office personally.</p>            
            <!-- RD Mailform-->
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form class="text-left" method="post" action="{{route('send_email' , ['i'=>2])}}">  
              {{csrf_field()}}
              <div class="range range-15">
                <div class="cell-sm-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label form-label-outside rd-input-label" for="forms-name">First name</label>
                    <input class="form-input form-control-has-validation form-control-last-child" id="forms-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                  </div>
                </div>
                <div class="cell-sm-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label form-label-outside rd-input-label" for="forms-last-name">Last name</label>
                    <input class="form-input form-control-has-validation form-control-last-child" id="forms-last-name" type="text" name="last-name" data-constraints="@Required"><span class="form-validation"></span>
                  </div>
                </div>
                <div class="cell-sm-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label form-label-outside rd-input-label" for="forms-email">E-mail</label>
                    <input class="form-input form-control-has-validation form-control-last-child" id="forms-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                  </div>
                </div>
                <div class="cell-sm-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label form-label-outside rd-input-label" for="forms-phone">Phone</label>
                    <input class="form-input form-control-has-validation form-control-last-child" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required"><span class="form-validation"></span>
                  </div>
                </div>
                <div class="cell-sm-12">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label form-label-outside rd-input-label" for="forms-message">Message</label>
                    <textarea class="form-input form-control-has-validation form-control-last-child" id="forms-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                  </div>
                </div>
                <div class="cell-sm-12">
                  <div class="form-wrap form-wrap-validation">                    
                    <label class="form-label form-label-outside rd-input-label" for="ReCaptcha">Recaptcha:</label>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                  </div>
                </div>
              </div>
              <div class="form-button">
                <button class="button button-secondary" type="submit"><span>Send</span></button>
              </div>
            </form>
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