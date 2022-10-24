


<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE html>
<html>
<head>
    <title>سایت فروشگاهی</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- //for-mobile-apps -->
    <link href="{{asset('master/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('master/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('master/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{asset('master/js/jquery-1.11.1.min.js')}}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('master/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('master/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>

<!-- header -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<div class="agileits_header">
    <div class="w3l_offers">
        <a href="products.html">!پیشنهاد های ویژه امروز</a>
    </div>
    <div class="w3l_search">
        <form action="#" method="post">
            <input type="text" name="Product" value="
جستجو محصول ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header" onclick="showlist()">
        <div style="cursor: pointer;">
            <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><i class="badge badge-notify my-cart-badge" ></i></span>

        </div>
    </div>
    <div class="w3l_header_left">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="login.html">
                                    ورود</a></li>
                            <li><a href="login.html">
                                    ثبت نام</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="w3l_header_left1">
        <h2><a href="mail.html">تماس با ما</a></h2>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- script-for sticky-nav -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<script>
    $(document).ready(function() {
        var navoffeset=$(".agileits_header").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_right">
            <h1><a href="index.html"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3ls_logo_products_right1">
            <ul class="special_items">
                <li><a href="events.html">رویدادها</a><i>/</i></li>
                <li><a href="about.html">درباره ما</a><i>/</i></li>
                <li><a href="products.html">
                        بهترین تخفیف</a><i>/</i></li>
                <li><a href="services.html">خدمات</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_right1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="modal fade in" id="my-cart-modal" style="display: none"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="false">
<div class="modal-dialog" role="document">
    <div class="modal-content"><div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
                <span class="glyphicon glyphicon-shopping-cart"></span> My Cart
            </h4>
        </div>
        <div class="modal-body">
            <table class="table table-hover table-responsive" id="my-cart-table">
                <tbody class="addProduct">

{{dump($baskets)}}
                <tr title="" id="product-cart-product14" data-price="">
                    <td class="text-center" style="width: 30px;">
                        <img width="30px" height="30px" src="/storage/product/1664742958-53.png">
                    </td>
                    <td>محصول دو</td>
                    <td title="Unit Price">25000</td>
                    <td title="Quantity">
                        <input type="number" min="1" style="width: 70px;" class="my-product-quantity" value="1">
                    </td>
                    <td title="Total" class="my-product-total">25000</td>
                    <td title="Remove from Cart" class="text-center" style="width: 30px;">
                        <a href="javascript:void(0);" class="btn btn-xs btn-danger my-product-remove">X</a>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td></td>
                    <td><strong id="my-cart-grand-total">$36.980000000000004</strong></td>
                    <td></td>
                </tr>
                <tr style="color: red">
                    <td></td>
                    <td><strong>Total (including discount)</strong></td>
                    <td></td>
                    <td></td>
                    <td><strong id="my-cart-discount-price">$36.980000000000004</strong></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="basket-close" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

</div>

@yield('content')
<div class="newsletter">
    <div class="container">
        <div class="w3agile_newsletter_right">
            <h3>برای دریافت خبرنامه ما ثبت نام کنید</h3>
        </div>
        <div class="w3agile_newsletter_left">
            <form action="#" method="post">
                <input type="email" name="ایمیل" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="مشترک در حال حاضر">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- footer -->
<div class="footer">
    <div class="container" dir=ltr>
        <div class="col-md-3 w3_footer_grid">
            <h3>اطلاعات</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="events.html">رویدادها</a></li>
                <li><a href="about.html">درباره ما</a></li>
                <li><a href="products.html">بهترین تخفیف</a></li>
                <li><a href="services.html">خدمات</a></li>
                <li><a href="short-codes.html">
                        کدهای کوتاه</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>اطلاعات</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="faqs.html">
                        پرسش و پاسخ</a></li>
                <li><a href="privacy.html">
                        سیاست حفظ حریم خصوصی</a></li>
                <li><a href="privacy.html">
                        شرایط استفاده</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>
                چه در فروشگاهی</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="pet.html">
                        مواد غذایی</a></li>
                <li><a href="frozen.html">اسنک منجمد</a></li>
                <li><a href="kitchen.html">اشپزخانه</a></li>
                <li><a href="products.html">
                        مواد غذایی مارک دار</a></li>
                <li><a href="household.html">خانواده</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>
                پست توییتر</h3>
            <ul class="w3_footer_grid_list1">
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 روز پیش</i><span>

لورم ایپسوم<a href="#">

لورم ایپسوم یا طرح‌نما</a>
						لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
						<a href="#">

لورم ایپسوم یا طرح‌نما</a> طراحی گرافیک</span></li>
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 روز پیش</i><span>

لورم ایپسوم<a href="#">

لورم ایپسوم یا طرح‌نما</a>
						لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
						<a href="#">

لورم ایپسوم یا طرح‌نما</a> طراحی گرافیک</span></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="agile_footer_grids">
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h4>
                        100٪ پرداخت امن</h4>
                    <img src="images/card.png" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h5>ارتباط با ما</h5>
                    <ul class="agileits_social_icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="wthree_footer_copy">
            <p>کلیه حقوق مادی و معنوی برای مجموعه برنامه نویسان محفوظ می باشد<a href="http://barnamenevisan.org/">برنامه نویسان</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('master/js/bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>

<!-- //here ends scrolling icon -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<script>
    function showlist()
    {
        $('#my-cart-modal').css("display","block");
        $('#basket-close').click(function (){
            $('#my-cart-modal').css("display","none");
        })

    }


  $(function () {
        $.ajax({
            type: "get",
            url: "{{route('basket.index')}}",
            data:{
                _token:"{{csrf_token()}}",

            },
            success:function (result){

            }

        })
    });

</script>
@yield('scripts')
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>
