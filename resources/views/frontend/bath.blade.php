@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
<style>
    .price-none{
        text-decoration: none !important;
    }
</style>
    <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">Экраны под ванну</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">@lang('public.home')</a></li>
                    <li class="active">Экраны под ванну</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section Shop-->
    <section class="section section-md bg-primary-2 text-md-left">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-12 col-xl-12">
                    {{-- <div class="product-top-panel group-md">
              <p class="product-top-panel-title">Showing 1–9 of 28 results</p>
              <div>
                <div class="group-sm group-middle">
                  <div class="product-top-panel-sorting">
                    <select>
                      <option value="1">Sort by newness</option>
                      <option value="2">Sort by popularity</option>
                      <option value="3">Sort by alphabet</option>
                    </select>
                  </div>
                  <div class="product-view-toggle"><a class="mdi mdi-apps product-view-link product-view-grid active"
                      href="grid-shop.html"></a><a
                      class="mdi mdi-format-list-bulleted product-view-link product-view-list"
                      href="shop-list.html"></a></div>
                </div>
              </div>
            </div> --}}
                    <div class="row row-30 row-lg-50">

                   

                        @foreach ($baths as $bath)
                            <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                <!-- Product-->
                                <article class="product wow fadeInRight">
                                    <div class="product-body">
                                        <div class="product-figure">
                                            <img src="{{ asset('storage/' . $bath->image) }}" alt="{{ $bath->title }}"
                                                width="200">
                                        </div>
                                        <h5 class="product-title"><a
                                                href="{{ route('bath.single', $bath->id) }}">{{ app()->getLocale() === 'ru' ? $bath->titleRu : $bath->titleEn }}</a>
                                        </h5>
                                        <div class="product-price-wrap">
                                            <div class="product-price product-price-old price-none">
                                                {!! app()->getLocale() === 'ru' ? $bath->descriptionRu : $bath->descriptionEn !!}
                                            </div>

                                        </div>
                                    </div>

                                    <div class="product-button-wrap">
                                        <div class="product-button"><a
                                                class="button button-gray-14 button-zakaria fl-bigmug-line-search74"
                                                href="{{ route('bath.single', $bath->id) }}"></a></div>
                                    
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrap">
                        <!-- Bootstrap Pagination-->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item page-item-control disabled"><a class="page-link" href="#"
                                        aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                                <li class="page-item active"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item page-item-control"><a class="page-link" href="#"
                                        aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our brand-->
    <section class="section section-md bg-default brannddlogo">
        <div class="container">
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="4" data-lg-items="5" data-margin="30"
                data-dots="true" data-autoplay="true">
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
