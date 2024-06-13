@extends('layouts.website.app')
@section('content')
<div class="w3l_banner_nav_right">
    <div class="w3l_banner_nav_right_banner4">
        <h3>Best Deals For New Products<span class="blink_me"></span></h3>
    </div>
    <!---728x90--->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
        <h3>Household Products</h3>
        @foreach ($products as $product)
        <div class="w3ls_w3l_banner_nav_right_grid1">

            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="{{ url('website/images/offer.png')}}" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">

                                        <a href="{{ url('single')}}">
                                            <img src="data:image/jpeg;base64,{{ base64_encode($product->image_blob) }}" alt="{{ $product->pname }}" class="img-responsive">

                                        </a>
                                        <p>@if($product->product_id == 1)
                                            New Product Name
                                            @else
                                            {{ $product->pname }} {{ $product->attribute }}
                                        </p>
                                        <h4>KShs. {{ $product->price }} </h4>
                                        @endif
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="{{ $product->pname }}"/>
                                                <input type="hidden" name="amount" value="{{ $product->price }}" />
                                                <input type="hidden" name="discount_amount" value="5.00" />
                                                <input type="hidden" name="currency_code" value="KES" />
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

        </div>
        @endforeach
    </div>
    <div class="clearfix"> </div>
</div>

<div class="clearfix"></div>

@endsection