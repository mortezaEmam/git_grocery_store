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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</head>
	
<body>
<!-- header -->
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
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
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
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">صفحه اصلی</a><span>|</span></li>
				<li>نوشیدنی ها</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
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
						<li><a href="products.html">مواد غذایی مارک دار</a></li>
						<li><a href="household.html">
لوازم منزل</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
سبزیجات و میوه ها<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vegetables.html">
سبزیجات</a></li>
										<li><a href="vegetables.html">
میوه ها</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="kitchen.html">اشپزخانه</a></li>
						<li><a href="short-codes.html">نمونه کدها</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
نوشیدنی ها<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="drinks.html">
نوشیدنی بدون الکل</a></li>
										<li><a href="drinks.html">آب میوه</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="pet.html">مواد غذایی حیوان خانگی</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">غذای یخ زده<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="frozen.html">
اسنک منجمد</a></li>
										<li><a href="frozen.html">عذای گیاهخوار</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="bread.html">
نان و نانوایی</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
				 <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
			</nav>
		</div>
		<div class="w3l_banner_nav_left">
			<div class="w3l_banner_nav_left_banner7">
				<h3>
بهترین تخفیف برای محصولات جدید<span class="blink_me"></span></h3>
			</div>
			<div class="w3ls_w3l_banner_nav_left_grid w3ls_w3l_banner_nav_left_grid_sub">
				<h3>نوشیدنی ها</h3>
				<div class="w3ls_w3l_banner_nav_left_grid1">
					<h6>نوشیدنی بدون الکل</h6>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/49.png" alt=" " class="img-responsive" /></a>
											<p>نوشابه نارنجی (مو 250ml)</p>
											<h4>$5.00 <span>$7.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="49" data-name="Orange soft drink" data-summary="summary 49" data-price="5.00" data-quantity="1" data-image="images/49.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/14.png" alt=" " class="img-responsive" /></a>
											<p>

لورم ایپسوم یا طرح‌نما</p>
											<h4>$4.00 <span>$5.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="14" data-name="Prune juice - sunsweet" data-summary="summary 14" data-price="4.00" data-quantity="1" data-image="images/14.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/15.png" alt=" " class="img-responsive" /></a>
											<p>کوکا کولا (330ml)</p>
											<h4>$3.00 <span>$5.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="15" data-name="Coco cola zero can" data-summary="summary 15" data-price="3.00" data-quantity="1" data-image="images/15.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/16.png" alt=" " class="img-responsive" /></a>
											<p>بطری آب</p>
											<h4>$3.00 <span>$4.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="16" data-name="Sprite bottle" data-summary="summary 16" data-price="3.00" data-quantity="1" data-image="images/16.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
				<div class="w3ls_w3l_banner_nav_left_grid1">
					<h6>
آب میوه</h6>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/13.png" alt=" " class="img-responsive" /></a>
											<p>
آب میوه مخلوط (1 RTL)</p>
											<h4>$3.00 <span>$4.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="13" data-name="Mixed fruit juice" data-summary="summary 13" data-price="3.00" data-quantity="1" data-image="images/13.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/50.png" alt=" " class="img-responsive" /></a>
											<p>آب Aamras به (مو 250ml)</p>
											<h4>$4.00 <span>$5.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="50" data-name="Paper boat aamras juice" data-summary="summary 50" data-price="4.00" data-quantity="1" data-image="images/50.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/51.png" alt=" " class="img-responsive" /></a>
											<p>آب نارگیل (از 1000ml)</p>
											<h4>$6.00 <span>$8.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="51" data-name="Tender coconut water" data-summary="summary 51" data-price="6.00" data-quantity="1" data-image="images/51.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/52.png" alt=" " class="img-responsive" /></a>
											<p>
سرس آب پرتقال (1 RTL)</p>
											<h4>$6.00 <span>$8.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="52" data-name="Ceres orange juice" data-summary="summary 52" data-price="6.00" data-quantity="1" data-image="images/52.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls_w3l_banner_nav_left_grid1">
					<h6>
نوشیدنی های انرژی زا</h6>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/53.png" alt=" " class="img-responsive" /></a>
											<p>لورم ایپسوم متن ساختگی</p>
											<h4>$10.00 <span>$12.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="53" data-name="Dabur glucose D" data-summary="summary 53" data-price="10.00" data-quantity="1" data-image="images/53.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/54.png" alt=" " class="img-responsive" /></a>
											<p>
مخلوط طعم لیمو (50 گرم)</p>
											<h4>$8.00 <span>$10.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="54" data-name="Mix lemon flavour" data-summary="summary 54" data-price="8.00" data-quantity="1" data-image="images/54.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/55.png" alt=" " class="img-responsive" /></a>
											<p>
آب (250 RTL)</p>
											<h4>$6.00 <span>$7.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="55" data-name="Schweppes tonic water" data-summary="summary 55" data-price="6.00" data-quantity="1" data-image="images/55.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
					<div class="col-md-3 w3ls_w3l_banner_right">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/56.png" alt=" " class="img-responsive" /></a>
											<p>نوشیدنی انرژی ردبول (مو 250ml)</p>
											<h4>$7.00 <span>$9.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="56" data-name="Red bull energy drink" data-summary="summary 56" data-price="7.00" data-quantity="1" data-image="images/56.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
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
<!-- footer -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
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
<!-- Bootstrap Core JavaScript -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<script src="js/bootstrap.min.js"></script>
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
<script type="text/javascript" id="snipcart" src="js/snipcart.js" data-api-key="ZGQxNzVjZTItOWRmNS00YjJhLTlmNGUtMDE4NjdiY2RmZGNj"></script>
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
<script type='text/javascript' src="js/jquery.mycart.js"></script>
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
