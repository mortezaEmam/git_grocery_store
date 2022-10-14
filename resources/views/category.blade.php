
@extends('layouts.master')

@section('content')


    <br>
    <br>

    <div class="title-main text-center">
        <h4>آخرین محصولات از دسته <span style="color: red">{{ $category->title }}</span></h4>
    </div>

    <div class="container-fluid post-container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    @foreach($products as $key=>$product)

                        @include('layouts.cart-product')
                    @endforeach
                    {{--                <div class="paginate">{{ $post->links() }}</div>--}}
                </div>

            </div>
        </div>
    </div>

    <br>
    <br>

@endsection
