<section class="video-sec-area pb-100 pt-40" id="about">
    <div class="container">
        @foreach ($about as $about)
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="{{ $about->link }}"><img class="img-fluid"
                        src="/dist/pages/guest/img/play-icon.png" alt=""></a>
            </div>
            <div class="col-lg-6 video-left">
                <h6>{{ $about->h6 }}</h6>
                <h1>{{ $about->h1 }} <br>
                    {{ $about->h2 }}</h1>
                <p><span>{{ $about->span }}</span></p>
                <p>
                    {{ $about->p }}
                </p>
                <img class="img-fluid" src="/dist/pages/guest/img/signature.png" alt="">
            </div>
        </div>
        @endforeach
    </div>
</section>
