<select class="form-control" name="category_id" id="">

    <option value="">--انتخاب کنید--</option>

    @foreach ($categories as $category)

    @if($category->parent_id==0 AND $category->status=='on')
    <option  value="{{ $category->id }}" @if(isset($product->category_id)   &&$product->category_id ==$category->id) selected @endif>+{{ $category->title }}</option>
    @endif
    @foreach ($categories as $subcat)
    @if($subcat->parent_id==$category->id AND $subcat->status=='on')

    <option class="alert-success " value="{{ $subcat->id }}" @if(isset($product->category_id) && $product->category_id==$subcat->id) selected @endif> &nbsp&nbsp&nbsp&nbsp-&nbsp{{ $subcat->title }}</option>
    @endif
    @endforeach
    @endforeach
</select>

