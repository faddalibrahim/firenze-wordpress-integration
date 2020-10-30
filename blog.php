<?php 
	
	/*database variables*/
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "ff";

	/*connect to database*/
	$conn = mysqli_connect($host, $username, $password, $db);

	/*check connections*/
	if(!$conn) echo "Connection Error".mysqli_connect_error();

 ?>


<?php 

	$months = array('Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sep','Oct','Nov','Dec');

	function getMonth($date){
		global $months;

		$publish_month = intval(explode("-",$date,3)[1]);

		return $months[$publish_month - 1];
	}

	function getDay($date){
		$publish_date_with_time = explode("-",$date,3)[2];

		$publish_day = explode(" ", $publish_date_with_time)[0];

		return $publish_day;
	}

	
	/*write query for all images*/
	$sql_posts = "SELECT * FROM wp_posts WHERE post_type = 'post' ORDER BY id DESC";
	$sql_attachments = "SELECT * FROM wp_posts WHERE post_mime_type LIKE '%image%' ORDER BY id DESC";
	// $sql = "SELECT * FROM wp_posts";

	/*make query and get results*/
	$result_posts = mysqli_query($conn, $sql_posts);
	$result_attachments = mysqli_query($conn, $sql_attachments);

	/*fetch resulting rows as an array*/
	$posts = mysqli_fetch_all($result_posts, MYSQLI_ASSOC);
	$attachments = mysqli_fetch_all($result_attachments, MYSQLI_ASSOC);

	/*freeing results from memory*/
	// mysqli_free_result($result);

	/*close connection to database*/
	// mysqli_close($conn);


 ?>

