@extends('admin.layout.admin-layout')
@section('title','نمایش انبار')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                @if(!filled(auth()->user()->warehouse))
                    <header class="panel-heading mb-auto">
                        <a class="btn btn-outline-dark" href="{{route('warehouseDetaile.create')}}">افزودن انبار جدید</a>
                    </header>
                @endif

                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>مالک انبار</th>
                        <th>تلفن</th>
                        <th>آدرس</th>
                        <th>فعال/غیرفعال</th>
                        <th>موجودی انبار</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$warehouse->user->name}}</td>
                            <td>{{$warehouse->phone}}</td>
                            <td style="overflow:hidden">{{$warehouse->address}}</td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input name="status" type="checkbox" class="custom-control-input" id="{{$warehouse->id}}" disabled
                                    @if ($warehouse->status=='on') checked @endif
                                    >
                                    <label class="custom-control-label" for="{{$warehouse->id}}"></label>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('warehouseDetaile.show',['warehouse'=>$warehouse->id])}}" class="btn btn-info">
                                    مشاهده موجودی
                                </a>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </section>
            </div>
        </div>

    </div>
</div>
@endsection
