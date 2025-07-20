@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">@lang('public.team')</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">@lang('public.team')</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Team Classic-->
    <section class="section section-sm section-first bg-default">
        <div class="container">
            {{-- <h3 class="font-weight-regular">#1</h3> --}}
            @foreach ($team as $teams)
                <div class="row row-lg row-30 justify-content-center">
                    <div class="col-sm-6 col-md-4">
                        <article class="team-classic box-md"><a class="team-classic-figure" href="#">
                                <img src="{{ asset('storage/' . $teams->image) }}" alt="{{ $teams->titleRu }}"
                                    width="200">
                            </a>
                            <h4 class="team-classic-name"><a href="#">
                                    {{ app()->getLocale() === 'ru' ? $teams->titleRu : $teams->titleEn }}</a></h4>
                            <p class="team-classic-text">
                                {!! app()->getLocale() === 'ru' ? $teams->descriptionRu : $teams->descriptionEn !!}
                            </p>

                        </article>
                    </div>
                </div>
                @endforeach
        </div>
    </section>

@endsection
