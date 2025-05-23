@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
    <style>
        .form-select {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .select-optionOne>span {
            display: flex;
            justify-content: center;
            align-content: center;
            margin-left: 25px;
            padding: 5px;
            border: solid 1px;
            border-radius: 8px;
        }
    </style>

    <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">@lang('public.product-singl')</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">@lang('public.home')</a></li>
                    <li><a href="grid-shop.html">@lang('public.shop')</a></li>
                    <li class="active">@lang('public.product-singl')</li>
                </ul>
            </div>
        </div>
    </section>



    <!-- Single Product-->
    <section class="section section-md section-first bg-default">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">
                    <div class="slick-vertical slick-product">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true"
                            data-child="#child-carousel" data-for="#child-carousel">
                            @foreach (json_decode($product->images, true) as $image)
                                <div class="item">
                                    <div class="slick-product-figure">
                                        <img src="{{ asset('storage/' . $image) }}" alt="" width="530"
                                            height="480" />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true"
                            data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3"
                            data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                            @foreach (json_decode($product->images, true) as $image)
                                <div class="item">
                                    <div class="slick-product-figure">
                                        <img src="{{ asset('storage/' . $image) }}" alt="" width="530"
                                            height="480" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="single-product">
                        <h3 class="text-transform-none font-weight-medium">{!! app()->getLocale() === 'ru' ? $product->spaceNameRu : $product->spaceNameEn !!}</h3>
                        <div class="group-md group-middle">
                            <div class="single-product-price">{{ $product->price }}</div>
                            {{-- <div class="single-product-rating">
                                <span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span
                                    class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span
                                    class="icon mdi mdi-star-half"></span>
                            </div> --}}
                        </div>
                        <p>{!! app()->getLocale() === 'ru' ? $product->descriptionRu : $product->descriptionEn !!}</p>
                        <hr class="hr-gray-100">
                        <ul class="list list-description">
                            <li><span>@lang('public.Categories')</span><span>{{ app()->getLocale() === 'ru' ? $product->categoryRu : $product->categoryEn }}</span>
                            </li>
                            <li><span>@lang('public.Weight')</span><span>{{ app()->getLocale() === 'ru' ? $product->weigthRu : $product->weigthEn }}</span>
                            </li>
                            <li>
                                <span>@lang('public.Box')</span>
                                <span class="select-optionOne">
                                    <select name="size" class="form-select">

                                        @foreach (json_decode($product->sizeRu, true) as $size)
                                            <option value="{{ $size }}">{{ $size }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </li>
                        </ul>
                        <div class="group-xs group-middle">
                            <div class="product-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1"
                                    max="1000">
                            </div>
                            <div><a class="button button-lg button-secondary button-zakaria"
                                    href="cart-page.html">@lang('public.cart')</a></div>
                        </div>
                        <hr class="hr-gray-100">
                        <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                            <div>
                                <ul class="list-inline list-social list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs nav-tabs-1">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                data-toggle="tab">Описание</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                data-toggle="tab">Оплата</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                data-toggle="tab">Доставка</a></li>
                    </ul>
                </div>
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        <div class="box-comment">
                            <div class="unit flex-column flex-sm-row unit-spacing-md">
                                {{-- <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                            src="images/testimonials/thumb1.jpg" alt="" width="119"
                                            height="119" /></a>
                                </div> --}}
                                <div class="unit-body">
                                    {{-- <div class="group-sm group-justify">
                                        <div>
                                            <div class="group-xs group-middle">
                                                <h5 class="box-comment-author"><a href="#">Jane Doe</a></h5>
                                                <div class="box-rating"><span class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star-half"></span></div>
                                            </div>
                                        </div>
                                        <div class="box-comment-time">
                                            <time datetime="2019-11-30">Nov 30, 2019</time>
                                        </div>
                                    </div> --}}
                                    <p class="box-comment-text">{!! app()->getLocale() === 'ru' ? $product->informationRu : $product->informationEn !!}</p>
                                </div>
                            </div>
                        </div>
                        {{-- <h4 class="text-transform-none font-weight-medium">Leave a Review</h4> --}}
                        {{-- <form class="ch-form ch-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="#">
                  <div class="row row-20 row-md-30">
                    <div class="col-lg-8">
                      <div class="row row-20 row-md-30">
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-first-name-2" type="text" name="name" data-constraints="@Required"/>
                            <label class="form-label" for="contact-first-name-2">First Name</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-last-name-2" type="text" name="name" data-constraints="@Required"/>
                            <label class="form-label" for="contact-last-name-2">Last Name</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"/>
                            <label class="form-label" for="contact-email-2">E-mail</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"/>
                            <label class="form-label" for="contact-phone-2">Phone</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">Message</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="phone" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                  </div>
                  <button class="button button-sm button-primary button-zakaria" type="submit">Submit</button>
                </form> --}}
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span>
                                </div>
                                <div class="unit-body">
                                    <p>{!! app()->getLocale() === 'ru' ? $product->payRu : $product->payEn !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                                <div class="unit-body">
                                    <p>{!! app()->getLocale() === 'ru' ? $product->DeliveryRu : $product->DeliveryEn !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products-->
    <section class="section section-md section-last bg-primary-2">
        <div class="container">
            <h4 class="font-weight-sbold">Рекомендуемые продукты</h4>
            <div class="row row-lg row-30 row-lg-50 justify-content-center">
                @foreach ($products->take(4 ) as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <!-- Product-->
                        <article class="product wow fadeInRight">
                            <div class="product-body">
                                <div class="product-figure">
                                  <img src="{{ asset('storage/' . $product->image) }}" alt="" width="148"
                                        height="128" /> 
                                      </div>
                                <h5 class="product-title"><a href=""> <p>{!! app()->getLocale() === 'ru' ? $product->titleRu : $product->titleEn !!}</p></a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price product-price-old">${{$product->price}}</div>
                                    <div class="product-price">$17.00</div>
                                </div>
                            </div>
                            <span class="product-badge product-badge-sale">Sale</span>
                            <div class="product-button-wrap">
                                <div class="product-button">
                                    <a
                                        class="button button-gray-14 button-zakaria fl-bigmug-line-search74"
                                        href="{{ route('product.show', $product->id) }}"></a>
                                    </div>
                                <div class="product-button"><a
                                        class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202"
                                        href=""></a></div>
                            </div>
                        </article>
                    </div>
                   @endforeach

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
