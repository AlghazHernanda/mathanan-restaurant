@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}

@section('container')

   <!-- ini landing page pertama -->
   <section class="main-banner" id="home">
    <div class="js-parallax-scene">
        <div class="banner-shape-1 w-100" data-depth="0.30">
            <img src="assets/images/berry.png" alt="">
        </div>
        <div class="banner-shape-2 w-100" data-depth="0.25">
            <img src="assets/images/leaf.png" alt="">
        </div>
    </div>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h1 class="h1-title">
                            Welcome to our
                            <span>India</span>
                            restaurant.
                        </h1>
                        <p>This is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eius
                            vel tempore consectetur nesciunt? Nam eius tenetur recusandae optio aperiam.</p>
                        <div class="banner-btn mt-4">
                            <a href="#menu" class="sec-btn">Check our Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img-wp">
                        <div class="banner-img" style="background-image: url(assets/images/main-b.jpg);">
                        </div>
                    </div>
                    <div class="banner-img-text mt-4 m-auto">
                        <h5 class="h5-title">Sushi</h5>
                        <p>this is Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- batasnyaaa -->

<!-- page discover restaureant -->
<section class="about-sec section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                    <p class="sec-sub-title mb-3">About Us</p>
                    <h2 class="h2-title">Discover our <span>restaurant story</span></h2>
                    <div class="sec-title-shape mb-4">
                        <img src="assets/images/title-shape.svg" alt="">
                    </div>
                    <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolore at
                        aspernatur eveniet temporibus placeat voluptatum quaerat accusamus possimus
                        cupiditate, quidem impedit sed libero id perspiciatis esse earum repellat quam.
                        Dolore modi temporibus quae possimus accusantium, cum corrupti sed deserunt iusto at
                        sapiente nihil sint iste similique soluta dolor! Quod.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-video">
                    <div class="about-video-img" style="background-image: url(assets/images/about.jpg);">
                    </div>
                    <div class="play-btn-wp">
                        <a href="assets/images/video.mp4" data-fancybox="video" class="play-btn">
                            <i class="uil uil-play"></i>

                        </a>
                        <span>Watch The Recipe</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- batasnyaa discover restaurant -->
    
@endsection
