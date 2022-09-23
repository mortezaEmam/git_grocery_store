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
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
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
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">صفحه اصلی</a><span>|</span></li>
				<li>غذای منجمد</li>
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
			<div class="w3l_banner_nav_left_banner10">
				<h3>
بهترین تخفیف برای محصولات جدید<span class="blink_me"></span></h3>
			</div>
			<div class="w3l_banner_nav_left_banner3_btm">
				<div class="col-md-4 w3l_banner_nav_left_banner3_btml">
					<div class="view view-tenth">
						<img src="images/24.jpg" alt=" " class="img-responsive">
						<div class="mask">
							<h4>خواربار فروشی</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
					</div>
					<h4>
گوشت منجمد</h4>
					<ol>
						<li>لورم ایپسوم متن ساختگی با تولید سادگی </li>
						<li>

لورم ایپسوم یا طرح‌نما</li>
						<li>لورم ایپسوم متن ساختگی با تولید سادگی </li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_left_banner3_btml">
					<div class="view view-tenth">
						<img src="images/29.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>خواربار فروشی</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
					</div>
					<h4>
شکلات چیپس منجمد</h4>
					<ol>
						<li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
						<li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
						<li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_left_banner3_btml">
					<div class="view view-tenth">
						<img src="images/30.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>خواربار فروشی</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
					</div>
					<h4>سویا منجمد</h4>
					<ol>
						<li>لورم ایپسوم متن ساختگی</li>
						<li>لورم ایپسوم متن ساختگی</li>
						<li>لورم ایپسوم متن ساختگی</li>
					</ol>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_w3l_banner_nav_left_grid w3ls_w3l_banner_nav_left_grid_veg">
				<h3 class="w3l_fruit">غذای منجمد</h3>
				<div class="w3ls_w3l_banner_nav_left_grid1 w3ls_w3l_banner_nav_left_grid1_veg">
					<div class="col-md-3 w3ls_w3l_banner_right w3ls_w3l_banner_right_asdfdfd">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive"></div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/64.png" alt=" " class="img-responsive" /></a>
											<p>فلفل کالباس (250 گرم)</p>
											<h4>$10.00 <span>$12.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="64" data-name="Chicken pepper salami" data-summary="summary 64" data-price="10.00" data-quantity="1" data-image="images/64.png">اضافه کردن به سبد</button>
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
											<a href="single.html"><img src="images/65.png" alt=" " class="img-responsive" /></a>
											<p>نخود سبز (500gm)</p>
											<h4>$9.00 <span>$11.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="65" data-name="Sumeru green pees" data-summary="summary 65" data-price="9.00" data-quantity="1" data-image="images/65.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right w3ls_w3l_banner_right_asd">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/66.png" alt=" " class="img-responsive" /></a>
											<p>مرغ (300gm)</p>
											<h4>$6.00 <span>$8.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="66" data-name="Tikka chicken" data-summary="summary 66" data-price="6.00" data-quantity="1" data-image="images/66.png">اضافه کردن به سبد</button>
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
											<a href="single.html"><img src="images/67.png" alt=" " class="img-responsive" /></a>
											<p>مخلوط سبزیجات (500gm)</p>
											<h4>$6.00 <span>$7.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="67" data-name="Frozen mixed vegetables" data-summary="summary 67" data-price="6.00" data-quantity="1" data-image="images/67.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls_w3l_banner_nav_left_grid1 w3ls_w3l_banner_nav_left_grid1_veg">
					<div class="col-md-3 w3ls_w3l_banner_right w3ls_w3l_banner_right_asdfdfd">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/68.png" alt=" " class="img-responsive" /></a>
											<p> انبه (800 گرم)</p>
											<h4>$9.00 <span>$11.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="68" data-name="Mango pulp" data-summary="summary 68" data-price="9.00" data-quantity="1" data-image="images/68.png">اضافه کردن به سبد</button>
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
											<a href="single.html"><img src="images/69.png" alt=" " class="img-responsive" /></a>
											<p> انبه (800 گرم)</p>
											<h4>$5.00 <span>$8.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="69" data-name="Kesar mango pulp" data-summary="summary 69" data-price="5.00" data-quantity="1" data-image="images/69.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right w3ls_w3l_banner_right_asd">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/70.png" alt=" " class="img-responsive" /></a>
											<p>
ذرت منجمد شیرین (250 گرم)</p>
											<h4>$6.00 <span>$8.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="70" data-name="Frozen sweet corn" data-summary="summary 70" data-price="6.00" data-quantity="1" data-image="images/70.png">اضافه کردن به سبد</button>
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
											<a href="single.html"><img src="images/71.png" alt=" " class="img-responsive" /></a>
											<p>قطعات مرغ (1KG)</p>
											<h4>$4.00 <span>$6.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="71" data-name="Venkys chicken nuggets" data-summary="summary 71" data-price="4.00" data-quantity="1" data-image="images/71.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls_w3l_banner_nav_left_grid1 w3ls_w3l_banner_nav_left_grid1_veg">
					<div class="col-md-3 w3ls_w3l_banner_right w3ls_w3l_banner_right_asdfdfd">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="agile_top_brand_right_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/72.png" alt=" " class="img-responsive" /></a>
											<p> سیر (400 گرم)</p>
											<h4>$5.00 <span>$7.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="72" data-name="Chicken garlic fingers" data-summary="summary 72" data-price="5.00" data-quantity="1" data-image="images/72.png">اضافه کردن به سبد</button>
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
											<a href="single.html"><img src="images/73.png" alt=" " class="img-responsive" /></a>
											<p>گرفتن ماهی (200gm)</p>
											<h4>$8.00 <span>$10.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="73" data-name="Fresh catch fish finger" data-summary="summary 73" data-price="8.00" data-quantity="1" data-image="images/73.png">اضافه کردن به سبد</button>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_right w3ls_w3l_banner_right_asd">
						<div class="hover14 column">
						<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_right_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/74.png" alt=" " class="img-responsive" /></a>
											<p>مرغ sumeru (گروه 500ml)</p>
											<h4>$11.00 <span>$15.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="74" data-name="Sumeru chicken fingers" data-summary="summary 74" data-price="11.00" data-quantity="1" data-image="images/74.png">اضافه کردن به سبد</button>
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
											<a href="single.html"><img src="images/75.png" alt=" " class="img-responsive" /></a>
											<p>
انگشتان گیاهی (400 گرم)</p>
											<h4>$7.00 <span>$9.00</span></h4>
										</div>
										<div class="snipcart-details">
											<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="75" data-name="Veggie fingers" data-summary="summary 75" data-price="7.00" data-quantity="1" data-image="images/75.png">اضافه کردن به سبد</button>
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
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- Bootstrap Core JavaScript -->
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
