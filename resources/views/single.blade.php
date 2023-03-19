@extends('layouts.master')


@section('content')
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="post-single">

                    <div class="post-title-single"><h1>{{$product->title}}</h1>
                        <div class="clearfix"></div>
                        <div class="entry-meta">
                            <div class="view">
                                دسته بندی :{{$product->category->title}}
                                <ul class="post-categories">
                                    <li><a href="" rel="category tag"></a></li>
                                </ul>

                            </div>

                            <div class="view"><i class="fa fa-comment"></i>
                                منتشر شده در :{{$product->created_at}}
                            </div>

                        </div>

                    </div>


                    <div class="clearfix"><img src="{{getUrlImage($product)}}" style="width:300px; height: auto" class="attachment-medium size-medium wp-post-image" alt=""></div>
                    <div class="thumb-single-product">

                    </div>


                    <hr>
                    <br>
                    <lable>توضیح محصول:<br></lable>
                    <p>{{  $product->description}}</p>

                    <div class="post-txt-single td-content ">



                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <table class="table border-success col-md-4">
                    @foreach($product->descriptions as $quantity)
                        <tr class="border table-bordered"><td>{{$quantity->title}}</td><td>{{$quantity->icon}}</td></tr>
                    @endforeach
                </table>

            </div>

        </div>
    </div>

    {{--            <div class="box-comment">--}}

    {{--               @if($comments!==null)--}}
    {{--                   @foreach($comments as $comment)--}}


    {{--                       @if($comment->parent_id==0)--}}
    {{--                           @include('layouts.formShowComment',['comment'=>$comment])--}}

    {{--                            @endif--}}

    {{--                       @foreach($comments as $subcomment )--}}

    {{--                           @if($subcomment->parent_id==$comment->id)--}}
    {{--                                   @include('layouts.formShowComment',['comment'=>$subcomment])--}}

    {{--                                @endif--}}
    {{--                            @endforeach--}}
    {{--                        @endforeach--}}
    {{--                    @endif--}}
    {{--                <div class="clearfix"></div>--}}
    {{--                <br>--}}
    {{--                <br>--}}

    {{--                   @auth()--}}
    {{--                       <h3>نظر خود را در رابطه با این مقاله وارد کنید</h3>--}}
    {{--                       <div >--}}
    {{--                           <form action="{{route('comment.store',0)}}" method="post">--}}
    {{--                               @csrf--}}

    {{--                               <span>متن نظر شما</span>--}}
    {{--                               <textarea name="body"></textarea>--}}

    {{--                               <input type="hidden" name="post_id" value="{{$comment->post_id}}">--}}
    {{--                               <input type="hidden" name="comment_id" value="0">--}}
    {{--                               <input type="submit" class="btn btn-success" value="ثبت نظر">--}}
    {{--                               <button type="reset" id="reset" class="btn btn-danger">لغو</button>--}}
    {{--                           </form>--}}
    {{--                       </div>--}}
    {{--                   @else--}}
    {{--                       <h3>برای ثبت نظر ابتدا باید--}}
    {{--                           <a class="btn btn-warning" href="{{route('login')}}">وارد شوید</a>--}}
    {{--                           یا--}}
    {{--                           <a class="btn btn-primary" href="{{route('register')}}"> ثبت نام کنید </a>--}}
    {{--                           کنید--}}
    {{--                       </h3>--}}

    {{--                   @endif--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    {{--<br>--}}
    {{--<br>--}}

@endsection
@section('scripts')
    {{--    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>--}}
    {{--    <script>--}}

    {{--        $(document).ready(function (){--}}
    {{--            $("#comment>button").click(function (){--}}
    {{--                var $id=$(this).attr("data-id");--}}
    {{--                $("#"+$id).css("display","block");--}}

    {{--            });--}}
    {{--            $("div>form>input[type=reset]").click(function (){--}}
    {{--                var $id=$(this).attr("data-reset");--}}
    {{--                $("#"+$id).css("display","none");--}}
    {{--            });--}}
    {{--            $("div>form>#reset").click(function (){--}}
    {{--                $("div>form>textarea").clean();--}}
    {{--            })--}}


    {{--        });--}}
    {{--    </script>--}}
@endsection
