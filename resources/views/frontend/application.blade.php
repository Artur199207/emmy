@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

<section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h1 class="breadcrumbs-custom-title">What We Offer</h1>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">What We Offer</li>
            </ul>
          </div>
        </div>
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


@endsection