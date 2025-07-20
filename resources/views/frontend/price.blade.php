@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

<section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h1 class="breadcrumbs-custom-title">@lang('public.pricelist')</h1>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{url('/')}}">@lang('public.home')</a></li>
              <li class="active">@lang('public.pricelist')t</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Pricing List-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="title-group">
            <h3 class="font-weight-regular">Our Pricing Plans</h3>
            <p class="text-width-large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy text ever since.

</p>
          </div>
          <div class="row row-xl row-30 justify-content-center">
            <div class="col-sm-6 col-lg-4">
              <article class="pricing-classic">
                <div class="pricing-classic-header"><img class="pricing-classic-figure" src="images/price/price-img-1.jpg" alt="" width="346" height="229"/>
                  <div class="pricing-classic-caption">
                    <div>
                      <h3 class="pricing-classic-title">Basic</h3>
                      <div class="pricing-classic-price-wrap">
                        <div class="pricing-classic-price heading-4">$90.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pricing-classic-body">
                  <ul class="pricing-classic-list">
                    <li>Round Furnitures</li>
                    <li>Sponge Furnitures</li>
                    <li>Wedding Furnitures</li>
                    <li>Macarons</li>
                  </ul><a class="button button-lg button-default-outline-2 button-zakaria" href="cart-page.html">Add to cart</a>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="pricing-classic pricing-classic-sale">
                <div class="pricing-classic-header"><img class="pricing-classic-figure" src="images/price/price-img-2.jpg" alt="" width="346" height="229"/>
                  <div class="pricing-classic-caption">
                    <div><span class="product-badge product-badge-sale">Sale</span>
                      <h3 class="pricing-classic-title">Standach</h3>
                      <div class="pricing-classic-price-wrap">
                        <div class="pricing-classic-price pricing-classic-price-old heading-6">$150.00</div>
                        <div class="pricing-classic-price heading-4">$120.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pricing-classic-body">
                  <ul class="pricing-classic-list">
                    <li>Square Furnitures</li>
                    <li>FruitFurnitures</li>
                    <li>Sculpted Furnitures</li>
                    <li>Biscuits</li>
                  </ul><a class="button button-lg button-default-outline-2 button-zakaria" href="cart-page.html">Add to cart</a>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="pricing-classic">
                <div class="pricing-classic-header"><img class="pricing-classic-figure" src="images/price/price-img-3.jpg" alt="" width="346" height="229"/>
                  <div class="pricing-classic-caption">
                    <div>
                      <h3 class="pricing-classic-title">Premium</h3>
                      <div class="pricing-classic-price-wrap">
                        <div class="pricing-classic-price heading-4">$190.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pricing-classic-body">
                  <ul class="pricing-classic-list">
                    <li>Scalloped Furnitures</li>
                    <li>Chocolate Furnitures</li>
                    <li>Celebration Furnitures</li>
                    <li>Pies</li>
                  </ul><a class="button button-lg button-default-outline-2 button-zakaria" href="cart-page.html">Add to cart</a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
@endsection