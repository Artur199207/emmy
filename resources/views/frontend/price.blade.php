@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
    <style>
        .box-ochered {
            gap: 149px;
        }
    </style>

    <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">@lang('public.pricelist')</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">@lang('public.home')</a></li>
                    <li class="active">@lang('public.pricelist')</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-md bg-default">
        <div class="container">
            <div class="row row-30 box-ochered">
                @foreach ($shipings as $shiping)
                    <div class="col-sm-6 col-lg-3">
                        <article class="box-icon-modern">
                            <div class="box-icon-modern-header">
                                <div class="box-icon-modern-count box-ochered-item"></div>
                                <div class="unit-left">
                                    <div class="">
                                        <img src="{{ asset('storage/' . $shiping->image) }}" alt=""
                                            class="imageName">
                                    </div>
                                </div>
                            </div>
                            <h4 class="box-icon-modern-title"><a href="#">
                                    {{ app()->getLocale() === 'ru' ? $shiping->titleRu : $shiping->titleEn }}</a></a></h4>
                            <p class="box-icon-modern-text">
                                {{ app()->getLocale() === 'ru' ? $shiping->descriptionRu : $shiping->descriptionEn }}</p>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Subscribe to Our Newsletter-->
    <section class="parallax-container call_section">
        <div class="material-parallax parallax"><img src="images/_blank.png" alt=""
                style="transform: translate3d(-50%, 1px, 0px);"></div>
        <div class="parallax-content section-md context-dark text-lg-left">
            <div class="container">
                <div class="row row-30 justify-content-center align-items-center align-items-lg-end">
                    <div class="col-xl-5">
                        <h2 class="parallax-title text-center text-xl-left wow fadeInLeft" data-wow-delay=".1s">Get in Touch
                        </h2>
                    </div>
                    <div class="col-xl-7 inset-lg-bottom-10">
                        <!-- RD Mailform-->
                        <form class="ch-form ch-mailform ch-form-inline ch-form-inline-3 form-lg"
                            data-form-output="form-output-global" data-form-type="subscribe" method="post" action="#"
                            novalidate="novalidate">
                            <div class="form-wrap wow fadeInUp">
                                <input class="form-input form-control-has-validation" id="login-name" type="text"><span
                                    class="form-validation"></span>
                                <label class="form-label ch-input-label" for="login-name">Your name</label>
                            </div>
                            <div class="form-wrap wow fadeInUp">
                                <input class="form-input form-control-has-validation" id="contact-email" type="email" "><span class="form-validation"></span>
                                        <label class="form-label ch-input-label" for="contact-email">Your e-mail address</label>
                                      </div>
                                      <div class="form-button wow fadeInRight text-center">
                                        <button class="button button-zakaria button-sm button-primary" type="submit">send request</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                              <!-- Pricing List-->
                               <section class="section section-md bg-default">
            <div class="container">
                <h2 class="text-transform-capitalize wow fadeScale"></h2>
                <div class="isotope-wrap">
                    <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/экраны.jpg') }}"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('bath') }}">Экраны под
                                                ванну</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$8.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="" data-lightgallery="item">
                                                    <img src=""" alt="" width="270" height="250" />
                                                </a>
                                            </div> --}}
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh"
                                        src="{{ asset('assets/img/пенал — копия.jpeg') }}" alt=""
                                        width="270" height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('pencil') }}">пеналы </a>
                                        </h5>
                                        {{-- <div class="thumbnail-classic-price">$12.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-2.jpg"
                                                    data-lightgallery="item"><img src="" alt=""
                                                        width="270" height="530" /></a></div> --}}
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh"
                                        src="{{ asset('assets/img/навесной шкаф.jpg') }}" alt=""
                                        width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('locker') }}">Навесные
                                                шкафы</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$10.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-3.jpg"
                                                    data-lightgallery="item"><img src="" alt=""
                                                        width="270" height="250" /></a></div> --}}
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/тумба с рак (2).jpg') }}"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('skins') }}">
                                                Тумбы с раковинами</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$13.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-4.jpg"
                                                    data-lightgallery="item"><img src="" alt=""
                                                        width="270" height="250" /></a></div> --}}
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/зеркало.jpg') }}"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('mirror') }}">Зеркала</a>
                                        </h5>
                                        {{-- <div class="thumbnail-classic-price">$14.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-5.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-5.jpg"
                                                        alt="" width="270" height="250" /></a></div> --}}
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-6 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/унитазы.png') }}"
                                        alt="" width="570" height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">унитазы</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$16.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-6.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-6.jpg"
                                                        alt="" width="570" height="530" /></a></div> --}}
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/зеркальные шкафы.jpg') }}"
                                        alt="" width="570" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">зеркальные
                                                шкафы</a>
                                        </h5>
                                        {{-- <div class="thumbnail-classic-price">$10.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-7.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-7.jpg"
                                                        alt="" width="570" height="250" /></a></div> --}}
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                              <!-- Accochions-->
                              <section class="section section-sm section-last bg-default">
                                <div class="container">
                                  <!-- Bootstrap collapse-->
                                  <div class="cach-group-custom cach-group-corporate" id="accochion1" role="tablist" aria-multiselectable="false">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <!-- Bootstrap cach-->
                                        <article class="cach cach-custom cach-corporate">
                                          <div class="cach-header" role="tab">
                                            <div class="cach-title"><a id="accochion1-cach-head-xcugotim" data-toggle="collapse" data-parent="#accochion1"
                                              href="#accochion1-cach-body-uqrgwdpa" aria-controls="accochion1-cach-body-uqrgwdpa" aria-expanded="true" role="button">Lorem Ipsum is simply dummy text of the printing
                                                <div class="cach-arrow">
                                                  <div class="icon"></div>
                                                </div></a></div>
                                          </div>
                                          <div class="collapse show" id="accochion1-cach-body-uqrgwdpa" aria-labelledby="accochion1-cach-head-xcugotim" data-parent="#accochion1" role="tabpanel">
                                            <div class="cach-body">
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book.</p>
                                            </div>
                                          </div>
                                        </article>
                                        <!-- Bootstrap cach-->
                                        {{-- <article class="cach cach-custom cach-corporate">
                                  <div class="cach-header" role="tab">
                                    <div class="cach-title"><a class="collapsed" id="accochion1-cach-head-yyxnyrxp" data-toggle="collapse" data-parent="#accochion1"
                                      href="#accochion1-cach-body-dgwigbwd" aria-controls="accochion1-cach-body-dgwigbwd" aria-expanded="false" role="button">Lorem Ipsum is simply dummy text
                                        <div class="cach-arrow">
                                          <div class="icon"></div>
                                        </div></a></div>
                                  </div>
                                  <div class="collapse" id="accochion1-cach-body-dgwigbwd" aria-labelledby="accochion1-cach-head-yyxnyrxp" data-parent="#accochion1" role="tabpanel">
                                    <div class="cach-body">
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book.
                </p>
                                    </div>
                                  </div>
                                </article>
                                <!-- Bootstrap cach-->
                                <article class="cach cach-custom cach-corporate cach-corporate-2">
                                  <div class="cach-header" role="tab">
                                    <div class="cach-title"><a class="collapsed" id="accochion1-cach-head-bnjhaqjv" data-toggle="collapse" data-parent="#accochion1" href="#accochion1-cach-body-uibkpryu" aria-controls="accochion1-cach-body-uibkpryu" aria-expanded="false" role="button">Lorem Ipsum is simply dummy text of the printing
                                        <div class="cach-arrow">
                                          <div class="icon"></div>
                                        </div></a></div>
                                  </div>
                                  <div class="collapse" id="accochion1-cach-body-uibkpryu" aria-labelledby="accochion1-cach-head-bnjhaqjv" data-parent="#accochion1" role="tabpanel">
                                    <div class="cach-body">
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book.</p>
                                    </div>
                                  </div>
                                </article> --}}
                                      </div>
                                      {{-- <div class="col-lg-6">
                                <!-- Bootstrap cach-->
                                <article class="cach cach-custom cach-corporate">
                                  <div class="cach-header" role="tab">
                                    <div class="cach-title"><a class="collapsed" id="accochion1-cach-head-qeglldky" data-toggle="collapse" data-parent="#accochion1" href="#accochion1-cach-body-atxychrr" aria-controls="accochion1-cach-body-atxychrr" aria-expanded="false" role="button">Lorem Ipsum is simply dummy text
                                        <div class="cach-arrow">
                                          <div class="icon"></div>
                                        </div></a></div>
                                  </div>
                                  <div class="collapse" id="accochion1-cach-body-atxychrr" aria-labelledby="accochion1-cach-head-qeglldky" data-parent="#accochion1" role="tabpanel">
                                    <div class="cach-body">
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                  </div>
                                </article>
                                <!-- Bootstrap cach-->
                                <article class="cach cach-custom cach-corporate">
                                  <div class="cach-header" role="tab">
                                    <div class="cach-title"><a class="collapsed" id="accochion1-cach-head-lenbooev" data-toggle="collapse" data-parent="#accochion1" href="#accochion1-cach-body-rxrxhbbg" aria-controls="accochion1-cach-body-rxrxhbbg" aria-expanded="false" role="button">Lorem Ipsum is simply dummy text of the printing
                                        <div class="cach-arrow">
                                          <div class="icon"></div>
                                        </div></a></div>
                                  </div>
                                  <div class="collapse" id="accochion1-cach-body-rxrxhbbg" aria-labelledby="accochion1-cach-head-lenbooev" data-parent="#accochion1" role="tabpanel">
                                    <div class="cach-body">
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, when an unknown printer took a galley book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since the 1500s, Is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                  </div>
                                </article>
                                <!-- Bootstrap cach-->
                                <article class="cach cach-custom cach-corporate">
                                  <div class="cach-header" role="tab">
                                    <div class="cach-title"><a class="collapsed" id="accochion1-cach-head-uqggnmis" data-toggle="collapse" data-parent="#accochion1" href="#accochion1-cach-body-itjpddkf" aria-controls="accochion1-cach-body-itjpddkf" aria-expanded="false" role="button">Lorem Ipsum is simply dummy text
                                        <div class="cach-arrow">
                                          <div class="icon"></div>
                                        </div></a></div>
                                  </div>
                                  <div class="collapse" id="accochion1-cach-body-itjpddkf" aria-labelledby="accochion1-cach-head-uqggnmis" data-parent="#accochion1" role="tabpanel">
                                    <div class="cach-body">
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    </div>
                                  </div>
                                </article>
                              </div> --}}
                                    </div>
                                  </div>
                                </div>
                              </section>
                          
                            
                          <!-- Our brand-->
                          <section class="section section-md bg-default brannddlogo">
                            <div class="container">
                              <!-- Owl Carousel-->
                              <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="4" data-lg-items="5" data-margin="30" data-dots="true" data-autoplay="true">
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                                <article class=" box-md"> <a class="" href="#">
                                  <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                    <figcaption>
                                      <h5>Emmy</h5>
                                    </figcaption>
                                  </figure>
                                  </a> </article>
                              </div>
                            </div>
                 </section>
@endsection
