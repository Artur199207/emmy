<footer class="section footer-modern footer-modern-2">
    <div class="footer-modern-body section-md">
      <div class="container">
        <div class="row row-40 row-md-50 justify-content-xl-between">
          <div class="col-md-10 col-lg-3 col-xl-4 wow fadeInRight">
            <div class="inset-xl-right-70 block-1">
              <div class="footer-classic-brand">
                <!--Brand-->
                <a href="index.html"><img class="logo-default" src="{{asset('assets/images/logo-emmy.png')}}" alt=""></a> </div>
              <p class="footer-classic-text">
                @lang('public.titlefooter')
             </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-7 col-lg-5 wow fadeInRight" data-wow-delay=".1s">
            <h5 class="footer-modern-title">@lang('public.navigation')</h5>
            <ul class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block">
              <li><a href="about-us.html">@lang('public.home')</a></li>
              <li><a href="our-team.html">@lang('public.navigation')</a></li>
              <li><a href="contact-us.html">@lang('public.katalog')</a></li>
              <li><a href="grid-shop.html">@lang('public.Articles')</a></li>
              <li><a href="#">@lang('public.Gallery')</a></li>

              <li><a href="#">@lang('public.bathscreen')</a></li>
              <li><a href="#">@lang('public.panels')</a></li>
              <li><a href="#">@lang('public.wallcabinets')</a></li>
              <!-- <li><a href="#">Biscuits</a></li> -->
            </ul>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
            <h5 class="footer-modern-title">@lang('public.Contactus')</h5>
            <ul class="contacts-creative">
              <li>
                <div class="unit unit-spacing-sm flex-column flex-md-row">
                  <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                  <div class="unit-body"><a href="#">@lang('public.Moscow')</a></div>
                </div>
              </li>
              <li>
                <div class="unit unit-spacing-sm flex-column flex-md-row">
                  <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                  <div class="unit-body"><a href="tel:#">+7 926 820-65-74</a></div>
                </div>
              </li>
              <li>
                <div class="unit unit-spacing-sm flex-column flex-md-row">
                  <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                  <div class="unit-body"><a href="#">mebelemmy@mail.ru</a></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-modern-panel text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
              <p>@lang('public.development')  <a href="https://netframe.am/" target="_blank">NetFrame</a>.@lang('public.reserved')<a href="privacy-policy.html">@lang('public.privacypolicy')</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-payment-icon">
               <a href="#">
                <img src="{{asset('assets/images/Mir.png')}}" alt="">
                <img src="{{asset('assets/images/sbp.png')}}" alt="">
                <img src="{{asset('assets/images/MasterCard.png')}}" alt="">
                <img src="{{asset('assets/images/Visa.png')}}" alt="">
              </a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
