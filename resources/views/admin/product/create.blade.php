@extends('admin.layout.admin-layout')

@section('content')
    <div class="content-panel">
        <div class="container-fluid" style="padding: 0">
            <div class="row">

                <div class="col-md-12">
                    <p class="title-form">افزودن محصول جدید</p>
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                       @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <input class="form-control inputbig" type="text" name="name" placeholder="عنوان را اینجا وارد کنید">

                                <br>
                                <input class="form-control inputbig" type="text" name="short_description" placeholder="توضیح کوتاه را اینجا وارد کنید"/>
                                <br>
                                <textarea class="form-control" name="description"  rows="12" placeholder="توضیح کامل محصول را وارد کنید"></textarea>

                                <br>

                                <input type="button" class="btn-primary btn" id="quantiy" value="افزودن خصوصیت">
                                <br>
                                <div id="box-quantity" class="box-widget" style="display: none">
                                    <h5>خصوصیات : </h5>

                                    <div class="custom-control custom-checkbox">

                                        @include('admin.product.quantity')

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="box-widget">
                                    <h5>انتشار : </h5>
                                    <button class="btn btn-primary" type="submit">
                                        افزودن محصول
                                    </button>
                                    <br> <hr>
                                    <div class="custom-control custom-switch">
                                        <input name="status" type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                        <label class="custom-control-label" for="customSwitch1">فعال / غیرفعال</label>
                                    </div>
                                </div>
                                <div class="box-widget">
                                    <h5>قیمت محصول</h5>
                                    <input type="number" name="price" placeholder="قیمت محصول را به تومان وارد کنید" >
                                </div>

                                <div class="box-widget">
                                    <h5>دسته : </h5>
                                  @include('admin.product.category')


                                </div>

                                <div class="box-widget">
                                    <h5>تصویر شاخص</h5>
                                    <input type="file" name="thumbnail" accept="image/*">
                                </div>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="{{asset('dashboard/js/jquery-1.11.3.min.js')}}"></script>
    <script>

        $(document).ready(function (){

            $("#quantiy").click(function (){
                $("#box-quantity").css("display","block");
            });
        })
        </script>
@endsection
