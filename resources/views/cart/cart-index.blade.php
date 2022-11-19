@extends('layouts.master')
@section('content')

    <h1 class="container-fluid text-center " style="padding: 10px;">سبد خرید {{auth()->user()->name}} </h1>
    <div class="card-body" style="margin: 3%">
        <table class="table table-bordered ">
            <thead>
            <tr class="alert-dark" style="background-color: blue">
                <th>خریدار</th>
                <th> تعداد محصولات</th>
                <th>مبلغ کل بدون احتساب تخفیفات</th>
                <th>اعلان ها</th>
                <th>وضعیت</th>
            </thead>
            <tbody>

            <tr class="font-weight-bolder">
                <td>{{$cart->user->name}}</td>
                <td>{{$cart->qty}}</td>
                <td>{{number_format($cart->total)}}&nbsp;تومان
                <td>
                    <button id="btn_detaile" class="btn btn-info">نمایش جزئیات خرید</button>
                </td>
                @if($cart->total>0)
                <td>
                    <form action="{{route('order.store',['cart'=>$cart->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn-success btn ">ثبت سفارش+پرداخت</button>
                    </form>
                </td>
                @endif
            </tr>
            </tbody>
        </table>
    </div>
    <hr><br><br>
    <div id="cartdetaile" class="card-header-tabs" style="width: 50%;display: none;margin: 3%">
        <table class="table table-bordered">
            <thead style="background-color: blue">
            <th>ردیف</th>
            <th>نام کالا</th>
            <th> تعداد</th>
            <th>قیمت کالا</th>
            <th> مبلغ کل</th>
            </thead>
            <tbody>
            @foreach($cart_detailes as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->product->title}}</td>
                    <td>{{$item->qyt}}</td>
                    <td>{{number_format($item->price)}}&nbsp;تومان</td>
                    <td>{{number_format($item->price*$item->qyt)}}&nbsp;تومان</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
    <script>
        $('#btn_detaile').click(function () {
            $('#cartdetaile').css("display", "block");
        })

    </script>
@endsection
