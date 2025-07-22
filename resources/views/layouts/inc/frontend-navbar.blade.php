<style>
    .btn-secondary {
        --bs-btn-bg: unset !important;
    }
    .btn:hover {
        background-color: unset !important;
        border: none !important
    }
    .header-top-dropdown .single-dropdown a:hover {
    color: inherit !important;
    transform: translateY(0) !important;

     }




</style>

<header class="section page-header">

    <div class="header-top">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-10">
            <div class="topbar-left text-left">
              <p>@lang('public.title')</p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-6">
            <div class="header-top-dropdown d-flex justify-content-center justify-content-lg-end">
              <div class="single-dropdown">
                <div class="dropdown show">
                  <span class="d-none d-sm-inline-block">@lang('public.languagesChange'):</span>
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span id="selected-language">English</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('locale/ru') }}">Русский</a>
                    <a class="dropdown-item" href="{{ url('locale/en') }}" >English</a>
                  </div>
                </div>
              </div>

              <span class="separator pl-15 pr-15"></span>

              <div class="single-dropdown">
                <div class="dropdown show">
                  <span class="d-none d-sm-inline-block">@lang('public.Currency')</span>
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="currencyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span id="selected-currency">USD $</span>
                  </a>
                  <!-- Կարող ես բացել այս span-ը, եթե պետք է ուրիշ տեղ էլ ցուցադրվի -->
                  <span class="usd_change" id="price-currency" style="display: none;">USD $</span>
                  <div class="dropdown-menu" aria-labelledby="currencyDropdown">
                    <a class="dropdown-item" href="#" data-currency="RUB ₽" data-rate="95">RUB ₽</a>
                    <a class="dropdown-item" href="#" data-currency="USD $" data-rate="1">USD $</a>

                  </div>
                </div>
              </div>

              <div class="single-dropdown">
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="{{ route('loginReg') }}" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"> @lang('public.LoginRegistration') </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    <a class="dropdown-item" href="{{ route('loginReg') }}">@lang('public.Login')</a>
                   <a class="dropdown-item" href="{{ route('loginReg') }}">@lang('public.Registration')</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ch-navbar-wrap">
      <nav class="ch-navbar ch-navbar-classic"
      data-layout="ch-navbar-fixed"
      data-sm-layout="ch-navbar-fixed"
      data-md-layout="ch-navbar-fixed"
      data-md-device-layout="ch-navbar-fixed"
      data-lg-layout="ch-navbar-static"
      data-lg-device-layout="ch-navbar-fixed"
      data-xl-layout="ch-navbar-static"
      data-xl-device-layout="ch-navbar-static"
      data-xl-layout="ch-navbar-static"
      data-xl-device-layout="ch-navbar-static"
      data-lg-stick-up-offset="100px"
      data-xl-stick-up-offset="100px"
      data-xl-stick-up-offset="100px"
      data-lg-stick-up="true"
      data-xl-stick-up="true"
      data-xl-stick-up="true">
        <div class="ch-navbar-main-outer">
          <div class="ch-navbar-main">
            <!-- RD Navbar Panel-->
            <div class="ch-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="ch-navbar-toggle" data-ch-navbar-toggle=".ch-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="ch-navbar-brand">
                <!--Brand--><a href="{{url('/')}}"><img class="logo-default" src="{{asset('assets/project/image/logo-emmy.png')}}" alt="" /></a> </div>
            </div>
            <div class="ch-navbar-nav-wrap">
              <ul class="ch-navbar-nav">
                <li class="ch-nav-item active"><a class="ch-nav-link" href="{{url('/')}}">@lang('public.home')</a> </li>
                <li class="ch-nav-item"><a class="ch-nav-link" href="#">@lang('public.navigation')</a>
                  <ul class="ch-menu ch-navbar-dropdown">
                    <li class="ch-dropdown-item active"><a class="ch-dropdown-link" href="{{ route('abouteUs') }}">@lang('public.company')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('page-offers') }}">@lang('public.applications')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('ourTeam') }}">@lang('public.team')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('contactis') }}">@lang('public.reviews')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="{{ route('price') }}">@lang('public.pricelist')</a> </li>
                  </ul>
                </li>
                <li class="ch-nav-item"><a class="ch-nav-link" href="grid-shop.html">@lang('public.catalog')</a>
                  <ul class="ch-menu ch-navbar-dropdown">
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="ecwid-shop.html">@lang('public.bathscreen')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="grid-shop.html">@lang('public.panels')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="grid-shop-leftsidebar.html">@lang('public.wallcabinets')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="grid-shop-rightsidebar.html">@lang('public.cabinets')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="shop-list.html">@lang('public.mirrors')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="shop-list-leftsidebar.html">@lang('public.mirrorcabinets')</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="shop-list-rightsidebar.html">@lang('public.toilets')</a> </li>

                  </ul>
                </li>



                <li class="ch-nav-item"><a class="ch-nav-link" class="ch-dropdown-link" class="ch-dropdown-item" href="blog-post-lefttsidebar.html">Статьи</a>
                  <!-- <ul class="ch-menu ch-navbar-dropdown">
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="grid-blog.html">Grid Blog</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="blog-list.html">Blog List</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="blog-list-leftsidebar.html">Blog List Left Bar</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="blog-list-rightsidebar.html">Blog List Right Bar</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="blog-post.html">Blog Post</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="blog-post-lefttsidebar.html">Blog Post Left Bar</a> </li>
                    <li class="ch-dropdown-item"><a class="ch-dropdown-link" href="blog-post-rightsidebar.html">Blog Post Right Bar</a> </li>

                  </ul> -->
                </li>
                <li class="ch-nav-item"><a class="ch-nav-link" href="grid-gallery.html">@lang('public.Gallery')</a>
                 
                </li>
                <li class="ch-nav-item"><a class="ch-nav-link" href="#">@lang('public.elements')</a>
                  <ul class="ch-menu ch-navbar-megamenu">
                    <li class="ch-megamenu-item ch-megamenu-item-1">
                      <h6 class="ch-megamenu-title"><span class="ch-megamenu-icon mdi mdi-apps"></span><span class="ch-megamenu-text">@lang('public.elements')</span></h6>
                      <ul class="ch-megamenu-list">
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="typography.html">@lang('public.bathscreen')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="icon-lists.html">@lang('public.panels')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="progress-bars.html">@lang('public.wallcabinets')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="calls-to-action.html">@lang('public.cabinets')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="tabs-and-accordions.html">@lang('public.mirrors')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="buttons.html">@lang('public.mirrorcabinets')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="tables.html">@lang('public.toilets')</a></li>

                      </ul>
                    </li>
                    <li class="ch-megamenu-item ch-megamenu-item-2">
                      <h6 class="ch-megamenu-title"><span class="ch-megamenu-icon mdi mdi-layers"></span><span class="ch-megamenu-text">@lang('public.Payment')</span></h6>
                      <ul class="ch-megamenu-list">
                        {{-- <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="404-page.html">@lang('public.Page')</a></li> --}}
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="coming-soon.html">@lang('public.newitems')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="{{ route('contact') }}">@lang('public.Contactus')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="{{ route('private-police') }}">@lang('public.privacypolicy')</a></li>
                        <li class="ch-megamenu-list-item"><a class="ch-megamenu-list-link" href="search-results.html">@lang('public.Searchresults')</a></li>
                      </ul>
                    </li>
                    <li class="ch-megamenu-item ch-megamenu-banner">
                      <div class="ch-megamenu-title"><span class="ch-megamenu-icon mdi icon-side-lamp-1"></span><span class="ch-megamenu-text">@lang('public.Welcome')</span></div>
                      <a class="banner-classic" href="grid-shop.html"><img src="{{asset('assets/images/about/banner.jpg')}}" alt="" width="300" height="202"/></a> </li>
                  </ul>
                </li>

              </ul>
            </div>
            <div class="ch-navbar-main-element">
              <!-- RD Navbar Search-->
              <div class="ch-navbar-search ch-navbar-search-2">
                <button class="ch-navbar-search-toggle ch-navbar-fixed-element-3" data-ch-navbar-toggle=".ch-navbar-search"><span></span></button>
                <form class="ch-search" action="search-results.html" data-search-live="ch-search-results-live" method="GET">
                  <div class="form-wrap">
                    <input class="ch-navbar-search-form-input form-input" id="ch-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                    <label class="form-label" for="ch-navbar-search-form-input">@lang('public.Search')</label>
                    <div class="ch-search-results-live" id="ch-search-results-live"></div>
                    <button class="ch-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                  </div>
                </form>
              </div>
              <!-- RD Navbar Basket-->
              <div class="ch-navbar-basket-wrap">
                <button class="ch-navbar-basket fl-bigmug-line-shopping202" data-ch-navbar-toggle=".cart-inline"><span>2</span></button>
                <div class="cart-inline">
                  <div class="cart-inline-header">
                    <h5 class="cart-inline-title">@lang('public.Incart'):<span> 2</span> @lang('public.Products')</h5>
                    <h6 class="cart-inline-title">@lang('public.Totalprice'):<span> $30</span></h6>
                  </div>
                  <div class="cart-inline-body">
                    <div class="cart-inline-item">
                      <div class="unit unit-spacing-sm align-items-center">
                        <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="images/about/post-mini-1.jpg" alt="" width="100" height="90"/></a></div>
                        <div class="unit-body">
                          <h6 class="cart-inline-name"><a href="single-product.html">@lang('public.Unicorn')</a></h6>
                          <div>
                            <div class="group-xs group-middle">
                              <div class="table-cart-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                              </div>
                              <h6 class="cart-inline-title">$13.00</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="cart-inline-item">
                      <div class="unit unit-spacing-sm align-items-center">
                        <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="images/about/post-mini-2.jpg" alt="" width="100" height="90"/></a></div>
                        <div class="unit-body">
                          <h6 class="cart-inline-name"><a href="single-product.html">@lang('public.Strawberry')</a></h6>
                          <div>
                            <div class="group-xs group-middle">
                              <div class="table-cart-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                              </div>
                              <h6 class="cart-inline-title">$17.00</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cart-inline-footer">
                    <div class="group-sm"><a class="button button-default-outline-2 button-zakaria" href="cart-page.html">@lang('public.Gotocart')</a><a class="button button-primary button-zakaria" href="checkout.html">@lang('public.Checkou')</a></div>
                  </div>
                </div>
              </div>
              <a class="ch-navbar-basket ch-navbar-basket-mobile fl-bigmug-line-shopping202 ch-navbar-fixed-element-2" href="cart-page.html"><span>2</span></a>
              <button class="ch-navbar-project-hamburger ch-navbar-project-hamburger-open ch-navbar-fixed-element-1" type="button" data-multitoggle=".ch-navbar-main" data-multitoggle-blur=".ch-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate"><span class="project-hamburger"><span class="project-hamburger-line"></span><span class="project-hamburger-line"></span><span class="project-hamburger-line"></span><span class="project-hamburger-line"></span></span></button>
            </div>
            <div class="ch-navbar-project">
              <div class="ch-navbar-project-header">
                <button class="ch-navbar-project-hamburger ch-navbar-project-hamburger-close" type="button" data-multitoggle=".ch-navbar-main" data-multitoggle-blur=".ch-navbar-wrap" data-multitoggle-isolate><span class="project-close"><span></span><span></span></span></button>
                <h5 class="ch-navbar-project-title">@lang('public.Ourcontacts')</h5>
              </div>
              <div class="ch-navbar-project-content">
                <div>
                  <div>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-dots="true" data-autoplay="true">
                         <img src="{{asset('assets/images/about/image-1.jpg')}}" class="img-responsive" alt="" />
                         <img src="{{asset('assets/images/about/image-4.jpg')}}" class="img-responsive" alt="" />
                         <img src="{{asset('assets/images/about/image-8.jpg')}}" class="img-responsive" alt="" />
                       </div>
                    <ul class="contacts-modern">
                      <li><a href="#">@lang('public.titlefooter')
                         <br/>
                         @lang('public.Emmypartners')</a></li>
                      <li><a href="tel:#">+7 926 820-65-74</a></li>
                    </ul>
                  </div>
                  <div>
                    <ul class="list-inline list-social list-inline-xl">
                      <li><a class="icon mdi mdi-vk" href="#"></a></li>
                      <li><a class="icon mdi mdi-telegram" href="#"></a></li>
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
