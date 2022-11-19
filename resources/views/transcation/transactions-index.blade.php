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
                        <th> شماره سفارش</th>
                        <th> تعداد محصولات</th>
                        <th>مبلغ پرداختی</th>
                        <th>درگاه پرداخت</th>
                        <th>کد پیگیری</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$transaction->user->name}}</td>
                            <td>{{$transaction->order_id}}</td>
                            <td>{{$transaction->qyt}}</td>
                            <td>{{number_format($transaction->amount)}}&nbsp;تومان</td>
                            <td>{{$transaction->gateway}}</td>
                            <td>{{$transaction->code_payment}}</td>
                            <td>
                                <form action="{{route('order.show',['order'=>$transaction->order_id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{}}">
                                    <button type="submit" class="btn btn-primary">جزییات سفارش</button>
                                </form>
                            </td>
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
