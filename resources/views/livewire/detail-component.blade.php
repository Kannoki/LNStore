<div class="container contain-bg detail-bg">
	<div class="row p-4">
			<div class="col-md-5">
				<div class="project-info-box mt-0">
					<h5 style="color: black">Product Details</h5>
					<p class="mb-0">{{$product->description}}</p>
				</div><!-- / project-info-box -->

				<div class="project-info-box">
					<p class="mb-0"><b>Budget:</b> ${{ $product->regular_price }}</p>
				</div><!-- / project-info-box -->

				<button class="btn btn-primary btn-lg btn-block float-right" type="button" wire:click.prevent="shop({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">Add to Cart</button>
				
			</div><!-- / column -->

			<div class="col-md-7">
				<img src="{{ asset('assets/products') }}/{{ $product->image }}" alt="{{ $product->name }}" class="rounded mx-auto d-block" style="width: max-content;">
				<div class="project-info-box">
					<p><b>Stock:</b> {{$product->stock_status}}</p>
				</div><!-- / project-info-box -->
			</div><!-- / column -->
	</div>
</div>