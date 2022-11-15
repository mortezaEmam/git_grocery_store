@extends('layouts.master')
@section('content')

   <h1 class="container-fluid text-center " style="padding: 10px;">ادامه خرید  </h1>
    <div class="container">
        <table class="table border header table-hover">
            <thead>
            <th>ردیف</th>
            <th>نام کالا</th>
            <th> تعداد</th>
            <th>قیمت کالا</th>
            <th> مبلغ کل</th>
            </thead>
            <tbody>
            @foreach($carts as $cart)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$cart->title}}</td>
                <td>{{$cart->quantity}}</td>
                <td></td>
            </tr>
            @endforeach
            </tbody>

            <tfoot class="border-info">
            @if($number_product>0)
            <tr style="border-top: solid 2px blue;">
                <td  style="color: red;font-weight: 900">مبلغ قابل پرداخت</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="color: red">{{number_format($sum_cart)}}&nbsp;&nbsp;تومان</td>
            </tr>
            @else
                <tr style="border-top: solid 2px blue;">
                    <td></td>

                    <td  style="color: green;font-weight: 900;font-family: Tahoma;" colspan="3">فاکتور پرداخت نشده ندارید</td>

                    <td></td>
                </tr>
            @endif
            </tfoot>
        </table>
    </div>
@endsection
