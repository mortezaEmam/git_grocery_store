@extends('admin.layout.admin-layout')
@section('title','انبار جدید')
@section('content')
    <div class="content-panel">
        <div class="container-fluid" style="padding: 0">
            <div class="row">

                <div class="col-md-12">
                    <p class="title-form">افزودن انبار جدید</p>
                    <form action="{{ route('warehouse.store') }}" class="my-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">

                                <label>مالک انبار:</label>
                                <input class="form-control inputbig" type="text" name="origin_id"
                                       value="{{old('origin_id',$user->name)}}" readonly>
                                <br>
                                <label>تلفن انبار:</label>
                                <input class="form-control inputbig" type="text" name="phone"
                                       placeholder=" تلفن انبار وارد کنید" value="{{old('phone')}}" required>
                                <br>
                                <label>آدرس انبار:</label><br>
                                <textarea name="address" placeholder="آدرس انبار را اینجا وارد کنید" rows="5" cols="115">{{old('address')}} </textarea>
                                <br><br>
                                <div class="custom-control custom-switch">
                                    <input name="status" type="checkbox" class="custom-control-input"
                                           id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
                                </div>
                                <br>
                                <hr>

                                <input type="submit" class="btn btn-primary" value="ارسال">


                            </div>


                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
