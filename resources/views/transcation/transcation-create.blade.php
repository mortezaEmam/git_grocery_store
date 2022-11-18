@extends('layouts.master')
@section('content')

    <div class="container-fluid" style="padding-top: 15px;">
        <div class="col-md-12">
            <table class="table table-active border-success">
                <tr class="text-info">
                    <td>خریدار</td>
                    <td>تعداد کلی محصولات</td>
                    <td>مبلغ نهایی </td>
                    <td>وضعیت سفارش</td>
                    <td>عملیات</td>

                </tr>
                <tr>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->qty}}</td>
                    <td>{{$order->total_price}}</td>
                    <td>@if($order->status=='unpaid')پرداخت نشده@elseif($order->status=='paid')پرداخت شده@elseif($order->status=='pending')در حال پرداخت@endif</td>
                    <td><button id="btn-orederdetaile">نمایش جزئیات فاکتور</button> </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
