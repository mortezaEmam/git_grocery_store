<div class="col-md-3 top_brand_right">
    <div class="hover14 column">
        <div class="agile_top_brand_right_grid">
            <div class="agile_top_brand_right_grid_pos">
                <img src="{{asset('master/images/offer.png')}}" alt=" " class="img-responsive" />
            </div>
            <div class="agile_top_brand_right_grid1">
                <figure>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                            <a href="{{route('product.show',['product'=>$product->id])}}"><img src="{{\App\Models\Product::getImageUrl($product)}}" alt=" " class="img-responsive" /></a>
                            <p>
                                {{$product->title}}</p>

                            <h4>{{$product->price}} <span>$10.00</span></h4>

                        </div>
                        <div class="snipcart-details top_brand_home_details">
                            <form id="addProduct_{{$product->id}}" action="" >
                                @csrf
                                <input type="hidden" name="productId" value="{{$product->id}}">
                            <button type="submit" class="btn btn-danger my-cart-btn hvr-sweep-to-left"  onClick="addToCart({{$product->id}});">اضافه کردن به سبد</button>

                            </form>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
<span id="pro_basket"></span>

@section('scripts')
    <script>

        function AddToCart(productId) {
            var count = 0;
            $('#addProduct_' + productId).on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    url: "{{route('cart.store')}}",
                    type: "post",
                    data: $(this).serialize(),
                    success: function (result) {
                        if (result.Success) {
                            $("#message").html(result.message);
                            $('#cart_count').text(result.count_basket);

                        }

                    },
                    error: function () {
                        $("#message").html(result.message);
                        $('#cart_count').text(result.count_basket);
                    }


                })

            })
        }


    </script>

@endsection
