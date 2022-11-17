@extends('admin.layout.admin-layout')

@section('content')
    <div class="content-panel" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid" style="padding: 0">
            <div class="row">

                <div class="col-md-12">
                    <p class="title-form">افزودن محصول جدید</p>
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                       @csrf
                        <label for="warehouse-panel">آیا مایل به ذخیره کالا در انبار هستید؟</label>
                        <input type="checkbox" name="warhouse_panel" id="warehouse-panel" onclick="AddProductWarehous()">
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
                                <br>
                                <hr>
                                <div id="warehouse" class="container" style="background-color: #3c763d;padding: 3%;border-radius: 5px;display: none;">
                                    <h3>اظلاعات انبار</h3>
                                    <br><hr>
                                    <label>انبار:</label>
                                    <select class="form-control col-md-8" name="warehouse_id" required>
                                        <option selected>--انتخاب انبار--</option>
                                        @foreach($warehouses as $warehouse)
                                        <option value="{{$warehouse->id}}">{{$warehouse->address}}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                    <label>واحد شمارش کالا:</label>
                                    <select class="form-control col-md-8"  name="vahed" required>
                                        <option selected>--انتخاب واحد شمارش--</option>
                                        @foreach($product_counting_units as $product_counting_unit)
                                        <option value="{{$product_counting_unit->id}}">{{$product_counting_unit->title}}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                    <label>موجودی فعلی کالا:</label>
                                    <input class="form-control col-md-8"  type="number" name="stock" min="1">

                                </div>

                                <br>
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
@endsection

@section('dashboard-scripts')
    <script>

        $(document).ready(function (){

            $("#quantiy").click(function (){
                $("#box-quantity").css("display","block");
            });

        })
    </script>
    <script>
        function AddProductWarehous(){
            $('#warehouse').css("display","block");
        }
    </script>
@endsection
