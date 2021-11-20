<div class="container contain-bg">
    <div class="row pl-4">
        @foreach ($products as $product)
        <div class="card-content col-lg-4">
            <div class="card">
                <a href="{{ route('product.detail',['slug'=>$product->slug]) }}" title="{{$product->name}}" class="card-link">
                    <img src="{{ asset('assets/products')}}/{{$product->image}}" class="card-img-top store_images" alt="{{$product->name}}" >
                    <h2 class="card-title ellipsis-title">{{ $product->name }}</h2>
                    <p class="card-body">
                        @php
                            $in = $product->short_description;
                            $out = strlen($in) > 80 ? substr($in,0,80)."..." : $in;
                            echo $out;
                        @endphp
                    </p>
                    <span class="card-price card-body">${{$product->regular_price}}</span>
                </a>
                <a href="#" class="button card-link" wire:click.prevent="shop({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">Add to Cart</a>
            </div>
        </div>
        @endforeach
        <div class="pagi-link col-12 text-center">{{$products->links("pagination::bootstrap-4")}}</div>
    </div>
</div>