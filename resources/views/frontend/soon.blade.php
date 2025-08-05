@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
 <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h1 class="breadcrumbs-custom-title">Новинки</h1>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{url('/')}}">@lang('public.home')</a></li>
              <li class="active">Новинки</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-md bg-primary-2">
          <div class="context-dark bg-image call_section section-md">
 
          <div class="text-center">
            <div class="container">
              <h3 style="color: #fff; position: relative;">Мы готовимся к запуску</h3>
              <!-- TimeCircles-->
              <div class="countdown-wrap" data-countdown="data-countdown" data-from="2019-07-26" data-to="2022-12-31">
                <div class="countdown-circle countdown-days" data-circle-countdown="data-circle-countdown" data-units="Days">
                  <div class="countdown-number">
                    <svg x="0px" y="0px" width="136px" height="136px" viewbox="0 0 100 100">
                      <clipPath class="progress-clip">
                        <path d=""></path>
                      </clipPath>
                      <circle class="countdown-bg" cx="50" cy="50" r="41"></circle>
                      <circle class="clipped countdown-fg" cx="50" cy="50" r="48"></circle>
                    </svg>
                    <div class="countdown-overlay">
                      <h3 class="countdown-counter"></h3>
                    </div>
                  </div>
                  <h5 class="countdown-heading">Days</h5>
                </div>
                <div class="countdown-circle countdown-hours" data-circle-countdown="data-circle-countdown" data-units="Hours">
                  <div class="countdown-number">
                    <svg x="0px" y="0px" width="136px" height="136px" viewbox="0 0 100 100">
                      <clipPath class="progress-clip">
                        <path d=""></path>
                      </clipPath>
                      <circle class="countdown-bg" cx="50" cy="50" r="41"></circle>
                      <circle class="clipped countdown-fg" cx="50" cy="50" r="48"></circle>
                    </svg>
                    <div class="countdown-overlay">
                      <h3 class="countdown-counter"></h3>
                    </div>
                  </div>
                  <h5 class="countdown-heading">Hours</h5>
                </div>
                <div class="countdown-circle countdown-minutes" data-circle-countdown="data-circle-countdown" data-units="Minutes">
                  <div class="countdown-number">
                    <svg x="0px" y="0px" width="136px" height="136px" viewbox="0 0 100 100">
                      <clipPath class="progress-clip">
                        <path d=""></path>
                      </clipPath>
                      <circle class="countdown-bg" cx="50" cy="50" r="41"></circle>
                      <circle class="clipped countdown-fg" cx="50" cy="50" r="48"></circle>
                    </svg>
                    <div class="countdown-overlay">
                      <h3 class="countdown-counter"></h3>
                    </div>
                  </div>
                  <h5 class="countdown-heading">Minutes</h5>
                </div>
                <div class="countdown-circle countdown-seconds" data-circle-countdown="data-circle-countdown" data-units="Seconds">
                  <div class="countdown-number">
                    <svg x="0px" y="0px" width="136px" height="136px" viewbox="0 0 100 100">
                      <clipPath class="progress-clip">
                        <path d=""></path>
                      </clipPath>
                      <circle class="countdown-bg" cx="50" cy="50" r="41"></circle>
                      <circle class="clipped countdown-fg" cx="50" cy="50" r="48"></circle>
                    </svg>
                    <div class="countdown-overlay">
                      <h3 class="countdown-counter"></h3>
                    </div>
                  </div>
                  <h5 class="countdown-heading">Seconds</h5>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </section>

@endsection