@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
    <style>
        .imageName {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>

    <main>
        <section class="section swiper-container swiper-slider swiper-slider-4" data-loop="true" data-effect="fade">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide swiper-slide-1" data-slide-bg="{{ asset('storage/' . $banner->image) }}">
                        <div class="swiper-slide-caption section-md text-sm-left">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-8 col-md-7">
                                        <h1 class="swiper-title-1" data-caption-animate="fadeInLeft"
                                            data-caption-delay="100">
                                            {{ app()->getLocale() === 'ru' ? $banner->titleRu : $banner->titleEn }}
                                        </h1>
                                        <h6 class="swiper-title-2 text-width-medium" data-caption-animate="fadeInLeft"
                                            data-caption-delay="250">
                                            {{ app()->getLocale() === 'ru' ? $banner->descriptionRu : $banner->descriptionEn }}
                                        </h6>
                                        <div class="button-wrap" data-caption-animate="fadeInLeft" data-caption-delay="400">
                                            <a class="button button-sm button-primary button-zakaria"
                                                href="grid-shop.html">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </section>
        <section class="section section-md text-md-left quote-about">
            <div class="container">
                <div class="row row-30">
                    @foreach ($shipings as $shiping)
                        <div class="col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
                            <article class="box-icon-creative">
                                <div
                                    class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center">
                                    <div class="unit-left">
                                        <div class="">
                                            <img src="{{ asset('storage/' . $shiping->image) }}" alt=""
                                                class="imageName">
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        <h4 class="box-icon-creative-title"><a href="#">
                                                {{ app()->getLocale() === 'ru' ? $shiping->titleRu : $shiping->titleEn }}</a>
                                        </h4>
                                        <p class="box-icon-creative-text">
                                            {{ app()->getLocale() === 'ru' ? $shiping->descriptionRu : $shiping->descriptionEn }}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="section section-md bg-default text-md-left">
            <div class="container">
                <div class="row row-70 row-lg-50 justify-content-center align-items-md-center">
                    @foreach ($offers as $offer)
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="aboutUs">
                                <p>{!! app()->getLocale() === 'ru' ? $offer->descriptionRu : $offer->descriptionEn !!}</p>
                                <a class="button button-sm button-primary button-zakaria" href="grid-shop.html">shop now</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="decorative-box text-center">
                            <img src="{{ asset('storage/' . $offer->image) }}" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="section section-md bg-primary-2">
            <div class="container">
                <h2 class="text-transform-capitalize wow fadeScale">Our Products</h2>
                <div class="row row-lg row-30 row-lg-30">
                    @foreach ($products->take(8) as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <!-- Product-->
                            <article class="product wow fadeInRight">
                                <div class="product-body">
                                    <div class="product-figure">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="" width="148"
                                            height="128" />
                                    </div>
                                    <h5 class="product-title"><a href="">
                                            <p>{!! app()->getLocale() === 'ru' ? $offer->titleRu : $offer->titleEn !!}</p>
                                        </a></h5>
                                    <div class="product-price-wrap">
                                        <div class="product-price product-price-old">${{ $product->price }}</div>
                                        <div class="product-price">$17.00</div>
                                    </div>
                                </div>
                                <span class="product-badge product-badge-sale">Sale</span>
                                <div class="product-button-wrap">
                                    <div class="product-button">
                                        <a class="button button-gray-14 button-zakaria fl-bigmug-line-search74"
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
        <section class="section bg-brown-1 call_section_1">
            <div class="parallax-content section-md context-dark">
                <div class="container">
                    <h3 class="text-spacing-100">Летняя распродажа </h3>
                    <h6 class="font-weight-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem
                        Ipsum has been the dummy text ever since</h6>
                    <a class="button button-sm button-shadow-2 button-primary button-zakaria" href="#">Shop Now</a>
                </div>
            </div>
        </section>
        <section class="section section-md bg-default">
            <div class="container">
                <h2 class="text-transform-capitalize wow fadeScale">Gallery</h2>
                <div class="isotope-wrap">
                    <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-1.jpg"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">macarons</a></h5>
                                        <div class="thumbnail-classic-price">$8.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-1.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-1.jpg"
                                                        alt="" width="270" height="250" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-2.jpg"
                                        alt="" width="270" height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Biscuits</a>
                                        </h5>
                                        <div class="thumbnail-classic-price">$12.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-2.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-2.jpg"
                                                        alt="" width="270" height="530" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-3.jpg"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a
                                                href="single-product.html">CupFurnitures</a></h5>
                                        <div class="thumbnail-classic-price">$10.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-3.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-3.jpg"
                                                        alt="" width="270" height="250" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-4.jpg"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Birthday
                                                Furnitures</a></h5>
                                        <div class="thumbnail-classic-price">$13.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-4.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-4.jpg"
                                                        alt="" width="270" height="250" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-5.jpg"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Custom
                                                Furnitures</a></h5>
                                        <div class="thumbnail-classic-price">$14.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-5.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-5.jpg"
                                                        alt="" width="270" height="250" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-6 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-6.jpg"
                                        alt="" width="570" height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Wedding
                                                Furnitures</a></h5>
                                        <div class="thumbnail-classic-price">$16.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-6.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-6.jpg"
                                                        alt="" width="570" height="530" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-7.jpg"
                                        alt="" width="570" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Pies</a></h5>
                                        <div class="thumbnail-classic-price">$10.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-7.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-7.jpg"
                                                        alt="" width="570" height="250" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-md bg-primary-2">
            <div class="container">
                <h2 class="text-transform-capitalize wow fadeScale">Our Blog</h2>
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30"
                    data-dots="true" data-mouse-drag="false">
                    @foreach ($blog->take(3) as $blogs)
                        <article class="post post-classic box-md wow slideInDown"><a class="post-classic-figure"
                                href="{{ route('blog.show', $blogs->id) }}"><img src="{{ asset('storage/' . $blogs->image) }}"
                                    alt="" /></a>
                            <div class="post-classic-content">
                                <div class="post-classic-time">
                                    <time
                                        datetime="2019-08-09">{{ app()->getLocale() === 'ru' ? $blogs->dataRu : $blogs->dataEn }}</time>
                                </div>
                                <h4 class="post-classic-title"><a
                                        href="{{ route('blog.show', $blogs->id) }}">{{ app()->getLocale() === 'ru' ? $blogs->titleRu : $blogs->titleEn }}</a>
                                </h4>
                                <p class="post-classic-text">
                                    {{ app()->getLocale() === 'ru' ? $blogs->descriptionRu : $blogs->descriptionEn }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section section-md bg-default brannddlogo">
            <div class="container">
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="4" data-lg-items="5"
                    data-margin="30" data-dots="true" data-autoplay="true">
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

    </main>
@endsection
