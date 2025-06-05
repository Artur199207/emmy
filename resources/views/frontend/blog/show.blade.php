@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">Blog Post</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="grid-blog.html">Blog</a></li>
                    <li class="active">Blog Post</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section Shop-->
    <section class="section section-md bg-default text-md-left">
        <div class="container">
            <div class="row row-50 row-md-60">
                <div class="col-lg-12 col-xl-12">
                    <div class="inset-xl-right-100">
                        <div class="row row-50 row-md-60 row-lg-80">
                            <div class="col-12">
                                <article class="post post-modern-1">
                                    <div class="post-modern-panel">
                                        {{-- <div><a class="post-modern-tag" href="#">News</a></div> --}}
                                        <div>
                                            <time class="post-modern-time"
                                                datetime="2023-09-08">{{ app()->getLocale() === 'ru' ? $blog->dataRu : $blog->dataEn }}</time>
                                        </div>
                                    </div>
                                    <h3 class="post-modern-title">
                                        {{ app()->getLocale() === 'ru' ? $blog->titleRu : $blog->titleEn }}</h3>
                                    <div class="post-modern-figure"><img src="{{ asset('storage/' . $blog->image) }}"
                                            alt="" width="800" height="394" />
                                    </div>

                                </article>
                                <!-- Quote Classic-->
                                <p>{!! app()->getLocale() === 'ru' ? $blog->informationRu : $blog->informationEn !!}</p>
                                <div class="single-post-bottom-panel">
                                    <div class="group-sm group-justify">

                                        <div>
                                            <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                                                <div>
                                                    <ul class="list-inline list-social list-inline-sm">
                                                        <li><a class="icon mdi mdi-vk" href="#"></a></li>
                                                        <li><a class="icon mdi mdi-telegram" href="#"></a></li>
                                                        <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                                        <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <h6 class="single-post-title">3 Comments</h6>
                                <div class="box-comment">
                                    <div class="unit flex-column flex-sm-row unit-spacing-md">
                                        <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                                    src="images/testimonials/thumb1.jpg" alt="" width="119"
                                                    height="119" /></a></div>
                                        <div class="unit-body">
                                            <div class="group-sm group-justify">
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <h5 class="box-comment-author"><a href="#">Lorem Ipsum</a>
                                                        </h5><a class="box-comment-reply" href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="box-comment-time">
                                                    <time datetime="2023-08-30">Aug 30, 2023</time>
                                                </div>
                                            </div>
                                            <p class="box-comment-text">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting
                                                industry. Lorem Ipsum has been the industry's standach dummy Lorem Ipsum is
                                                simply dummy text
                                                of the printing and typesetting industry. </p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <div class="unit flex-column flex-sm-row unit-spacing-md">
                                            <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                                        src="images/testimonials/thumb1.jpg" alt="" width="119"
                                                        height="119" /></a></div>
                                            <div class="unit-body">
                                                <div class="group-sm group-justify">
                                                    <div>
                                                        <div class="group-xs group-middle">
                                                            <h5 class="box-comment-author"><a href="#">Lorem
                                                                    Ipsum</a></h5><a class="box-comment-reply"
                                                                href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="box-comment-time">
                                                        <time datetime="2023-08-30">Aug 30, 2023</time>
                                                    </div>
                                                </div>
                                                <p class="box-comment-text">Lorem Ipsum is simply dummy text of the
                                                    printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standach dummy </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-comment">
                                    <div class="unit flex-column flex-sm-row unit-spacing-md">
                                        <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                                    src="images/testimonials/thumb1.jpg" alt="" width="119"
                                                    height="119" /></a></div>
                                        <div class="unit-body">
                                            <div class="group-sm group-justify">
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <h5 class="box-comment-author"><a href="#">Lorem Ipsum</a>
                                                        </h5><a class="box-comment-reply" href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="box-comment-time">
                                                    <time datetime="2023-08-30">Aug 30, 2023</time>
                                                </div>
                                            </div>
                                            <p class="box-comment-text">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting
                                                industry. Lorem Ipsum has been the industry's standach dummy Lorem Ipsum is
                                                simply dummy text
                                                of the printing and typesetting industry. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <h6 class="single-post-title">Leave a comment</h6>
                               
                                    <div class="row row-20 row-md-30">
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-first-name-2" type="text"
                                                    name="name" data-constraints="@Required">
                                                <label class="form-label" for="contact-first-name-2">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-last-name-2" type="text"
                                                    name="name" data-constraints="@Required">
                                                <label class="form-label" for="contact-last-name-2">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <label class="form-label" for="contact-message-2">Message</label>
                                                <textarea class="form-input textarea-lg" id="contact-message-2" name="phone" data-constraints="@Required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button button-sm button-primary button-zakaria"
                                        type="submit">Submit</button>
                                
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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
