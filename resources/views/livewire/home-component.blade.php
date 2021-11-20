<div class="p-0 container contain-bg">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/images/Bg-body.jpg') }}" alt="banner1">           
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/Bg-body.jpg') }}" alt="banner2">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/Bg-body.jpg') }}" alt="banner3">  
          </div>
        </div>
      </div>
      <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box text-center">Latest Products</h3>
        <div class="wrap-top-banner">
            <a href="/store" class="link-banner banner-effect-2">
                <figure>
                    <img class="banner" src="{{asset('assets/images/banner.jpg')}}" alt="banner">
                </figure>
            </a>
        </div>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">						
                <div class="tab-contents">
                    <div class="tab-content-item active">
                        <div class="wrap-products owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"50":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                            @foreach ($lproducts as $lproduct)
                                
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{route('product.detail',['slug' => $lproduct->slug])}}" title="{{$lproduct->name}}">
                                        <figure><img class="product_image" src="{{ asset('assets/products')}}/{{$lproduct->image}}" alt="{{$lproduct->name}}"></figure>
                                    </a>                              
                                </div>
                                <div class="product-info">
                                    <a href="{{route('product.detail',['slug' => $lproduct->slug])}}" class="product_link"><span>{{$lproduct->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$lproduct->regular_price}}</span></div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>							
                </div>
            </div>
        </div>
    </div>
</div>