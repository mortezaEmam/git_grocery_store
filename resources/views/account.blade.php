@extends('layouts.master')
@section('content')
    <div class="container">
        <hr style="border-top: 4px solid black">
        <h2 style="padding: 10px;">پنل کاربری {{auth()->user()->username}}</h2>
        <span><img class="fa fa-user" width="190px" src="" style="width: 150px;height: auto;"></span>
    </div>
{{--<div class="col-md-4 ">--}}
{{--    <ul>--}}
{{--    <li><a>1</a></li>--}}
{{--    <li><a>1</a></li>--}}
{{--    <li><a>1</a></li>--}}
{{--    <li><a>1</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="col-md-8" style="margin-top: 10px;margin-bottom: 10%">--}}
{{--   <table class="table table-hover border">--}}
{{--       <thead>--}}
{{--       <th>--}}
{{--           <td>ردیف</td>--}}
{{--           <td>نام یک</td>--}}
{{--           <td>نام دو</td>--}}
{{--       </th>--}}
{{--       </thead>--}}
{{--       <tbody>--}}
{{--       <tr>--}}
{{--       <td>1</td>--}}
{{--       <td>مرتضی</td>--}}
{{--       <td>علی</td>--}}
{{--       </tr>--}}
{{--       </tbody>--}}
{{--   </table>--}}
{{--</div>--}}

@endsection
