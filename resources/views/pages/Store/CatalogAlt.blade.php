@extends('welcome')
@section('catalogAlt')
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">


        <li><a href="index.html">Home</a></li>


        <li><span class="fa fa-angle-right"></span></li>

        <li><a href="store.html">Store</a></li>


        <li><span class="fa fa-angle-right"></span></li>

        <li><span>Action Games</span></li>

    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->




<div class="container">
    <!-- START: Categories -->
    <x-view-game></x-view-game>
    <!-- END: Categories -->

    <!-- START: Products Filter -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <div class="row vertical-gap">
                <div class="col-md-4">
                    <select class="form-control">
                        <option value="" disabled selected>Select Platform</option>
                        <option value="ps4">PS4</option>
                        <option value="xbox">Xbox 1</option>
                        <option value="pc">PC</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <div class="nk-input-slider-inline">
                        <div class="nk-input-slider">
                            <div class="nk-input-slider-content text-white">
                                PRICE:
                                <strong class="text-main-1">€ <span class="nk-input-slider-value-0"></span></strong>
                                -
                                <strong class="text-main-1">€ <span class="nk-input-slider-value-1"></span></strong>
                            </div>
                            <div class="nk-input-slider-input">
                                <input type="text" name="price-filter" data-slider-min="0" data-slider-max="1800" data-slider-step="1" data-slider-value="[200, 1200]" data-slider-tooltip="hide">
                            </div>
                        </div>
                        <div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <form action="#" class="nk-form" novalidate="novalidate">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type something...">
                    <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Products Filter -->

    <div class="nk-gap-2"></div>
    <!-- START: Products -->
    <div class="row vertical-gap">


        @foreach ($products as $product)

        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="store-product.html">
                    <img src="{{asset('/assets/images/'.$product->image) }}" alt="However, I have reason">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">{{$product->title}}</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating">
                        @for ($i = 1; $i <=5; $i++) @if ($i < $product->rate)
                            <i class="fa fa-star"></i>
                            @elseif($i === $product->rate) <i class="fas fa-star-half-alt"></i>
                            @else <i class="far fa-star"></i>
                            @endif
                            @endfor</div>
                    <div class="nk-gap-1"></div>
                    {{$product->content}}
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">€ {{$product->price}}</div>
                    <div class="nk-gap-1"></div>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>
    <!-- END: Products -->

    <!-- START: Pagination -->
    <div class="nk-gap-3"></div>
    <div class="nk-pagination nk-pagination-center">
        <a href="#" class="nk-pagination-prev">
            <span class="ion-ios-arrow-back"></span>
        </a>
        <nav>
            <a class="nk-pagination-current" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <span>...</span>
            <a href="#">14</a>
        </nav>
        <a href="#" class="nk-pagination-next">
            <span class="ion-ios-arrow-forward"></span>
        </a>
    </div>
    <!-- END: Pagination -->

    <!-- START: Most Popular -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Most</span> Popular</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">


        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.html">
                    <img src="/assets/images/product-11-xs.jpg" alt="She gave my mother">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">She gave my mother</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 14.00</div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.html">
                    <img src="/assets/images/product-12-xs.jpg" alt="A hundred thousand">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">A hundred thousand</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 20.00</div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.html">
                    <img src="/assets/images/product-13-xs.jpg" alt="So saying he unbuckled">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">So saying he unbuckled</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 23.00</div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.html">
                    <img src="/assets/images/product-14-xs.jpg" alt="However, I have reason">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">However, I have reason</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 32.00</div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.html">
                    <img src="/assets/images/product-15-xs.jpg" alt="At first, for some time">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">At first, for some time</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 14.00</div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.html">
                    <img src="/assets/images/product-16-xs.jpg" alt="When the last &#39;natural&#39;">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">When the last &#39;natural&#39;</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 20.00</div>
                </div>
            </div>
        </div>

    </div>
    <!-- END: Most Popular -->
</div>

<div class="nk-gap-2"></div>
@endsection