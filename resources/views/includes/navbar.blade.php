<header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <!--div class="rd-navbar-top-panel rd-navbar-collapse">
              <div class="rd-navbar-top-panel-inner">
                <div class="left-side">
                  <ul class="list-inline list-inline-sm">
                    <li><a class="icon icon-sm icon-gray-3 fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-instagram" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-pinterest" href="#"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-linkedin" href="#"></a></li>
                  </ul>
                </div>
                <div class="right-side"><a class="button-link button-link-secondary" href="#">Make an Appointment</a></div>
              </div>
            </div-->
            <div class="rd-navbar-corporate-container">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar collapse toggle-->
                <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="/"><img class="logo-default" src="{{asset('storage/images/logo-default-270x69.png')}}" alt="logo {{config('data.meta.sitename')}}" width="297" height="76"/><img class="logo-inverse" src="{{asset('storage/images/logo-inverse-270x69.png')}}" alt="logo {{config('data.meta.sitename')}}" width="297" height="76"/></a></div>
                <div class="rd-navbar-corporate-inner">
                  <div class="unit unit-horizontal unit-spacing-xs unit-middle unit-center">
                    <div class="unit__left"><span class="icon icon-sm icon-circle icon-secondary mdi mdi-phone"></span></div>
                    <div class="unit__body">
                      <ul>
                        <li><a class="text-gray-darker" href="callto:{{config('data.meta.contact_number')}}">{{config('data.meta.contact_number')}}</a></li>
                        <!--li><a class="text-gray-darker" href="callto:#">1-800-8763-098</a></li-->
                      </ul>
                    </div>
                  </div>
                  <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                    <div class="unit__left"><span class="icon icon-sm icon-circle icon-secondary mdi mdi-email-outline"></span></div>
                    <div class="unit__body">
                      <ul class="text-gray-darker">
                        <li><a href="mailto:{{config('data.meta.contact_email')}}">{{config('data.meta.contact_email')}}</a></li>
                        <!--li>Sat–Sun: 9:00am–3:00pm</li-->
                      </ul>
                    </div>
                  </div>
                  <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                    <div class="unit__left"><span class="icon icon-sm icon-circle icon-secondary mdi mdi-map-marker"></span></div>
                    <div class="unit__body"><a class="text-gray-darker" href="#">{{config('data.meta.siteloc')}}</a></div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-panel-nav"> 
                <div class="rd-navbar-panel-nav-inner">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li {{ Request::is('/') ? 'class=active' : null }}><a href="/">Home</a>
                        <!-- RD Navbar Dropdown-->
                        <!--ul class="rd-navbar-dropdown">
                          <li><a href="layout-2.html">Layout 2</a>
                          </li>
                          <li><a href="layout-3.html">Layout 3</a>
                          </li>
                        </ul-->
                      </li>
                       <li {{ Request::is('about') ? 'class=active' : null }}><a href="/about">About Us</a>
                        <!-- RD Navbar Dropdown-->
                        <!--ul class="rd-navbar-dropdown">
                          <li><a href="about-us.html">About Us</a>
                          </li>
                          <li><a href="team-mp.html">Team MP</a>
                          </li>
                          <li><a href="team.html">Team</a>
                          </li>
                          <li><a href="careers.html">Careers</a>
                          </li>
                          <li><a href="testimonials.html">Testimonials</a>
                          </li>
                        </ul-->
                      </li>   
                      <li {{ Request::is('services') ? 'class=active' : null }}><a href="/services">Our Services</a>
                        <!-- RD Navbar Dropdown-->
                        <!--ul class="rd-navbar-dropdown">
                          <li><a href="services.html">Services</a>
                          </li>
                          <li><a href="single-service.html">Single Service</a>
                          </li>
                        </ul-->
                      </li>
                      <li {{ Request::is('rates') ? 'class=active' : null }}><a href="/rates">Cost Guide</a></li>                                   
                      <li {{ Request::is('faqs') ? 'class=active' : null }}><a href="/faqs">FAQ's</a>
                      </li>                      
                      <li {{ Request::is('blogs') ? 'class=active' : null }}><a href="/blogs">Our Blog</a>
                        <!-- RD Navbar Dropdown-->
                        <!--ul class="rd-navbar-dropdown">
                          <li><a href="classic-blog.html">Classic Blog</a>
                          </li>
                          <li><a href="grid-blog.html">Grid Blog</a>
                          </li>
                          <li><a href="masonry-blog.html">Masonry Blog</a>
                          </li>
                          <li><a href="modern-blog.html">Modern Blog</a>
                          </li>
                          <li><a href="blog-post.html">Blog Post</a>
                          </li>
                        </ul-->
                      </li>
                      <!--li><a href="#">Pages</a>
                        <!-- RD Navbar Megamenu->
                        <ul class="rd-navbar-megamenu">
                          <li>
                            <ul class="rd-megamenu-list">
                              <li><a href="tabs-and-accordions.html">Tabs and Accordions</a></li>
                              <li><a href="forms.html">Forms</a></li>
                              <li><a href="grid-system.html">Grid System</a></li>
                              <li><a href="buttons.html">Buttons</a></li>
                              <li><a href="progress-bars.html">Progress Bars</a></li>
                              <li><a href="tables.html">Tables</a></li>
                              <li><a href="typography.html">Typography</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul class="rd-megamenu-list">
                              <li><a href="404-page.html">404 Page</a></li>
                              <li><a href="503-page.html">503 Page</a></li>
                              <li><a href="coming-soon.html">Coming Soon</a></li>
                              <li><a href="under-construction.html">Under Construction</a></li>
                              <li><a href="privacy-policy.html">Privacy Policy</a></li>
                              <li><a href="sitemap.html">Sitemap</a></li>
                              <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul class="rd-megamenu-list">
                              <li><a href="grid-gallery.html">Grid Gallery</a></li>
                              <li><a href="masonry-gallery.html">Masonry Gallery</a></li>
                              <li><a href="grid-without-padding-gallery.html">Grid without Padding Gallery</a></li>
                              <li><a href="cobbles-gallery.html">Cobbles Gallery</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li-->
                                                 
                      <li {{ Request::is('register') ? 'class=active' : null }}><a href="/register">Get Registered</a>
                      </li>
                       <li><a href="#">Login</a>
                      </li>
                      <li {{ Request::is('contact') ? 'class=active' : null }}><a href="/contact">Contact Us</a>
                      </li>
                    </ul>
                    <div class="rd-navbar-nav-wrap-inner">
                      <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                        <div class="unit__left"><span class="icon icon-sm icon-circle icon-secondary mdi mdi-phone"></span></div>
                        <div class="unit__body">
                          <ul>
                            <li><a class="text-gray-darker" href="callto:#">{{config('data.meta.contact_number')}}</a></li>
                            <!--li><a class="text-gray-darker" href="callto:#">1-800-8763-098</a></li-->
                          </ul>
                        </div>
                      </div>
                      <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                        <div class="unit__left"><span class="icon icon-sm icon-circle icon-secondary mdi mdi-email-outline"></span></div>
                        <div class="unit__body">
                          <ul class="text-gray-darker">
                            <li><a href="mailto:#">{{config('data.meta.contact_email')}}</a></li>
                            <!--li>Sat–Sun: 9:00am–3:00pm</li-->
                          </ul>
                        </div>
                      </div>
                      <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                        <div class="unit__left"><span class="icon icon-sm icon-circle icon-secondary mdi mdi-map-marker"></span></div>
                        <div class="unit__body"><a class="text-gray-darker" href="#">{{config('data.meta.siteloc')}}</a></div>
                      </div>
                    </div>
                  </div>
                  <!--RD Navbar Search-->
                  <!--div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" placeholder="Search...">
                        <div class="rd-search-results-live"></div>
                      </div>
                    </form>
                  </div-->
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>