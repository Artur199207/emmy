@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
    <style>
        .fgh {
            height: none !important;
        }
    </style>
     <section class="section section-md bg-default">
            <div class="container">
                <h2 class="text-transform-capitalize wow fadeScale">@lang('public.Gallery')</h2>
                <div class="isotope-wrap">
                    <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/экраны.jpg') }}"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="">Экраны под
                                                ванну</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$8.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="{{ asset('assets/img/экраны.jpg') }}" data-lightgallery="item">
                                                    <img src="{{ asset('assets/img/экраны.jpg') }}" alt="" width="270" height="250" />
                                                </a>
                                            </div>
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh"
                                        src="{{ asset('assets/img/пенал — копия.jpeg') }}" alt=""
                                        width="270" height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="">пеналы </a>
                                        </h5>
                                        {{-- <div class="thumbnail-classic-price">$12.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="{{ asset('assets/img/пенал — копия.jpeg') }}"
                                                    data-lightgallery="item"><img src="{{ asset('assets/img/пенал — копия.jpeg') }}" alt=""
                                                        width="270" height="530" /></a></div>
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh"
                                        src="{{ asset('assets/img/навесной шкаф.jpg') }}" alt=""
                                        width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="">Навесные
                                                шкафы</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$10.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="{{ asset('assets/img/навесной шкаф.jpg') }}"
                                                    data-lightgallery="item"><img src="{{ asset('assets/img/навесной шкаф.jpg') }}" alt=""
                                                        width="270" height="250" /></a></div>
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/тумба с рак (2).jpg') }}"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="">
                                                Тумбы с раковинами</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$13.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="{{ asset('assets/img/тумба с рак (2).jpg') }}"
                                                    data-lightgallery="item"><img src="{{ asset('assets/img/тумба с рак (2).jpg') }}" alt=""
                                                        width="270" height="250" /></a></div>
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/зеркало.jpg') }}"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="">Зеркала</a>
                                        </h5>
                                        {{-- <div class="thumbnail-classic-price">$14.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="{{ asset('assets/img/зеркало.jpg') }}"
                                                    data-lightgallery="item"><img src="{{ asset('assets/img/зеркало.jpg') }}"
                                                        alt="" width="270" height="250" /></a></div>
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-6 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/унитазы.png') }}"
                                        alt="" width="570" height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">унитазы</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$16.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="{{ asset('assets/img/унитазы.png') }}"
                                                    data-lightgallery="item"><img src="{{ asset('assets/img/унитазы.png') }}"
                                                        alt="" width="570" height="530" /></a></div>
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img class="fgh" src="{{ asset('assets/img/зеркальные шкафы.jpg') }}"
                                        alt="" width="570" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">зеркальные
                                                шкафы</a>
                                        </h5>
                                        {{-- <div class="thumbnail-classic-price">$10.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="{{ asset('assets/img/зеркальные шкафы.jpg') }}"
                                                    data-lightgallery="item"><img src="{{ asset('assets/img/зеркальные шкафы.jpg') }}"
                                                        alt="" width="570" height="250" /></a></div>
                                            {{-- <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
