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
    <div class="product_list_header">
        <div style="cursor: pointer;">
            <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><i class="badge badge-notify my-cart-badge"></i></span>
        </div>
    </div>
    <div class="w3l_header_left">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="{{route('user.login')}}">
                                    ورود</a></li>
                            <li><a href="{{route('user.register')}}">
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
                @auth
                <li><a href="@if(@Auth()->user()->hasRole('admin')) admin/ @else{{route('home')}}@endauth">ورود به ناحیه کاربری</a><i>/</i></li>
                @endauth
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
<!-- //header -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- banner -->

@yield('content')


<!-- //fresh-vegetables -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- newsletter -->
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
                    <img src="{{asset('master/images/card.png')}}" alt=" " class="img-responsive" />
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
<script type='text/javascript' src="{{asset('master/js/jquery.mycart.js')}}"></script>
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function($addTocartBtn){
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({

            }, 500 , "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function(){
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart){
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function(){
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>


