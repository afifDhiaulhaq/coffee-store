<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center mt5">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Promo Menu</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme">
                @foreach ($products_promo as $product)
                    <div>
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
        <div class="row">
            <div class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary">See More...</button>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center mt-5">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Best Seller</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme">
                @foreach ($products_bestseler as $product)
                    <div>
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
        <div class="row">
            <div class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary">See More...</button>
            </div>
        </div>

        
        
    </div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })
</script>

