@extends('layouts.master')
@section('content')
    <div class="banner">
        <div class="w3l_banner_nav_right">
            <nav class="navbar nav_bottom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">تعویض ناوبری</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">

            @foreach($categories as $category)
                @if($category->parent_id==0)
                    <li class="dropdown mega-dropdown active">
                        <a href="{{route('category.show',['category'=>$category->id])}}" class="dropdown-toggle" >{{$category->title}}<span class="caret"></span></a>
                        @endif
                        @foreach($categories as $sub)
                            @if($sub->parent_id==$category->id)
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">

                                        <ul>
                                            <li><a href="{{route('category.show',['category'=>$sub->id])}}">{{$sub->title}}</a></li>
                                        </ul>

                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </li>
                    @endforeach
        </ul>
    </div><!-- /.navbar-collapse -->
    </nav>
    </div>
    <div class="w3l_banner_nav_left">
        <section class="slider">
            <div class="flexslider" dir=ltr>
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_left_banner">
                            <h3>درست کردن<span>غذای</span>تند</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">
                                    فروشگاه در حال حاضر</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_left_banner1">
                            <h3>درست کردن<span>غذای</span>تند</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">
                                    فروشگاه در حال حاضر</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_left_banner2">
                            <h3>تا<i>50%</i> off.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">
                                    فروشگاه در حال حاضر</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="{{asset('master/css/flexslider.css')}}" type="text/css" media="screen" property="" />
        <script defer src="{{asset('master/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_right_grid_sub">
        </div>
        <div class="wthree_banner_bottom_right_grid_sub1">
            <div class="col-md-4 wthree_banner_bottom_right">
                <div class="wthree_banner_bottom_right_grid">
                    <img src="images/4.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_bottom_right_grid_pos">
                        <h4>
                            ارائه تخفیف<span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_right">
                <div class="wthree_banner_bottom_right_grid">
                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos">
                        <h3>معرفی<span>
بهترین فروشگاه</span>برای<i>مواد غذایی</i></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_right">
                <div class="wthree_banner_bottom_right_grid">
                    <img src="images/6.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos1">
                        <h3>صرفه جویی<span>تا حد</span> $10</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="top-brands">
        <div class="container">
            <h3>محصولات روز</h3>
            <div class="agile_top_brands_grids">


                @foreach($products as $product)
                    @include('layouts.cart-product')
                @endforeach

                    <div class="clearfix"></div>
                    <span class="text-center" style="background-color: blue;margin: 10px;" id="message"></span>
            </div>
        </div>
    </div>

    <div class="fresh-vegetables">
        <div class="container">
            <h3>محصولات بالا</h3>
            <div class="w3l_fresh_vegetables_grids">
                <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_right">
                    <div class="w3l_fresh_vegetables_grid2">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">همه برندها</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">
                                    سبزیجات</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">میوه ها</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">آب میوه</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">مواد غذایی </a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">نان و نانوایی</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">
                                    تصفیه</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">
                                    ادویه ها</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">میوه های خشک</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">محصولات لبنی</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 w3l_fresh_vegetables_grid_left">
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="images/8.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <div class="w3l_fresh_vegetables_grid1_rel">
                                <img src="images/7.jpg" alt=" " class="img-responsive" />
                                <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                    <div class="more m1">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">
                                            فروشگاه در حال حاضر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="images/10.jpg" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                <h5>پیشنهادهای ویژه</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="images/9.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="images/11.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="agileinfo_move_text">
                        <div class="agileinfo_marquee">
                            <h4>گرفتن<span class="blink_me">25% off</span> در مرتبه اول و همچنین کوپن هدیه گرفتن</h4>
                        </div>
                        <div class="agileinfo_breaking_news">
                            <span> </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    $('#cart_count').click(function (){
        console.log('y');
    })

</script>
@endsection
