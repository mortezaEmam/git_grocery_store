@extends('admin.layout.admin-layout')
@section('title','ویرایش انبار');
@section('content')
    <div class="content-panel">
        <div class="container-fluid" style="padding: 0">
            <div class="row">

                <div class="col-md-12">
                    <p class="title-form">ویرایش انبار </p>
                    <form action="{{ route('warehouse.update',['warehouse'=>$warehouse->id]) }}" class="my-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">

                                <label>مالک انبار:</label>
                                <input class="form-control inputbig" type="text" name="origin_id"
                                       value="{{old('origin_id',$warehouse->user->name)}}" readonly>
                                <br>
                                <label>تلفن انبار:</label>
                                <input class="form-control inputbig" type="text" name="phone"
                                       value="{{old('phone',$warehouse->phone)}}" required>
                                <br>
                                <label>آدرس انبار:</label><br>
                                <textarea name="address" rows="5"
                                          cols="115">{{old('address',$warehouse->address)}} </textarea>
                                <br><br>
                                <div class="custom-control custom-switch">
                                    <input name="status" type="checkbox" class="custom-control-input"
                                           id="customSwitch1" @if ($warehouse->status=='on') checked @endif>
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
