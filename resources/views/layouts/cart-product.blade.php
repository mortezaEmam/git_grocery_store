<div class="col-md-3 top_brand_right">
    <div class="hover14 column">
        <div class="agile_top_brand_right_grid">
            <div class="agile_top_brand_right_grid_pos">
                <img src="{{asset('master/images/offer.png')}}" alt=" " class="img-responsive"/>
            </div>
            <div class="agile_top_brand_right_grid1">
                <figure>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                            <a href="{{route('product.show',['product'=>$product->id])}}"><img
                                    src="{{\App\Models\Product::getImageUrl($product)}}" alt=" "
                                    class="img-responsive"/></a>
                            <p>
                                {{$product->title}}</p>

                            <h4>{{$product->price}} <span>$10.00</span></h4>

                        </div>
                        <div class="snipcart-details top_brand_home_details">
                            <form id="add-basket-{{$product->id}}" action="">
                                @csrf
                                <button type="submit" class="btn btn-danger my-cart-btn hvr-sweep-to-left"
                                        onclick="addToCart({{$product->id}})">اضافه کردن به سبد
                                </button>
                            </form>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function addToCart(productId) {
            $('#add-basket-' + productId).on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    type: "post",
                    url: '/baskets/store/' + productId,
                    dataType: 'json',
                    data: {
                        _token: "{{csrf_token()}}",

                    },

                    success: function (result) {

                        $('.my-cart-badge').text(result.product_number);
                    },
                });
            });
        }
    </script>

@endsection
