@extends('layouts.master')
@section('content')

   <h1 class="container-fluid text-center " style="padding: 10px;">تکمیل خرید  {{\Illuminate\Support\Facades\Auth::user()->username}}</h1>
    <div class="container">
        <table class="table border header table-hover">
            <thead>
            <th>ردیف</th>
            <th>نام کالا</th>
            <th> تعداد</th>
            <th>قیمت کالا</th>
            <th> مبلغ کل</th>
            <th> وضعیت پرداخت</th>
            </thead>
            <tbody>
            @foreach($carts as $cart)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$cart->title}}</td>
                <td>{{$cart->quantity}}</td>
                @if($cart->status=='paid')
                <td>{{number_format($cart->price)}}&nbsp;&nbsp;تومان</td>
                <td>{{number_format($cart->total)}}&nbsp;&nbsp;تومان</td>
                @else
                    <td>{{number_format($cart->product->price)}}&nbsp;&nbsp;تومان</td>
                    <td>{{number_format($cart->quantity*$cart->product->price)}}&nbsp;&nbsp;تومان</td>

                @endif
                <td>@if($cart->status=='paid') <span class="alert-success">پرداخت شده</span> @else<span class="alert-danger">پرداخت نشده</span>&nbsp;&nbsp;
                    <form action="{{route('transcation.create')}}" method="post">
                        @csrf

                        <input type="hidden" name="cart_id[]" value="{{$cart->id}}">
                        <input  class="btn btn-primary" type="submit" value="پرداخت تکی سفارش"/>
                    </form> @endif </td>
            </tr>
            @endforeach
            </tbody>

            <tfoot class="border-info">

            <tr style="border-top: solid 2px blue;">
                <td  style="color: red;font-weight: 900">مبلغ قابل پرداخت</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="color: red">{{number_format($sum_cart)}}&nbsp;&nbsp;تومان</td>
            </tr>
            </tfoot>
        </table>

        <div class="container" style="padding: 5px;">
        <form action="{{route('transcation.create')}}" method="post">
            @csrf

            <input type="hidden" name="cart_id[]" value="{{$cart_id}}">
            <input  class="btn btn-primary" type="submit" value="پرداخت یکجای تمامی سفارشات"/>
        </form>
        </div>
    </div>
@endsection
