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
                                <input class="form-control inputbig" type="text" name="name" value="{{old('name',$product->title)}}" >

                                <br>
                                <input class="form-control inputbig" type="text" name="short_description" value="{{old('short_description',$product->short_description)}}"/>
                                <br>
                                <textarea class="form-control" name="description"  rows="12">{{old('description',$product->title)}}"</textarea>

                                <br>
                                <hr>
                                @if(filled($descriptions))

                                    <h3 class="text-info">خصوصیات محصول شما</h3><br>

                                    <table>
                                        <thead class="table table-hover table-bordered tab-container">
                                        <tr>
                                            <th>عنوان</th>
                                            <th>مقدار</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($descriptions as $item)

                                            <tr id="description_id-{{$item->id}}" style="padding-bottom: 5px;">
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->icon}}</td>

                                                <td>

                                                    <button type="button" onclick="delete_quantiy('{{$item->id}}')"  class="btn btn-danger btn-xs" >
                                                        <svg class="bi bi-trash" width="1.2em" height="1.2em"
                                                             viewBox="0 0 16 16" fill="currentColor"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"></path>
                                                            <path fill-rule="evenodd"
                                                                  d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                  clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>

                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                                <br>

                                <input type="button" class="btn-primary btn" id="quantiy" value="افزودن خصوصیت">

                                <hr>

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
                                    @include('admin.product.category')


                                </div>

                                <div class="box-widget">
                                    <img src="{{$url_file}}" style="width: 180px;height: auto">
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
        function delete_quantiy(quantiyId) {
            console.log(quantiyId);
            $.ajax({
                url: '/product/delete_quantiy/' + quantiyId,
                type: 'post',
                data: {
                    _token: "{{csrf_token()}}",

                },
                success: function (result) {
                    if(result.sucsess)
                    {

                        $('#description_id-'+quantiyId).html("");

                    }
                    else {
                        alert('no find item');
                    }

                }
            });

        }
    </script>
@endsection
