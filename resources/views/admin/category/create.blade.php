@extends('admin.layout.admin-layout')

@section('content')
<div class="content-panel">
    <div class="container-fluid" style="padding: 0">
        <div class="row">

            <div class="col-md-12">
                <p class="title-form">افزودن دسته جدید</p>
                <form action="{{ route('category.store') }}" class="my-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">


                            <input class="form-control inputbig" type="text" name="title" placeholder="عنوان را اینجا وارد کنید">
                            <br>

                            <input class="form-control inputbig" type="text" name="sort" placeholder="ترتیب نمایش را بصورت عددی وارد کنید">
                            <br>

                            <select class="form-control" name="parrent">
                                <option value="0">سرگروه</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select><br>

                            <div class="custom-control custom-switch">
                                <input name="status" type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
                            </div><br> <hr>

                            <input type="submit" class="btn btn-primary" value="ارسال">


                        </div>


                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
