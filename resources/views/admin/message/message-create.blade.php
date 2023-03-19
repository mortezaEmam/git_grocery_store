@extends('admin.layout.admin-layout')
@section('title','اداره پست جدید')
@section('content')
    <div class="content-panel">
        <div class="container-fluid" style="padding: 0">
            <div class="row">

                <div class="col-md-12">
                    <p class="title-form">افزودن اداره پست جدید</p>
                    <form action="{{ route('post.store') }}" class="my-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">

                                <label>آدرس اداره:</label>
                                <textarea name="address" placeholder="آدرس انبار را اینجا وارد کنید" rows="5" cols="115">{{old('address')}} </textarea>
                                <br><br>
                                <label>تلفن یک:</label>
                                <input class="form-control inputbig" type="text" name="tel1"
                                       placeholder=" تلفن اداره پست را وارد کنید" value="{{old('tel1')}}" required>
                                <br>
                                <label>تلفن دو:</label>
                                <input class="form-control inputbig" type="text" name="tel2"
                                       placeholder=" تلفن اداره پست  را وارد کنید" value="{{old('tel2')}}">
                                <br>
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
