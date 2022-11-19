@extends('layouts.master')
@section('content')

    <div class="container-fluid text-center" style="padding-top: 15px;">
        <div class="col-md-12">
           <h2 style="font-weight: 900;color: blue;font-family: Tahoma">خرید شما با موفقیت انجام شد</h2><hr><br>

                <lable style="font-weight: 600;color: blue;font-family: Tahoma" >کد رهگیری :</lable><br><br>
               <p style="font-weight: 900;color: blue;font-family: Tahoma">{{$code_payment}}</p>


        </div>
        <a href="{{route('transcation.index')}}" class="btn btn-primary" >مشاهده سفارشات شما</a>
    </div>
@endsection
