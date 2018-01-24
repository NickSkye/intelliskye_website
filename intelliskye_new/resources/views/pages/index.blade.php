@extends('layouts.layout')

@section('content')
    <div class="page-generic themeone">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xs-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner shadowdiv">
                            <div class="item active">
                                <img src="/images/firstslide.jpg" alt="Intelliskye">
                                <div class="carousel-caption">
                                    <h3>Intelliskye</h3>
                                    <p>Learn about our latest projects</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="/images/secondslide.jpg" alt="Intelliskye">
                                <div class="carousel-caption">
                                    <h3>Intelliskye</h3>
                                    <p>Click here to start your journey</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="/images/thirdslide.jpg" alt="Intelliskye">
                                <div class="carousel-caption">
                                    <h3>Intelliskye</h3>
                                    <p>Learn more about our company</p>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    {{--<div class="col-sm-5 left-col">--}}
                    {{--<div class="top-margin">--}}
                    {{--<div class="text-center" data-aos="fade-up">--}}
                    {{--<h2 class="orange-top">Reinventing Software<br>for the modern era<br>and the future</h2>--}}
                    {{--</div>--}}
                    {{--<div class="text-center">--}}
                    {{--<img src="/images/firstslide.jpg" class="hexagon" style="width:200px;" alt="" data-aos="flip-left" data-aos-delay="200" data-aos-easing="ease-in-sine">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-7">--}}
                    {{--<div>--}}
                    {{--<div id="myCarousel" class="carousel slide vertical" data-ride="carousel">--}}
                    {{--<!-- Indicators -->--}}
                    {{--<ol class="carousel-indicators carousel-indicators-top">--}}
                    {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="3"></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="4"></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="5"></li>--}}

                    {{--</ol>--}}

                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner">--}}

                    {{--<div class="item active">--}}
                    {{--<a href="/about-crystal">--}}
                    {{--<img src="/images/firstslide.jpg" alt="1" style="width:100%;">--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="item">--}}
                    {{--<a href="/about-crystal">--}}
                    {{--<img src="/images/secondslide.jpg" alt="7" style="width:100%;">--}}
                    {{--</a>--}}
                    {{--<div class="carousel-caption">--}}
                    {{--<h3>Chicago</h3>--}}
                    {{--<p>Thank you, Chicago!</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="item">--}}
                    {{--<a href="/about-crystal">--}}
                    {{--<img src="/images/thirdslide.jpg" alt="8" style="width:100%;">--}}
                    {{--</a>--}}
                    {{--<div class="carousel-caption">--}}
                    {{--<h3>New York</h3>--}}
                    {{--<p>We love the Big Apple!</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                    {{--<a href="/about-crystal">--}}
                    {{--<img src="/images/fourthslide.jpg" alt="9" style="width:100%;">--}}
                    {{--</a>--}}
                    {{--<div class="carousel-caption">--}}
                    {{--<h3>New York</h3>--}}
                    {{--<p>We love the Big Apple!</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                    {{--<a href="/about-crystal">--}}
                    {{--<img src="/images/fifthslide.jpg" alt="10" style="width:100%;">--}}
                    {{--</a>--}}
                    {{--<div class="carousel-caption">--}}
                    {{--<h3>New York</h3>--}}
                    {{--<p>We love the Big Apple!</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    {{--</div>--}}


                    {{--<!-- Left and right controls -->--}}
                    {{--<a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
                    {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
                    {{--<span class="sr-only">Previous</span>--}}
                    {{--</a>--}}
                    {{--<a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
                    {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                    {{--<span class="sr-only">Next</span>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    {{--</div>--}}

                    {{--<section class="process">--}}
                    {{--<div class="process__container">--}}
                    {{--<div class="container">--}}
                    {{--<div class="content" data-aos="fade-up">--}}
                    {{--<h3>A natural, healthy alternative that transforms discomfort and ailments into blessed relief.</h3>--}}
                    {{--<p>The process—Deep Heat Crystal Therapy— is a powerful combination of crystallized quartz and radiant hat that enables wavelenghts to penetrate deeply into the bloodstream. This in turn boosts cardiovascular activity, enhances blood flow and improves cell quantity while triggering the release of waste and toins. Better circulation. Better health.</p>              --}}
                    {{--</div>--}}
                    {{--<div class="crystal__icon">--}}
                    {{--<img src="/images/crystal-icon.png" alt="">--}}
                    {{--</div>          --}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="image">--}}
                    {{--<img src="/images/rejuvenation-feel-better.jpg" alt="" data-aos="fade-up">--}}
                    {{--</div>--}}
                    {{--<div class="process__container">--}}
                    {{--<div class="container">--}}
                    {{--<div class="content" data-aos="fade-up">--}}
                    {{--<h3>A natural way to enhance <br>your immune system.</h3>--}}
                    {{--<p>A weak immune system can put you at risk for disease. And we all know, no one wants to be sick as a dog. Now there’s a great natural way to enhance your immunity with Deep Heat Crystal Therapy. This powerful process penetrates deeply into the body increasing blood cell quantity, strengthening white blood cells and improving NK cell functions. In turn, your immune system will become stronger than you ever thought possible.</p>                --}}
                    {{--</div>--}}

                    {{--            <div class="crystal__icon">--}}
                    {{--<img src="/images/crystal-icon.png" alt="">--}}
                    {{--</div>  --}}{{-- --}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="process__container">--}}
                    {{--<div class="container">--}}
                    {{--<div class="content" data-aos="fade-up">--}}
                    {{--<h3>Get back to your beautyful self with <br>Deep Crystal Heat Therapy</h3>--}}
                    {{--<p>When your color starts to go, it could be your blood flow. Poor circulation blocks essential nutrients and oxygen to all organs and cells. This in turn can cause your natural complexion to diminish in hue. Get back to your beautiful self with Deep Heat Crystal Therapy. This powerful process penetrates deeply into the body boosting cardiovascular activity, enhancing blood flow and cell quantity. Watch it rejuvenate and greatly improve the appearance of your skin.</p>               --}}
                    {{--</div>--}}
                    {{--<div class="crystal__icon">--}}
                    {{--<img src="/images/crystal-icon.png" alt="">--}}
                    {{--</div>              --}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="image">--}}
                    {{--<img src="/images/age-better.jpg" alt="" data-aos="fade-up">--}}
                    {{--</div>--}}
                    {{--<div class="process__container">--}}
                    {{--<div class="container">--}}
                    {{--<div class="content" data-aos="fade-up">--}}
                    {{--<h3>Aging is part of life,<br> but nobody wants to look old</h3>--}}
                    {{--<p>Toxins can build up in the blood stream, depriving cells of nutrients and minimizing flow. This can cause dark under-eye circles and age spots. Become younger looking than you ever though possible with Deep Heat Crystal Therapy. This powerful process penetrates deeply into the blood triggering the release of waste and toxins—which often block the circulatory system from functioning effectively. It’ll help rejuvenate and greatly improve the appearance of your skin.</p>               --}}
                    {{--</div>--}}
                    {{-- --}}
                    {{--<div class="crystal__icon">--}}
                    {{--<img src="/images/crystal-icon.png" alt="">--}}
                    {{--</div>   --}}{{--        --}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="process__container">--}}
                    {{--<div class="container">--}}
                    {{--<div class="content" data-aos="fade-up">--}}
                    {{--<h3> Attack your aches with a whole new <br>dimension in warmth that leads to wellbeing.</h3>--}}
                    {{--<p>Unlike other medical issues, chronic pain has no protocol to simply make it better. Until now with Deep Heat Crystal Therapy. This powerful process enables wavelengths to penetrate deeply into the body boosting blood flow. In turn it alleviates the area where you are experiencing the most discomfort. Now you can feel the way you want to feel without any costly medications or invasive surgeries.</p>              --}}
                    {{--</div>--}}

                    {{--</div>--}}

                    {{--</div>--}}
                    {{--</section>--}}

                </div>
            </div>
        </div>
        <div class="parallax paraone"></div>
        <div class="row crystals">
            <div class="col-sm-12">
                <div class="about__block--container shadowdiv">
                    <div class="about__block container">
                        <div class="content__block col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><br>Intelliskye<br>Software.</h2>
                            <p>The best software is necessary to achieve your goals. Here at intelliskye we have what it takes to make your dreams become a reality. We will never stop fighting for you. Youre going to like the way you look, I guaruntee it.</p>
                        </div>
                        <div class="image col-md-6 col-md-offset-2">
                            <img src="/images/thirdslide.jpg" alt="" data-aos="flip-left" data-aos-delay="200" data-aos-easing="ease-in-sine">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax paratwo"></div>
        <div class="row crystals">
            <div class="col-sm-12">
                <div class="about__block--container shadowdiv">
                    <div class="about__block container">
                        <div class="content__block col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><br>Intelliskye<br>Software.</h2>
                            <p>The best software is necessary to achieve your goals. Here at intelliskye we have what it takes to make your dreams become a reality. We will never stop fighting for you. Youre going to like the way you look, I guaruntee it.</p>

                        </div>
                        <div class="image col-md-6 col-md-offset-2" data-aos="fade-up" data-aos-delay="300">
                            <img src="/images/firstslide.jpg" alt="" data-aos="flip-left" data-aos-delay="200" data-aos-easing="ease-in-sine">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="parallax parathree"></div>
        <div class="row crystals">
            <div class="col-sm-12">
                <div class="about__block--container shadowdiv">
                    <div class="about__block container">
                        <div class="content__block col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><br>Intelliskye<br>Software.</h2>
                            <p>The best software is necessary to achieve your goals. Here at intelliskye we have what it takes to make your dreams become a reality. We will never stop fighting for you. Youre going to like the way you look, I guaruntee it.</p>

                        </div>
                        <div class="image col-md-6 col-md-offset-2" data-aos="fade-up" data-aos-delay="300">
                            <img src="/images/secondslide.jpg" alt="" data-aos="flip-left" data-aos-delay="200" data-aos-easing="ease-in-sine">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="parallax parafour"></div>
        <div class="row crystals">
            <div class="col-sm-12">
                <div class="about__block--container shadowdiv">
                    <div class="about__block container">
                        <div class="content__block col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><br>Intelliskye<br>Software.</h2>
                            <p>The best software is necessary to achieve your goals. Here at intelliskye we have what it takes to make your dreams become a reality. We will never stop fighting for you. Youre going to like the way you look, I guaruntee it.</p>

                        </div>
                        <div class="image col-md-6 col-md-offset-2" data-aos="fade-up" data-aos-delay="300">
                            <img src="/images/secondslide.jpg" alt="" data-aos="flip-left" data-aos-delay="200" data-aos-easing="ease-in-sine">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="parallax parafive"></div>
        <div class="row crystals">
            <div class="col-sm-12">
                <div class="about__block--container shadowdiv">
                    <div class="about__block container">
                        <div class="content__block col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><br>Intelliskye<br>Software.</h2>
                            <p>The best software is necessary to achieve your goals. Here at intelliskye we have what it takes to make your dreams become a reality. We will never stop fighting for you. Youre going to like the way you look, I guaruntee it.</p>

                        </div>
                        <div class="image col-md-6 col-md-offset-2" data-aos="fade-up" data-aos-delay="300">
                            <img src="/images/secondslide.jpg" alt="" data-aos="flip-left" data-aos-delay="200" data-aos-easing="ease-in-sine">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="parallax parasix"></div>
    </div>



@endsection