@extends('layouts.website.app')
@section('content')

<div class="w3l_banner_nav_right">
	<div class="w3l_banner_nav_right_banner3">
		<h3>Best Deals For New Products<span class="blink_me"></span></h3>
	</div>
	<!---728x90--->

	<div class="w3l_banner_nav_right_banner3_btm">
		<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
			<div class="view view-tenth">
				<img src="{{ url('website/images/13.jpg')}}" alt=" " class="img-responsive" />
				<div class="mask">
					<h4>Grocery Store</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
				</div>
			</div>
			<h4>Utensils</h4>
			<ol>
				<li>sunt in culpa qui officia</li>
				<li>commodo consequat</li>
				<li>sed do eiusmod tempor incididunt</li>
			</ol>
		</div>
		<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
			<div class="view view-tenth">
				<img src="{{ url('website/images/14.jpg')}}" alt=" " class="img-responsive" />
				<div class="mask">
					<h4>Grocery Store</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
				</div>
			</div>
			<h4>Hair Care</h4>
			<ol>
				<li>enim ipsam voluptatem officia</li>
				<li>tempora incidunt ut labore et</li>
				<li>vel eum iure reprehenderit</li>
			</ol>
		</div>
		<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
			<div class="view view-tenth">
				<img src="{{ url('website/images/15.jpg')}}" alt=" " class="img-responsive" />
				<div class="mask">
					<h4>Grocery Store</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
				</div>
			</div>
			<h4>Cookies</h4>
			<ol>
				<li>dolorem eum fugiat voluptas</li>
				<li>ut aliquid ex ea commodi</li>
				<li>magnam aliquam quaerat</li>
			</ol>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---728x90--->
	<div class="w3ls_w3l_banner_nav_right_grid">
		<h3>Popular Brands</h3>
			<div class="w3ls_w3l_banner_nav_right_grid1">
				 @if(isset($products) && $products)
                    @foreach($products as $product)
                    {{$product->category->productType->name}}
                    @endforeach
                    @else
                    <p>No products found.</p>
                    @endif

                    @if(isset($products) && $products)
                            @foreach($products as $product)
				<div class="col-md-3 w3ls_w3l_banner_left static-container">
					<div class="hover14 column">

						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{ url('website/images/offer.png')}}" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="{{ url('single')}}"><img src="data:image/jpeg;base64,{{ base64_encode($product->image) }}" alt="{{ $product->pname }}" class="img-responsive">
											</a>
											<p>{{ $product->pname}} {{ $product->attribute}}</p>
											<h4>KShs. {{ $product->price}} </h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="knorr instant soup" />
													<input type="hidden" name="amount" value="3.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>

					</div>
				</div>
				@endforeach
				@endif

			</div>

		<div class="clearfix"> </div>
	</div>
</div>
</div>
<div class="clearfix"></div>
</div>
@endsection
