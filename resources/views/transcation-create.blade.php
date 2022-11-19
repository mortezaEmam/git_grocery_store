@extends('layouts.master')
@section('content')

    <div class="container-fluid" style="padding-top: 15px;">
        <div class="col-md-8">
                <table class="table table-active border-success border">
                    <tr class="text-info" style="background:linear-gradient(blue,darkblue);border-radius: 2px">
                        <td>خریدار</td>
                        <td>تعداد کلی محصولات</td>
                        <td>مبلغ نهایی</td>
                        <td>وضعیت سفارش</td>
                        <td>عملیات</td>

                    </tr>
                    <tr style="font-weight: bold">
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->qty}}</td>
                        <td>{{number_format($order->total_amount)}}&nbsp;تومان</td>
                        <td>@if($order->is_confirm=='unpaid')پرداخت نشده@elseif($order->is_confirm=='paid')پرداخت
                            شده@elseدر حال پرداخت@endif</td>
                        <td>
                            <button id="btn-orederdetaile" type="button" class="btn btn-info">نمایش جزئیات فاکتور
                            </button>
                        </td>
                    </tr>
                </table>
            <hr>
            <br>
            <div id="list_detaile" class="col-md-4" style="display: none">
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

            </div>
        </div>

        <div class="col-md-4 ">
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="text-justify " style="color: red">لطفا اطلاعات خواسته شده را جهت ارسال کالا به دقت پرکنید</h2>
                    </div>
                    <form action="{{route('transcation.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="phone" >شماره تلفن</label>
                                <input type="text" name="phone" class="form-control"
                                     value="{{old('phone')}}"  placeholder="شماره تلفن خود را وارد کنید" required>
                            </div>
                            <div class="form-group">
                                <label for="address">آدرس</label>
                                <textarea name="address" class="form-control"
                                          placeholder="لطفا آدرس خود را وارد کنید" required> {{old('address')}}</textarea>
                            </div>

                            </div>
                            <div class="form-check">
                                <label>انتخاب درگاه پرداخت:</label>
                              <select name="gateway">
                                  <option>--انتخاب درگاه پرداخت </option>
                                  <option value="zarinpall">زرین پال</option>
                                  <option value="shaparak">شاپرک</option>
                              </select>
                            </div>
                        <div class="form-group">
                            <label for="address">توضیحات شما</label>
                            <textarea name="description" class="form-control">{{old('description')}}</textarea>
                        </div>
                        <input type="hidden" name="order_id" value="{{$order->id}}">

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">پرداخت صورت حساب</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    <br>
    <br>
@endsection
@section('scripts')
    <script>
        $('#btn-orederdetaile').click(function () {
            $('#list_detaile').css("display", "block");
        })

    </script>
@endsection
