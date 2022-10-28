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
                            <form id="add-basket-{{$product->id}}" action="">
                                @csrf
                            <button type="submit" class="btn btn-danger my-cart-btn hvr-sweep-to-left" onclick="addToCart({{$product->id}})">اضافه کردن به سبد</button>
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
        function addToCart(productId){
$('#add-basket-'+productId).on('submit',function (e) {
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


{{--            //                 var product_id = result.id;--}}
{{--            //                 var title = result.title;--}}
{{--            //                 var quantity = result.quantity;--}}
{{--            //                 var image = result.image;--}}
{{--            //                 var price = result.price;--}}
{{--            //                 var total = price * quantity;--}}
{{--            // $('#my-cart-table').append(--}}
{{--            //     '<tr id="' + product_id + '" >' +--}}
{{--            //     '<td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="' + image + '"/></td>' +--}}
{{--            //     '<td>نام:' + title + '</td>' +--}}
{{--            //     '<td title="Unit Price">قیمت:' + price + 'تومان' + '  </td>' +--}}
{{--            //     '<td title="Quantity">تعداد:<input type="number" min="1" style="width: 70px;" class="my-product-quantity" value="' + quantity + '"/></td>' +--}}
{{--            //     '<td title="Total" class="my-product-total">' + total + '</td>' +--}}
{{--            //     '<td title="Remove from Cart" class="text-center" style="width: 30px;"><a href="javascript:void(0);" class="btn btn-xs btn-danger my-product-remove">X</a></td>' +--}}
{{--            //     '</tr>'--}}
{{--            // );--}}
{{--            //--}}
{{--            //--}}
{{--            // $('#my-cart-table').append(result.product_number>0 ?--}}
{{--            //     '<tr>' +--}}
{{--            //     '<td></td>' +--}}
{{--            //     '<td><strong>total</strong></td>' +--}}
{{--            //     '<td></td>' +--}}
{{--            //     '<td></td>' +--}}
{{--            //     '<td><strong class="my-cart-grand-total">'+result.total_baskets+'</strong></td>' +--}}
{{--            //     '<td></td>' +--}}
{{--            //     '</tr>'--}}
{{--            //     : '<div class="alert alert-danger" role="alert" class="my-cart-empty-message">Your cart is empty</div>'--}}
{{--            // );--}}


{{--            //--}}
{{--            // $('#my-cart-table').append(--}}
{{--            //     '<tr style="color: red;font-size: 24px;text-align: center">'+--}}
{{--            //         '<td class="alert-danger">سبد خرید شما خالی هست</td>'+--}}
{{--            //    ' </tr>'--}}
{{--            // );--}}


{{--            //     },--}}
{{--            // });--}}

{{--// })--}}

{{--    </script>--}}

@endsection
