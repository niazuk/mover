<footer class="page-footer page-footer-default text-sm-left"> 
        <div class="shell-wide section-md">
          <div class="range range-50 range-sm-reverse range-lg-right">
            <div class="cell-sm-6 cell-lg-4">
              <h4>Contact Information</h4>
              <ul class="list-xs">
                <li class="box-inline"><span class="icon icon-secondary mdi mdi-map-marker"></span>
                  <div><a href="#">{{config('data.meta.contact_address')}}</a></div>
                </li>
                <li class="box-inline"><span class="icon icon-secondary mdi mdi-phone"></span>
                  <ul class="list-comma">
                    <li><a href="callto:{{config('data.meta.contact_number')}}">{{config('data.meta.contact_number')}}</a></li>
                  </ul>
                </li>
                <li class="box-inline"><span class="icon icon-secondary mdi mdi-email-open"></span><a href="mailto:{{config('data.meta.contact_email')}}">{{config('data.meta.contact_email')}}</a></li>
                <li> 
                  <ul class="list-inline list-inline-sm">
                    <li><a class="icon icon-sm icon-gray-3 fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-instagram" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-pinterest" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-linkedin" href="#"></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="cell-sm-6 cell-lg-4"><a href="/"><img class="logo-inverse" src="{{asset('storage/images/logo-inverse-270x69.png')}}" alt="logo {{config('data.meta.sitename')}}" width="270" height="69"/><img class="logo-default" src="{{asset('storage/images/logo-default-270x69.png')}}" alt="logo {{config('data.meta.sitename')}}" width="270" height="69"/></a><br>

              <img style="padding-top: 20px;" src="{{asset('storage/images/card-logo pavel.png')}}" alt="card image {{config('data.meta.sitename')}}" width="270" height="69"/>
              <p class="rights">&copy;&nbsp;<span id="copyright-year"></span>
                &nbsp;
                All Rights Reserved
                &nbsp;<a href="#">Terms of Use</a>
                &nbsp;
                and
                &nbsp;<a href="#">Privacy Policy</a>
              </p>
            </div>
          </div>
        </div>
        <div class="rd-google-map-wrap">
          <iframe src="{{config('data.meta.mapurl')}}"
    width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </footer>