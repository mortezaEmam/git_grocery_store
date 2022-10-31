@extends('layouts.master')
@section('content')

    <div class="container-fluid" style="padding-top: 15px;">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <td>خریدار</td>
                    <td>تعداد کلی محصولات</td>
                    <td>مبلغ نهایی </td>
                    <td>آدرس خریدار</td>
                    <td>تلفن</td>
                    <td>توضیح خریدار</td>
                </tr>


            <form action="{{route('transcation.store')}}" method="post">
                @csrf
                <tr>
                    <input type="hidden" name="cart_id[]" value="{{implode(',',$cart_id)}}">
                    <td><input type="hidden" name="user_id" value="{{auth()->id()}}"/>{{auth()->user()->username}}</td>
                    <td><input type="hidden" name="number_product" value="{{$number_product}}">{{$number_product}}</td>
                    <td><input type="hidden" name="sum_total_product" value="{{$sum_cart}}">{{$sum_cart}}</td>
                    <td><input type="text" name="address" value="" placeholder="آدرس خود را وارد کنید" required></td>
                    <td><input type="hidden" name="phone" value="{{auth()->user()->phone}}">{{auth()->user()->phone}}</td>
                    <td><textarea name="description" placeholder="توضیحات خود را در خصوص دسترسی به شما جهت تحویل کالا"></textarea></td>

               <td><input type="submit" class="btn btn-primary" value="پرداخت صورت حساب"></td>
                </tr>
            </form>
            </table>
        </div>
    </div>
@endsection
