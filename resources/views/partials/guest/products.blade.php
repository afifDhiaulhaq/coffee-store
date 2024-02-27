<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>{{ $product->name }}</h4>
                            <p class="price float-right">
                                ${{ $product->price }}
                            </p>
                        </div>
                        <p>
                            {{ $product->desc }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="gallery-area section-gap" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="/dist/pages/guest/img/g1.jpg" class="img-pop-home">
                    <img class="img-fluid" src="/dist/pages/guest/img/g1.jpg" alt="">
                </a>
                <a href="/dist/pages/guest/img/g2.jpg" class="img-pop-home">
                    <img class="img-fluid" src="/dist/pages/guest/img/g2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <a href="/dist/pages/guest/img/g3.jpg" class="img-pop-home">
                    <img class="img-fluid" src="/dist/pages/guest/img/g3.jpg" alt="">
                </a>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="/dist/pages/guest/img/g4.jpg" class="img-pop-home">
                            <img class="img-fluid" src="/dist/pages/guest/img/g4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="/dist/pages/guest/img/g5.jpg" class="img-pop-home">
                            <img class="img-fluid" src="/dist/pages/guest/img/g5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
