@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
    <style>
        .price-none {
            text-decoration: none !important;
        }
         article{
            height: 500px;
        }
        .product-figure{
            height: 250px !important;
        }
        .product-figure img{
            height:  100% !important;
            object-fit: contain !important;
        }
    </style>
    <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">Тумбы с раковинами</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">@lang('public.home')</a></li>
                    <li class="active">Тумбы с раковинами</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section Shop-->
    <section class="section section-md bg-primary-2 text-md-left">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-12 col-xl-12">

                    <div class="row row-30 row-lg-50">



                        @foreach ($skins as $pencil)
                            <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                <article class="product wow fadeInRight">
                                    <div class="product-body">
                                        <div class="product-figure">
                                            <img src="{{ asset('storage/' . $pencil->image) }}" alt="{{ $pencil->titleRu }}"
                                                width="200">
                                        </div>
                                        <h5 class="product-title">
                                            <a href="{{ route('bath.single', $pencil->id) }}">
                                                {{ app()->getLocale() === 'ru' ? $pencil->titleRu : $pencil->titleEn }}
                                            </a>
                                        </h5>
                                        <div class="product-price-wrap">
                                            <div class="product-price product-price-old price-none">
                                               Emmy
                                            </div>
                                        </div>
                                        <div class="bigvmn" style="padding-top:30px;padding-bottom:30px;">
                                            @if ($pencil->available)
                                                <div class="availability" style="color: green; font-weight: bold;">В
                                                    наличии: Есть</div>
                                            @else
                                                <div class="availability" style="color: red; font-weight: bold;">В наличии:
                                                    Нет</div>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="product-button-wrap">
                                        <div class="product-button">
                                            <a class="button button-gray-14 button-zakaria fl-bigmug-line-search74"
                                                href="{{ route('skins.single', $pencil->id) }}"></a>
                                        </div>
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
