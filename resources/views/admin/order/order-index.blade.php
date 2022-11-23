@extends('admin.layout.admin-layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>نام خریدار</th>
                        <th>تعداد سفارش</th>
                        <th>مبلغ قابل پرداخت</th>
                        <th>وضعیت پرداخت</th>
                        <th>تاریخ ثبت سفارش</th>
                        <th colspan="2">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order->qty}}</td>
                            <td>{{number_format($order->total_amount)}}&nbsp;تومان</td>
                            <td>
                                @if($order->is_confirm=='paid')<span class="alert-success">پرداخت شده</span>
                                @elseif($order->is_confirm=='unpaid')<span class="alert-danger">پرداخت نشده</span>
                                @else<span class="alert-info">درانتطار پاسخ سرور بانک</span>@endif
                            </td>
                            <td>{{$order->created_at}}</td>
                            @if($order->is_confirm=='paid')
                                <td>تاریخ پرداخت{{$order->updated_at}}</td>
                                <td><a href="{{route('post.create',['order'=>$order->id])}}" class="btn btn-success">ارسال محصول</a> </td>
                            @else
                                <td>
                                    <form action="{{route('transcation.create')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{$order->id}}">
                                        <button type="submit" class="btn btn-primary"> پرداخت سفارش+ادامه</button>

                                    </form>
                                </td>

                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    </div>
    </div>
@endsection