<!-- grabbing that respective attachmens of each blog post -->

 <?php 
 	

 	function getPostAttachments($arr){
 		global $id;
 		return $arr['post_parent'] == $id;
 	}


 ?>


 <!doctype html>
 <html lang="en">

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="icon" href="ff-stuff/img/fevicon.png" type="image/png">
 	<title>The Firenze foundation - Blog</title>

 	<link rel="stylesheet" href="ff-stuff/css/bootstrap.css">
 	<link rel="stylesheet" href="ff-stuff/css/animate.css">
 	<link rel="stylesheet" href="ff-stuff/css/icomoon.css">
 	<link rel="stylesheet" href="ff-stuff/vendors/linericon/style.css">
 	<link rel="stylesheet" href="ff-stuff/css/font-awesome.min.css">
 	<link rel="stylesheet" href="ff-stuff/vendors/lightbox/simpleLightbox.css">
 	<link rel="stylesheet" href="ff-stuff/vendors/nice-select/css/nice-select.css">

 	<link rel="stylesheet" href="ff-stuff/css/style.css">
 	<link rel="stylesheet" href="ff-stuff/css/themify-icons.css">
 	<link rel="stylesheet" href="ff-stuff/css/swiper.min.css">
 	<link rel="stylesheet" href="ff-stuff/owl-carousel/owl.theme.css">
 	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">

 </head>

 <body>

 

 	<!--================ Start Header Menu Area =================-->
 	<header class="header_area">
 		<div class="main_menu">
 			<div class="container">
 				<nav class="navbar navbar-expand-lg navbar-light">
 					<div class="container">
 						<!-- Brand and toggle get grouped for better mobile display -->
 						<a class="navbar-brand logo_h" href="index.html"
 							style="font-family: 'Baloo Thambi', sans-serif;font-weight:500; font-size: 1.3em;color: #fdbb00;"><img
 								src="ff-stuff/img/banner/fulllogo.png" style="width: 120px;"></a>
 						<button class="navbar-toggler" type="button" data-toggle="collapse"
 							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
 							aria-expanded="false" aria-label="Toggle navigation">
 							<span class="icon-bar"></span>
 							<span class="icon-bar"></span>
 							<span class="icon-bar"></span>
 						</button>
 						<!-- Collect the nav links, forms, and other content for toggling -->
 						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
 							<ul class="nav navbar-nav menu_nav ml-auto">
 								<li class="nav-item "><a class="nav-link" href="index.html">Home</a></li>
 								<li class="nav-item submenu dropdown">
 									<a href="about-us.html" class="nav-link dropdown-toggle" data-toggle="dropdown"
 										role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
 									<ul class="dropdown-menu">
 										<li class="nav-item"><a class="nav-link" href="about-us.html#whatwedo">Who We
 												Are</a></li>
 										<li class="nav-item"><a class="nav-link" href="about-us.html#mission">Our
 												Mission</a></li>
 										<li class="nav-item"><a class="nav-link" href="about-us.html#team">Meet the
 												team</a></li>
 										<li class="nav-item"><a class="nav-link"
 												href="about-us.html#ambassadors">Country Ambassadors</a></li>
 									</ul>
 								</li>
 								<li class="nav-item active"><a class="nav-link" href="projects.html">Our Work</a>
 								<li class="nav-item"><a class="nav-link" href="Get_involved.html">Get Involved</a>
 								<li class="nav-item"><a class="nav-link" href="news.html">Media Room</a>
 								<li class="nav-item"><a class="nav-link" href="donate.html">Donate</a>
 								<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
 							</ul>
 						</div>
 					</div>
 				</nav>
 			</div>
 		</div>
 	</header>

 	<div class="swiper-container hero-slider mh">
 		<div class="swiper-wrapper">
 			<div class="swiper-slide hero-content-wrap">
 				<img src="ff-stuff/img/banner/woodblog.jpg" alt="">
 				<div class="hero-content-overlay position-absolute w-100 h-100"></div>
 			</div>

 			<div class="swiper-slide hero-content-wrap">
 				<img src="ff-stuff/img/banner/woodblog2.jpg" alt="">
 				<div class="hero-content-overlay position-absolute w-100 h-100"></div>
 			</div>
 		</div>
 	</div>
 	<div style="width:100%;height:10px;background: url(ff-stuff/img/banner/Line.svg);background-size:cover;"></div>

 	<div>
 		<br><br><br><br>
 		<h2 class="mb-20 text-center" style="font-size: 3em;color: rgb(144,28,29);">
 			The Firenze WoodBlog
 		</h2>
 		<h3 class="wow fadeInLeft text-center">Social Impact | Rural Education | STEM in Africa </h3>
 		<br>
 		<div
 			style="width:15%;height:4px;margin-left:auto;margin-right:auto; background: url(ff-stuff/img/banner/Line.svg);background-size:cover;">
 		</div>
 		<br><br><br>


 		<!--================Blog Area =================-->
 		<section class="blog_area">
 			<div class="container">
 				<div class="row">
 					<div class="col-lg-8">
 						<div class="blog_left_sidebar">
 							<?php foreach($posts as $post ): ?>
	 							<article class="row blog_item">
	 								<div class="col-md-12">
	 									<div class="blog_post event_area">
	 										<div class="blogitem single_event">
	 											<figure>


	 												<?php
	 													$id = $post['ID'];


	 													$post_attachments = array_filter($attachments,"getPostAttachments");

	 													$featured_image = "";


	 													foreach ($post_attachments as $attachment) {
 															if(!stristr($post['post_content'],$attachment['guid'])){
 																$featured_image = $attachment['guid'];
 															}
	 													}


	 												 ?>




	 												<!-- <img src="ff-stuff/img/banner/firenze_libri.jpg" alt=""> -->
	 												<img src="<?php echo htmlspecialchars($featured_image)?>" alt="">
	 											</figure>
	 											<a href="#" class="blog_item_date">
	 												<h3><?php echo getDay($post['post_date']) ?></h3>
	 												<!-- <h4>Feb</h4> -->
	 												<h4><?php echo getMonth($post['post_date']) ?></h4>
	 											</a>
	 										</div>
	 										<div class="blog_details">
	 											<a href="blogtest.php?id=<?php echo htmlspecialchars($post['ID'])?>">
	 												<h2 style="text-transform: uppercase;">
	 													<?php echo htmlspecialchars($post['post_title']) ?>
	 												</h2>
	 											</a>
	 											<div
	 												style="width:20%;height:4px;background: url(ff-stuff/img/banner/Line.svg);background-size:cover;">
	 											</div><br>
	 											<div class="quotes">
	 												<p>
	 													<?php echo htmlspecialchars($post['post_excerpt'] ?? "no excerpt was found") ?>
	 												</p>
	 											</div><br>
	 											<p id="author">Gilbert Dery - Firenze Libri and Comics Team</p>
	 										</div>
	 									</div>
	 								</div>
	 							</article>
 							<?php endforeach ?>
 						</div>
 					</div>
 					<div class="col-lg-4 nomag">
 						<div class="blog_right_sidebar">
 							<aside class="single_sidebar_widget search_widget wow fadeInDown" data-wow-delay="0.3s">
 								<div class="input-group">
 									<input type="text" class="form-control" placeholder="Search Posts">
 									<span class="input-group-btn">
 										<button class="btn btn-default" type="button"><i
 												class="lnr lnr-magnifier"></i></button>
 									</span>
 								</div><!-- /input-group -->
 								<div class="br"></div>
 							</aside>
 							<aside class="single_sidebar_widget popular_post_widget wow fadeInDown"
 								data-wow-delay="0.6s">
 								<h3 class="widget_title">Popular Posts</h3>
 								<div class="media post_item">
 									<img class="img-fluid" width="100" src="ff-stuff/img/blog/b15.jpg" alt="post">
 									<div class="media-body">
 										<a href="blog5.html">
 											<h3>A light at the end of the tunnel</h3>
 										</a>
 									</div>
 								</div>
 								<br>
 								<div
 									style="width:100%;height:4px;background: url(ff-stuff/img/banner/Line.svg);background-size:cover;">
 								</div>
 								<br>
 								<div class="media post_item">
 									<img class="img-fluid" width="100" src="ff-stuff/img/blog/b13.jpg" alt="post">
 									<div class="media-body">
 										<a href="blog5.html">
 											<h3>Big changes start with small steps.. Everyday small steps!”</h3>
 										</a>
 									</div>
 								</div>
 								<br>
 								<div
 									style="width:100%;height:4px;background: url(ff-stuff/img/banner/Line.svg);background-size:cover;">
 								</div>
 								<br>
 								<div class="media post_item">
 									<img class="img-fluid" width="100" src="ff-stuff/img/blog/b2.jpg" alt="post">
 									<div class="media-body">
 										<a href="blog1.html">
 											<h3>Creating change with gems in freetown, sierra leone.</h3>
 										</a>
 									</div>
 								</div>
 								<br>
 								<div
 									style="width:100%;height:4px;background: url(ff-stuff/img/banner/Line.svg);background-size:cover;">
 								</div>
 								<br>
 								<div class="media post_item">
 									<img class="img-fluid" width="100" src="ff-stuff/img/blog/b6.jpg" alt="post">
 									<div class="media-body">
 										<a href="blog2.html">
 											<h3>Reinforcing the hope in the african youth!</h3>
 										</a>
 									</div>
 								</div>
 								<br>
 								<div
 									style="width:100%;height:4px;background: url(ff-stuff/img/banner/Line.svg);background-size:cover;">
 								</div>
 								<br><br>
 							</aside>
 							<aside class="single_sidebar_widget post_category_widget wow fadeInDown"
 								data-wow-delay="0.3s">
 								<h4 class="widget_title">Categories</h4>
 								<ul class="list cat-list">
 									<li>
 										<a class="d-flex justify-content-between">
 											<p>STEM</p>
 											<p></p>
 										</a>
 									</li>
 									<li>
 										<a class="d-flex justify-content-between">
 											<p>Rural & Refugee Education</p>
 											<p></p>
 										</a>
 									</li>
 									<li>
 										<a class="d-flex justify-content-between">
 											<p>Global Social Impact </p>
 											<p></p>
 										</a>
 									</li>
 									<li>
 										<a class="d-flex justify-content-between">
 											<p>Africa & Profiles</p>
 											<p></p>
 										</a>
 									</li>
 								</ul>
 								<div class="br"></div>
 							</aside>
 							<aside class="single_sidebar_widget popular_post_widget wow fadeInDown"
 								data-wow-delay="0.3s">
 								<h3 class="widget_title">Facebook</h3>
 								<a href="https://www.facebook.com/FirenzeGlobal/"><img class="img-fluid"
 										src="ff-stuff/img/blog/fb.jpg"></a>
 								<br>
 								<p class="text-center" style="color:black;">
 									Follow our facebook page to stay in touch
 								</p>
 								<ul class="list instafeed d-flex flex-wrap">
 									<div class="team_item1">
 										<div class="team_name">
 											<div class="social">
 												<a href="https://web.facebook.com/FirenzeGlobal/"><i
 														class="fa fa-facebook-square fa-5x"></i></a>
 											</div>
 										</div>
 									</div>
 								</ul>
 								<div class="br"></div>
 							</aside>
 							<aside class="single_sidebar_widget popular_post_widget wow fadeInDown"
 								data-wow-delay="0.3s">
 								<h3 class="widget_title">Instagram Feeds</h3>
 								<div class="blog-galery">
 									<li><a href="https://www.instagram.com/p/Byu1U4LFIOG/"
 											style="background:url(ff-stuff/img/banner/Melvina_Conton-Sierra_Leone.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
 										</a></li>
 									<li><a href="https://www.instagram.com/p/ByuzWL9lA3z/"
 											style="background: url(ff-stuff/img/banner/woodblog.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
 										</a></li>
 								</div>
 								<div class="blog-galery">
 									<li><a href="https://www.instagram.com/p/ByXwEellmo4/"
 											style="background: url(ff-stuff/img/banner/fteam1.jpg) no-repeat scroll center center; background-size: cover; height: 100px;">

 										</a></li>
 									<li><a href="https://www.instagram.com/p/ByXv3GFF0Ca/"
 											style="background: url(ff-stuff/img/banner/codedge.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
 										</a></li>
 								</div>
 								<div class="blog-galery">
 									<li><a href="https://www.instagram.com/p/ByXvlgPFBOT/"
 											style="background: url(ff-stuff/img/banner/project1.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
 										</a></li>
 									<li><a href="https://www.instagram.com/p/ByQSbJ-lMKi/"
 											style="background: url(ff-stuff/img/banner/vision.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
 										</a></li>
 								</div>
 								<ul class="list instafeed d-flex flex-wrap">
 									<div class="team_item1">
 										<div class="team_name">
 											<div class="social">
 												<a href="https://instagram.com/firenzeglobal?igshid=11m6nwpo27gn0"><i
 														class="fa fa-instagram fa-4x"></i></a>
 											</div>
 										</div>
 									</div>
 								</ul>
 								<div class="br"></div>
 							</aside>
 							<aside class="single_sidebar_widget ads_widget wow fadeInDown" data-wow-delay="0.3s">
 								<a href="#"><img class="img-fluid" src="ff-stuff/img/banner/country_amb1.jpg" alt=""></a>
 								<div class="br"></div>
 							</aside>

 							<aside class="single-sidebar-widget newsletter_widget wow fadeInDown" data-wow-delay="0.3s">
 								<h4 class="widget_title">Newsletter</h4>
 								<p style="color:black;">
 									Kindly subscribe to the Firenze Newsletter and stay update with the latest blog,
 									podcast and info on STEM education in Africa
 								</p>
 								<form class="form-group d-flex flex-row" id="subscribeForm1" name="subscribeForm1"
 									method="post" action="subscribe.php">
 									<div class="input-group">
 										<div class="input-group-prepend">
 											<div class="input-group-text"><i class="fa fa-envelope"
 													aria-hidden="true"></i></div>
 										</div>
 										<input type="text" name="email" id="email" class="form-control"
 											style="color: black;" id="inlineFormInputGroup" placeholder="Enter email"
 											onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
 									</div>
 									<input type="submit" value="Subscribe" class="bbtns"
 										style="font-size: 1em;padding:7px;line-height: 17px;">
 								</form>
 							</aside>

 						</div>
 					</div>
 				</div>

 				<!-- <nav class="blog-pagination justify-content-center d-flex">
 								<ul class="pagination">
 										<li class="page-item">
 												<a href="#" class="page-link" aria-label="Previous">
 														<span aria-hidden="true">
 																<span class="lnr lnr-chevron-left"></span>
 														</span>
 												</a>
 										</li>
 										<li class="page-item"><a href="#" class="page-link">01</a></li>
 										<li class="page-item active"><a href="#" class="page-link">02</a></li>
 										<li class="page-item"><a href="#" class="page-link">03</a></li>
 										<li class="page-item"><a href="#" class="page-link">04</a></li>
 										<li class="page-item"><a href="#" class="page-link">09</a></li>
 										<li class="page-item">
 												<a href="#" class="page-link" aria-label="Next">
 														<span aria-hidden="true">
 																<span class="lnr lnr-chevron-right"></span>
 														</span>
 												</a>
 										</li>
 								</ul>
 						</nav> -->
 			</div>
 	</div>
 	</section>
 	<!--================Blog Area =================-->
 	</div>
 	<!--================ Start CTA Area =================-->
 	<div class="cta-area section_gap overlay amb_sec"
 		style="background:url(ff-stuff/img/banner/homepage4.jpg);background-size: cover;">
 		<div class="container" style="background:rgb(0,0,0,0.4);">
 			<div class="row justify-content-center">
 				<div class="col-lg-12">
 					<br>
 					<h1 id="titleHd" style="color:white;">Subscribe for our newsletter</h1>
 					<div class="offset-lg-3 col-lg-6">
 						<form class="footer-newsletter" id="subscribeForm2" name="subscribeForm" method="post"
 							action="subscribe.php">
 							<input type="text" name="email" id="email" style="height:50px;"
 								class="form-control border-secondary" placeholder="Enter Email Address"
 								aria-label="Enter Email Address" aria-describedby="button-addon2">
 							<br>
 							<input type="submit" value="Subscribe" class="primary_btn yellow_btn rounded"
 								style="font-size: 1em;font-weight: 700;"><br><br>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!--================ End Story Area =================-->
 	<!--================ Start footer Area  =================-->
 	<footer>
 		<div class="footer-area">
 			<div class="container">
 				<div class="row section_gap">
 					<div class="col-lg-3 col-md-6 col-sm-6">
 						<div class="single-footer-widget tp_widgets">
 							<img class="img-fluid" src="ff-stuff/img/banner/fulllogo.png" width="70%" style="padding-top: 20px;">
 						</div>
 						<p class="text-center" style="color:#fdbb00; font-family: 'Baloo Thambi', sans-serif;">Est. 2019
 						</p>
 						<div class="single-footer-widget tp_widgets">
 							<div class="ml-40">
 								<p class="sm-head footer_title">
 									<span class="icon-map-signs"></span>
 									Ghana, West Africa
 								</p>

 								<p class="sm-head footer_title">
 									<span class="fa fa-phone"></span>
 									<a href="tel:+233508066747">+233 508 066 747</a>
 								</p>
 								<p class="sm-head footer_title">
 									<span class="fa fa-phone"></span>
 									<a href="tel:+233209544734">+233 209 544 734</a>
 								</p>


 								<p class="sm-head footer_title">
 									<span class="fa fa-envelope"></span>
 									<a href="mailto:info@firenze-foundation.org">info@firenze-foundation.org</a>
 								</p>
 							</div>
 						</div>
 					</div>
 					<div class="col-lg-2 col-md-6 col-sm-6">
 						<div class="single-footer-widget tp_widgets">
 							<h4 class="footer_title">Quick Links</h4>
 							<ul class="list baloo">
 								<li><a href="index.html" class="quicklinks">Home</a></li>
 								<li><a href="about-us.html" class="quicklinks">About Us</a></li>
 								<li><a href="projects.html" class="quicklinks">Our Work</a></li>
 								<li><a href="Get_involved.html" class="quicklinks">Get Involved</a></li>
 								<li><a href="news.html" class="quicklinks">Media Room</a></li>
 								<li><a href="donate.html" class="quicklinks">Donate</a></li>
 								<li><a href="contact.html" class="quicklinks">Contact</a></li>
 							</ul>
 						</div>
 					</div>
 					<div class="col-lg-4 col-md-6 col-sm-6">
 						<div class="single-footer-widget tp_widgets">
 							<h4 class="footer_title">Gallery</h4>
 							<div>
 								<ul class="footer-galery">
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/country_amb2.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/Prex.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/homepage3.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/homepage4.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/Melvina_Conton-Sierra_Leone.jpg"
 												class="img-fluid" alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/project1.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/project2.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/codedge.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/mentorship1.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/banner/woodblog.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/voluteer/about3.jpg" class="img-fluid"
 												alt=""></a></li>
 									<li><a href="gallery.html"><img src="ff-stuff/img/voluteer/Lisa1.jpg" class="img-fluid"
 												alt=""></a></li>
 								</ul>
 							</div>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-6 col-sm-6">
 						<div class="single-footer-widget instafeed">
 							<h4 class="footer_title"> Subscribe to Newsletter</h6>
 								<form class="footer-newsletter" id="subscribeForm" name="subscribeForm" method="post"
 									action="subscribe.php">
 									<input type="text" name="email" id="email" class="form-control border-secondary"
 										placeholder="Enter Email" aria-label="Enter Email"
 										aria-describedby="button-addon2">
 									<br>
 									<input type="submit" value="Subscribe" class="modelbtn">

 								</form>
 								<br>
 								<ul class="list instafeed d-flex flex-wrap">
 									<div class="team_item1">
 										<div class="team_name">
 											<div class="social">
 												<a href="https://web.facebook.com/FirenzeGlobal/"><i
 														class="fa fa-facebook fa-4x"></i></a>
 												<a href="https://twitter.com/FirenzeGlobal"><i
 														class="fa fa-twitter fa-4x"></i></a>
 												<a href="https://www.linkedin.com/company/the-firenze-foundation"><i
 														class="fa fa-linkedin fa-4x"></i></a>
 												<a href="https://instagram.com/firenzeglobal?igshid=11m6nwpo27gn0"><i
 														class="fa fa-instagram fa-4x"></i></a>
 											</div>
 										</div>
 									</div>

 								</ul><br>
 								<p class="text-center privacy" style="color:white;"> <a href="site_policy.html">Site
 										Policy</a> | <a href="privacy_policy.html">Privacy Policy </a></p>

 						</div>
 					</div>

 				</div>
 			</div>
 		</div>
 		<div style="width:100%;height:6px; background: url(ff-stuff/img/banner/Line.svg);background-size:cover"></div>
 		<div class="footer-bottom">
 			<div class="container">
 				<div class="row d-flex">
 					<p class="col-lg-12 footer-text text-center">
 						All Rights Reserved. Firenze Foundation Copyright &copy;
 						<script>document.write(new Date().getFullYear());</script>
 					</p>
 				</div>
 			</div>
 		</div>
 	</footer>
 	<!--================ End footer Area  =================-->

 	<div id="successs" class="modal modal-message fade" role="dialog">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<i class="fa fa-close"></i>
 					</button>
 					<h2>Thank you for subscribing!</h2>
 					<div
 						style="width:15%;height:6px;margin-left: auto;margin-right: auto; background: url(ff-stuff/img/banner/Line.svg);background-size:cover">
 					</div><br>
 					<p></p>
 				</div>
 			</div>
 		</div>
 	</div>

 	<!-- Modals error -->
 	<div id="errorr" class="modal modal-message fade" role="dialog">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<i class="fa fa-close"></i>
 					</button>
 					<h2>Sorry!</h2>
 					<div
 						style="width:15%;height:6px;margin-left: auto;margin-right: auto; background: url(ff-stuff/img/banner/Line.svg);background-size:cover">
 					</div><br>
 					<p> Something went wrong </p>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- Optional JavaScript -->
 	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
 	<script src="js/jquery-3.2.1.min.js"></script>
 	<script src="js/popper.js"></script>
 	<script src="js/wow.min.js"></script>
 	<script>
 		new WOW().init();
 	</script>
 	<script src="js/bootstrap.min.js"></script>
 	<script src="js/stellar.js"></script>
 	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
 	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
 	<script src="js/jquery.ajaxchimp.min.js"></script>
 	<script src="js/mail-script.js"></script>
 	<!--gmaps Js-->
 	<script src="js/jquery.form.js"></script>
 	<script src="js/jquery.validate.min.js"></script>
 	<script src="js/theme.js"></script>
 	<script src="js/subscribe.js"></script>
 	<script type='text/javascript' src='js/swiper.min.js'></script>
 	<script type="text/javascript">
 		jQuery(document).ready(function ($) {
 			var mySwiper = new Swiper('.hero-slider', {
 				slidesPerView: 1,
 				spaceBetween: 0,
 				loop: true,
 				autoplay: true,
 				autoplayTimeout: 6000,
 				speed: 2000,
 				pagination: {
 					el: '.swiper-pagination',
 					clickable: true,
 					renderBullet: function (index, className) {
 						return '<span class="' + className + '">0' + (index + 1) + '</span>';
 					},
 				},
 				navigation: {
 					nextEl: '.swiper-button-next',
 					prevEl: '.swiper-button-prev'
 				}
 			});

 		})
 	</script>
 </body>

 </html>