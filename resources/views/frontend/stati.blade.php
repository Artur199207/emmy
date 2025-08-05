@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')


<section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h1 class="breadcrumbs-custom-title">Статьи</h1>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">@lang('public.home')</a></li>\
              <li class="active">Статьи</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Button Sizes-->
      <section class="section section-md bg-primary-2">
            <div class="container">
                <h2 class="text-transform-capitalize wow fadeScale">Статьи</h2>
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30"
                    data-dots="true" data-mouse-drag="false">
                    @foreach ($blog as $blogs)
                        <article class="post post-classic box-md wow slideInDown"><a class="post-classic-figure"
                                href="{{ route('blog.show', $blogs->id) }}"><img
                                    src="{{ asset('storage/' . $blogs->image) }}" alt="" /></a>
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
@endsection