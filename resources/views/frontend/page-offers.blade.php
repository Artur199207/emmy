@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

<section class="section section-md bg-default">
            <div class="container">
                <h2 class="text-transform-capitalize wow fadeScale">@lang('public.applications')</h2>
                <div class="isotope-wrap">
                    <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                        <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="" alt="" width="270"
                                        height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('bath') }}">Экраны под
                                                ванну</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$8.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="" data-lightgallery="item">
                                                    <img src=""" alt="" width="270" height="250" />
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
                                <div class="thumbnail-classic-figure"><img src="" alt="" width="270"
                                        height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('pencil') }}">пеналы </a>
                                        </h5>
                                        {{-- <div class="thumbnail-classic-price">$12.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-2.jpg"
                                                    data-lightgallery="item"><img src="" alt=""
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
                                <div class="thumbnail-classic-figure"><img src="" alt="" width="270"
                                        height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('locker') }}">Навесные
                                                шкафы</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$10.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-3.jpg"
                                                    data-lightgallery="item"><img src="" alt=""
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
                                <div class="thumbnail-classic-figure"><img src="" alt="" width="270"
                                        height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('skins') }}">
                                                Тумбы с раковинами</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$13.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-4.jpg"
                                                    data-lightgallery="item"><img src="" alt=""
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
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-5.jpg"
                                        alt="" width="270" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="{{ route('mirror') }}">Зеркала</a></h5>
                                        {{-- <div class="thumbnail-classic-price">$14.99</div> --}}
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-5.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-5.jpg"
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
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-6.jpg"
                                        alt="" width="570" height="530" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Wedding
                                                Furnitures</a></h5>
                                        <div class="thumbnail-classic-price">$16.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-6.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-6.jpg"
                                                        alt="" width="570" height="530" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail-classic block-1">
                                <div class="thumbnail-classic-figure"><img src="images/masonry-gallery/image-7.jpg"
                                        alt="" width="570" height="250" /> </div>
                                <div class="thumbnail-classic-caption">
                                    <div>
                                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Pies</a></h5>
                                        <div class="thumbnail-classic-price">$10.99</div>
                                        <div class="thumbnail-classic-button-wrap">
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                    href="images/masonry-gallery/image-7.jpg"
                                                    data-lightgallery="item"><img src="images/masonry-gallery/image-7.jpg"
                                                        alt="" width="570" height="250" /></a></div>
                                            <div class="thumbnail-classic-button"><a
                                                    class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                    href="cart-page.html"></a></div>
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