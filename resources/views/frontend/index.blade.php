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
    </main>
@endsection
