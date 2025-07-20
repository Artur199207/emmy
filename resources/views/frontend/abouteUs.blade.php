@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container breadcrumbs_section">
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h1 class="breadcrumbs-custom-title">@lang('public.company')</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="{{url('/')}}">@lang('public.home')</a></li>
         
          <li class="active">@lang('public.company')</li>
        </ul>
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
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="decorative-box text-center">
                            <img src="{{ asset('storage/' . $offer->image) }}" alt="" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


