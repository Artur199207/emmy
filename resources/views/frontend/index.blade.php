@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

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
    </main>
@endsection
