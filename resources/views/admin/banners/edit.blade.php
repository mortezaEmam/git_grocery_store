@extends('admin.layout.admin-layout')

@section('content')
<div class="content-panel">
    <div class="container-fluid" style="padding: 0">
        <div class="row">

            <div class="col-md-12">
                <p class="title-form">ویرایش دسته</p>
                <form class="my-form" action="{{ route('category.update' ,['category'=>$category->id] ) }}"  method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">


                            <input class="form-control inputbig" type="text" name="title" value="{{ $category->title }}">
                            <br>

                            <input class="form-control inputbig" type="text" name="sort" value="{{ $category->sort }}">
                            <br>

                            <select class="form-control" name="parent_id">
                                <option value="0">سرگروه</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" @if($category->parent_id == $cat->id) selected @endif>
                                        {{ $cat->title }}
                                    </option>
                                @endforeach
                            </select><br>

                            <div class="custom-control custom-switch">
                                <input name="status" type="checkbox" class="custom-control-input" id="customSwitch1"
                                       @if($category->status == 'on') checked @endif>
                                <label class="custom-control-label" for="customSwitch1">فعال/غیرفعال</label>
                            </div><br> <hr>

                            <input type="submit" class="btn btn-primary" value="ذخیره">


                        </div>


                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
