@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
    <style>
        .form-select {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .select-optionOne>span {
            display: flex;
            justify-content: center;
            align-content: center;
            margin-left: 25px;
            padding: 5px;
            border: solid 1px;
            border-radius: 8px;
        }
    </style>

    <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">@lang('public.product-singl')</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">@lang('public.home')</a></li>
                    <li><a href="{{ route('bath') }}">@lang('public.shop')</a></li>
                    <li class="active">@lang('public.product-singl')</li>
                </ul>
            </div>
        </div>
    </section>



    <!-- Single Product-->
    <section class="section section-md section-first bg-default">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">
                    <div class="slick-vertical slick-product">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true"
                            data-child="#child-carousel" data-for="#child-carousel">
                            @foreach (json_decode($bath->images, true) as $image)
                                <div class="item">
                                    <div class="slick-product-figure">
                                        <img src="{{ asset('storage/' . $image) }}" alt="" width="530"
                                            height="480" />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true"
                            data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3"
                            data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                            @foreach (json_decode($bath->images, true) as $image)
                                <div class="item">
                                    <div class="slick-product-figure">
                                        <img src="{{ asset('storage/' . $image) }}" alt="" width="530"
                                            height="480" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="single-product">
                        <h6>
  {{ $bath->available === 1 ? 'Есть в наличии' : ($bath->available === 0 ? 'Нет в наличии' : 'Данных нет') }}
</h6>

                        <h3 class="text-transform-none font-weight-medium">{!! app()->getLocale() === 'ru' ? $bath->spaceNameRu : $bath->spaceNameEn !!}</h3>
                        <div class="group-md group-middle">
                            <div class="single-product-price">{{ $bath->priceRu }}</div>
                         
                        </div>
                        <p>{!! app()->getLocale() === 'ru' ? $bath->descriptionRu : $bath->descriptionEn !!}</p>
                        <hr class="hr-gray-100">
                            <p>{!! app()->getLocale() === 'ru' ? $bath->articleRu : $bath->articleEn !!}</p>
                        <ul class="list list-description">
                            <li>
                                <span>guyn</span>
                                <span style="display: flex; gap: 10px; flex-wrap: wrap;margin-top:20px;margin-bottom:25px;">
                                    @foreach (json_decode($bath->color, true) as $color)
                                        <span
                                            style="width: 30px; height: 30px; background-color: {{ $color }}; border: 1px solid #000; border-radius: 4px;"></span>
                                    @endforeach
                                </span>
                            </li>
                            <li>
                                <span>@lang('public.Box')</span>
                                <span class="select-optionOne">
                                    <select name="size" class="form-select">

                                        @foreach (json_decode($bath->sizeRu, true) as $size)
                                            <option value="{{ $size }}">{{ $size }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </li>
                        </ul>
                        <div class="group-xs group-middle">
                            <div class="product-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1"
                                    max="1000">
                            </div>
                            <div><a class="button button-lg button-secondary button-zakaria"
                                    href="cart-page.html">@lang('public.cart')</a></div>
                        </div>
                        <hr class="hr-gray-100">
                        <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                            <div>
                                <ul class="list-inline list-social list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs nav-tabs-1">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                data-toggle="tab">Описание</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                data-toggle="tab">Оплата</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                data-toggle="tab">Доставка</a></li>
                    </ul>
                </div>
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        <div class="box-comment">
                            <div class="unit flex-column flex-sm-row unit-spacing-md">
                                
                                <div class="unit-body">
                                    
                                    <p class="box-comment-text">{!! app()->getLocale() === 'ru' ? $bath->informationRu : $bath->informationEn !!}</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span>
                                </div>
                                <div class="unit-body">
                                    <p>{!! app()->getLocale() === 'ru' ? $bath->payRu : $bath->payEn !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                                <div class="unit-body">
                                    <p>{!! app()->getLocale() === 'ru' ? $bath->DeliveryRu : $bath->DeliveryEn !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products-->



    <!-- Our brand-->
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



@endsection
