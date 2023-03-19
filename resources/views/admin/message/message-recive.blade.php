@extends('admin.layout.admin-layout')
@section('title','پیام های دریافتی');
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
{{--                    <a class="btn btn-outline-dark" href="{{route('post.create')}}">افزودن انبار جدید</a>--}}
                    <span>  تعداد کل :{{count($recive_messages)}}</span>
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>موضوع</th>
                        <th>شماره سفارش</th>
                        <th>محصول</th>
                        <th>تاریخ ارسال پیام</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($recive_messages as $message)
                    <tr>
                        <td><a class="title" href="#"> {{$loop->iteration}}</a></td>
                        <td>{{$message->title}}</td>
                        <td>{{$message->order_id}}</td>
                        <td>{{$message->product_id}}</td>
                        <td>{{$message->created_at}}</td>
                        <td>
                            <div class="custom-control custom-switch">
                                <input name="is_confirm" type="checkbox" class="custom-control-input" id="{{$message->id}}" disabled
                                       @if ($message->is_confirm==true) checked @endif
                                >
                                <label class="custom-control-label" for="{{$message->id}}"></label>
                            </div>
                        </td>
                        <td><a href="{{route('warehouse.index')}}" class="btn btn-primary btn-xs">
                                <svg class="bi bi-pencil" width="1.2em" height="1.2em"
                                     viewBox="0 0 16 16" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </td>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </section>
        </div>
    </div>

    </div>
    </div>
@endsection
