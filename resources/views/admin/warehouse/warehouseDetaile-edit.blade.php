@extends('admin.layout.admin-layout')
@section('title','لیست انبارها')
@section('content')
    <br>
    <hr>

    <div class="container"
         style="background-color: #3c763d;padding: 3%;border-radius: 5px;">
        <h3>اطلاعات انبار</h3>
        <br>
        <hr>
        <label>انبار:</label>
        <form action="{{route('warehouseDetaile.update',['warehouseDetaile'=>$warehousedetaile->id])}}" method="post">
            @csrf
        <select class="form-control col-md-8" name="warehouse_id" required>
            <option selected>--انتخاب انبار--</option>
            @foreach($wareHousess as $warehouse)
                <option @if($warehouse->id==$wareHouse->id) selected @endif value="{{$warehouse->id}}">{{$warehouse->address}}</option>
            @endforeach
        </select>
        <hr>
        <label>واحد شمارش کالا:</label>
        <select class="form-control col-md-8" name="vahed" required>
            <option selected>--انتخاب واحد شمارش--</option>
            @foreach($product_counting_units as $product_counting_unit)
                <option @if($product_counting_unit->id==$warehousedetaile->product_counting_unit_id) selected @endif
                value="{{$product_counting_unit->id}}">{{$product_counting_unit->title}}</option>
            @endforeach
        </select>
        <hr>
        <label>موجودی کالا:</label>
        <input class="form-control col-md-8" type="number" name="stock" min="1" value="{{old('stoke',$warehousedetaile->stock)}}">
            <br><hr>
        <div class="">
            <button type="submit" class="btn btn-primary" > ثبت </button>
        </div>
        </form>
    </div>

    <br>
@endsection
