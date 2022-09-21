@extends('admin.layout.admin-layout')

@section('content')
    <div class="content-panel">
        <div class="container-fluid" style="padding: 0">
            <div class="row">

                <div class="col-md-12">
                    <p class="title-form">ویرایش محصول </p>
                    <form action="{{ route('product.update',['product'=>$product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <input class="form-control inputbig" type="text" name="name" value="{{old('name',$product->title)}}">

                                <br>
                                <input class="form-control inputbig" type="text" name="short_description" value="{{old('short_description',$product->short_description)}}"/>
                                <br>
                                <textarea class="form-control" name="description"  rows="12">{{old('description',$product->description)}}</textarea>

                                <br>
                                <input type="button" class="btn-primary btn" id="quantiy" value="افزودن خصوصیت">


                            </div>

                            <div class="col-md-3">

                                <div class="box-widget">
                                    <h5>انتشار : </h5>
                                    <button class="btn btn-primary" type="submit">
                                        ویرایش محصول
                                    </button>
                                    <br> <hr>
                                    <div class="custom-control custom-switch">
                                        <input name="status" type="checkbox" class="custom-control-input" id="customSwitch1" @if($product->status=='on') checked @endif>
                                        <label class="custom-control-label" for="customSwitch1">فعال / غیرفعال</label>
                                    </div>
                                </div>
                                <div class="box-widget">
                                    <h5>قیمت محصول</h5>
                                    <input type="number" name="price" value="{{old('price',$product->price)}}" >
                                </div>

                                <div class="box-widget">
                                    <h5>دسته : </h5>
                                    <select class="form-control" name="category_id" id="">
                                        <option value="">--انتخاب کنید--</option>
                                        @foreach ($categories as $category)

                                            @if($category->parent_id==0 AND $category->status=='on')
                                                <option @if($product->category_id==$category->id) selected @endif value="{{ $category->id }}">+{{ $category->title }}</option>
                                            @endif
                                            @foreach ($categories as $subcat)
                                                @if($subcat->parent_id==$category->id AND $subcat->status=='on')

                                                    <option  @if($product->category_id==$subcat->id) selected @endif  class="alert-success " value="{{ $subcat->id }}">&nbsp&nbsp&nbsp&nbsp+&nbsp{{ $subcat->title }}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>




                                </div>

                                <div class="box-widget">
                                    <h5>تصویر شاخص</h5>
                                    <img src="{{$image_url}}" width="150px" style="height: auto" alt="محل نمایش تصویر">
                                    <input type="file" name="thumbnail" accept="image/*">
                                </div>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script>

        $(document).ready(function (){

            $("#quantiy").click(function (){
                $("#box-quantity").css("display","block");
            });
        })
    </script>
@endsection
