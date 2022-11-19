@extends('admin.layout.admin-layout')
@section('title','جزییات فاکتور')
@section('content')
    <div  class="card-header-tabs" style="width: 80%;margin: 3%">
        <table class="table table-bordered">
            <thead style="background-color: blue">
            <th>ردیف</th>
            <th>نام کالا</th>
            <th> تعداد</th>
            <th>قیمت کالا</th>
            <th> مبلغ کل</th>
            </thead>
            <tbody>
            @foreach($orderDetailes as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->product->title}}</td>
                    <td>{{$item->qty}}</td>
                    <td>{{number_format($item->price)}}&nbsp;تومان</td>
                    <td>{{number_format($item->total_price)}}&nbsp;تومان</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{route('transcation.index')}}" class="btn btn-info">بازگشت به صفحه گزارش تراکنش ها</a>
        </div>
    </div>
@endsection
