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


	if(isset($_GET['id'])){
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		/*writing query for a single item*/
		$sql = "SELECT * FROM wp_posts WHERE id = $id";

		/*getting query reults*/
		$result = mysqli_query($conn, $sql);

		/*fetching results in array format*/
		$post = mysqli_fetch_assoc($result);

		/*freeing results from memory*/
		// mysqli_free_result($result);

		/*close connection to database*/
		// mysqli_close($conn);

		// print_r($image);
	}


 ?>




<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="	ff-stuff/img/fevicon.png" type="image/png">
        <title>The Firenze foundation - Blog Detail</title>

		<link rel="stylesheet" href="ff-stuff/css/bootstrap.css">
		<link rel="stylesheet" href="ff-stuff/css/swiper.min.css">
		<link rel="stylesheet" href="ff-stuff/css/animate.css">
        <link rel="stylesheet" href="ff-stuff/vendors/linericon/style.css">
        <link rel="stylesheet" href="ff-stuff/css/font-awesome.min.css">
        <link rel="stylesheet" href="ff-stuff/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="ff-stuff/vendors/nice-select/css/nice-select.css">

        <link rel="stylesheet" href="ff-stuff/css/style.css">
		<link rel="stylesheet" href="ff-stuff/css/responsive.css">
		<link rel="stylesheet" href="ff-stuff/css/icomoon.css">
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
							<a class="navbar-brand logo_h" href="index.html" style="font-family: 'Baloo Thambi', sans-serif;font-weight:500; font-size: 1.3em;color: #fdbb00;"><img src="	ff-stuff/img/banner/fulllogo.png" style="width: 120px;"></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								<ul class="nav navbar-nav menu_nav ml-auto">
									<li class="nav-item "><a class="nav-link" href="index.html">Home</a></li> 
									<li class="nav-item submenu dropdown">
										<a href="about-us.html" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
										<ul class="dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="about-us.html#whatwedo">Who We Are</a></li>
											<li class="nav-item"><a class="nav-link" href="about-us.html#mission">Our Mission</a></li>
											<li class="nav-item"><a class="nav-link" href="about-us.html#team">Meet the team</a></li>
                                            <li class="nav-item"><a class="nav-link" href="about-us.html#ambassadors">Country Ambassadors</a></li>
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
	<!--================ End Header Menu Area =================-->
	
	<!--================ Home Banner Area =================-->
	<div class="swiper-container hero-slider mh">
		<div class="swiper-wrapper">
			<div class="swiper-slide hero-content-wrap">
				<img src="	ff-stuff/img/banner/homepage4.jpg" alt="">

				<div class="hero-content-overlay darkbac position-absolute w-100 h-100">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col-12 col-lg-12 d-flex flex-column justify-content-center align-items-start">
								<header class="entry-header text-center entryB">
									<h1>The Firenze Woodblog</h1>
								</header>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide hero-content-wrap">
				<img src="	ff-stuff/img/banner/homepage4.jpg" alt="">

				<div class="hero-content-overlay darkbac position-absolute w-100 h-100">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col-12 col-lg-12 d-flex flex-column justify-content-center align-items-start">
								<header class="entry-header text-center entryB">
									<h1>The Firenze Woodblog</h1>
								</header>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				  		
	</div>
    <div style="width:100%;height:10px;position: relative; background: url(	ff-stuff/img/banner/Line.svg);background-size:cover"></div>

	<!--================ End Home Banner Area =================-->

	<div>
		<br><br><br><br>
		
		<!--================Blog Area =================-->
		<section class="blog_area">
				<div class="container">
						<div class="row">
							<?php if($post): ?>
								<div style="color: black" class="col-lg-9">
									<?php echo $post['post_content'] ?>
								</div>
							<?php else: ?>
								<div>
									No such blog post exists
								</div>
							<?php endif?>
							<!-- <div class="col-lg-9">
									<div class="blog_left_sidebar">
											<article class="row blog_item">
												<div class="col-md-12">
													<div class="blog_post event_area">
														<div class="blogitem single_event">
															<figure>
																<img src="ff-stuff/img/banner/Melvina_Conton-Sierra_Leone.jpg" alt="">
															</figure>
															<a href="#" class="blog_item_date">
																<h3>18</h3>
																<h4>June</h4>
															</a>
														</div>
														
														<div class="blog_details norad">
																<h2>
																		CREATING CHANGE WITH GEMS IN FREETOWN, SIERRA LEONE.
																</h2>														
															<div style="width:20%;height:4px;background: url(	ff-stuff/img/banner/Line.svg);background-size:cover;"></div><br>																													
															<p>Melvina Conton | Firenze Country Ambassador - Sierra Leone </p>
															<div class="quotes">A proud citizen of Freetown, Sierra Leone and a Mechanical Engineering major at Ashesi University in Ghana, Melvina N’yillah Conton is a promising young African striving for social impact in her continent. Like her country, Melvina is ‘a little jewel’ thriving in diversity. She exhibits strong patriotism and possesses contagious zeal, and this is what propels her to achieve greatness. Melvina enjoys reading novels and plays the baritone horn in an all-female marching band.</div>
																<br>
															<p>
																She is the Sierra Leonean Firenze Country Ambassador and founder of Girls in Engineering, Mathematics and Science (GEMS) Club, an initiative encompassing interactive learning in STEM amongst young females in Freetown, Sierra Leone. Melvina is a woman in STEM who actively fights against the rote-learning nature of Africa’s educational system and vouches for active participation in education while eradicating the stereotypes that marginalize females in education.
															</p>
															<img src="	ff-stuff/img/blog/b1.jpg" alt="">
															<br><br>
															<h3>Tell us about GEMS ?</h3>
															<div style="width:10%;height:4px;background: url(	ff-stuff/img/banner/Line.svg);background-size:cover;"></div><br>																													
															<p>
																The GEMS Club is an all-girls science club which I founded to give young girls the opportunity to engage in STEM in a fun and supportive environment. Through hands-on activities, the girls are encouraged to think critically and work as a team. The club is sponsored by Reading Spots, an award-winning United Kingdom-based charity.
															</p>
															<h3>Describe your role and experience in GEMS</h3>
															<div style="width:10%;height:4px;background: url(	ff-stuff/img/banner/Line.svg);background-size:cover;"></div><br>																													
															<p>
																	As the founder and facilitator, I recruit and train volunteers to work with these young girls, both in Sierra Leone and Ghana. It has been a bit of a challenge getting girls to fully participate and interact with each other. They are used to a system in which they do not have to think; everything is fed to them by their teachers, and all they have to do is regurgitate the information to pass examinations. Our goal is for them to be independent, while being able to work together.
															</p>
															<h3>What do you think is GEMS’ greatest achievement so far?</h3>
															<div style="width:10%;height:4px;background: url(	ff-stuff/img/banner/Line.svg);background-size:cover;"></div><br>																													
															<p>
																	Our greatest achievement is the exposure to the vast range of possibilities in STEM that we have introduced to the girls. By working in teams, they have also become far more confident in their social skills which is key in today’s evolving world.
															</p>
															<img src="	ff-stuff/img/blog/b2.jpg" alt="">
															<br><br>
															<img src="	ff-stuff/img/blog/b3.jpg" alt="">
															<br><br>
															<h3>What can be improved in GEMS?</h3>
															<div style="width:10%;height:4px;background: url(	ff-stuff/img/banner/Line.svg);background-size:cover;"></div><br>																													
															<p>
																We are currently working on making our system more efficient and effective. We are in the process of designing a creative STEM curriculum that is in sync with the Basic Examination Certificate Examination (BECE) syllabus, which will improve the quality of Math and Science Education in junior high schools in West Africa.
															</p>
															<p>
																With this promising initiative and an inwardly fuelled drive, Melvina is on the path to becoming one of Africa’s change catalysts. She also enjoys reading novels and plays the baritone horn in an all-female marching band.
															</p>
															<img src="	ff-stuff/img/blog/b4.jpg" alt="">
															<br><br><br>
															<div style="width:100%;height:4px;background: url(	ff-stuff/img/banner/Line.svg);background-size:cover;"></div><br>																													
														</div>
													</div>
												</div>
											</article>
									</div>
								</div> -->
								<div class="col-lg-3 nomag">
									<div class="blog_right_sidebar nopadd">
										<aside class="single_sidebar_widget popular_post_widget wow fadeInDown" data-wow-delay="0.3s">
											<h3 class="widget_title">Facebook</h3>
											<a href="https://www.facebook.com/FirenzeGlobal/"><img class="img-fluid" src="	ff-stuff/img/blog/fb.jpg"></a>
											<br>
											<p class="text-center">
												Follow our facebook page to stay in touch
											</p>
											<ul class="list instafeed d-flex flex-wrap">
												<div class="team_item1">
													<div class="team_name">
															<div class="social">
																<a href="https://web.facebook.com/FirenzeGlobal/"><i class="fa fa-facebook-square fa-5x"></i></a>
															</div>
													</div>
												</div>	
											</ul>
											<div class="br"></div>
										</aside>
										<aside class="single_sidebar_widget popular_post_widget wow fadeInDown" data-wow-delay="0.3s">
											<h3 class="widget_title">Instagram Feeds</h3>
											<div class="blog-galery">
												<li><a href="https://www.instagram.com/p/Byu1U4LFIOG/" style="background:url(	ff-stuff/img/banner/Melvina_Conton-Sierra_Leone.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
												</a></li>
												<li><a href="https://www.instagram.com/p/ByuzWL9lA3z/" style="background: url(	ff-stuff/img/banner/woodblog.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
												</a></li>
											</div>
											<div class="blog-galery">
												<li><a href="https://www.instagram.com/p/ByXwEellmo4/" style="background: url(	ff-stuff/img/banner/fteam1.jpg) no-repeat scroll center center; height: 100px;">
													<img src="	ff-stuff/img/banner/fteam1.jpg" alt="">
												</a></li>
												<li><a href="https://www.instagram.com/p/ByXv3GFF0Ca/" style="background: url(	ff-stuff/img/banner/codedge.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
												</a></li>
											</div>
											<div class="blog-galery">
												<li><a href="https://www.instagram.com/p/ByXvlgPFBOT/" style="background: url(	ff-stuff/img/banner/project1.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
												</a></li>
												<li><a href="https://www.instagram.com/p/ByQSbJ-lMKi/" style="background: url(	ff-stuff/img/banner/vision.jpg) no-repeat scroll center center; height: 100px;background-size: cover;">
												</a></li>
											</div>
											<ul class="list instafeed d-flex flex-wrap">
												<div class="team_item1">
													<div class="team_name">
															<div class="social">
																<a href="https://instagram.com/firenzeglobal?igshid=11m6nwpo27gn0"><i class="fa fa-instagram fa-4x"></i></a>
															</div>
													</div>
												</div>	
											</ul>
											<div class="br"></div>
										</aside>
										
										<aside class="single-sidebar-widget newsletter_widget wow fadeInDown" data-wow-delay="0.9s>
												<h4 class="widget_title">Newsletter</h4>
												<p style="color:black;">
													Kindly subscribe to the Firenze Newsletter and stay update with the latest blog, podcast and info on STEM education in Africa 
												</p>
												<form class="form-group d-flex flex-row" id="subscribeForm1" name="subscribeForm" method="post" action="subscribe.php">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
														</div>
														<input type="text" name="email" id="email" class="form-control" style="color: black;" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
													</div>
													<input type="submit" value="Subscribe" class="bbtns" style="font-size: 1em;padding:7px;line-height: 17px;">
												</form>		
											</aside>
									</div>
								</div>
							</div>

						</div>
				</div>
		</section>
		<!--================Blog Area =================-->
</div>
	<!--================ End Story Area =================-->        
	<!--================ Start footer Area  =================-->	
	<footer>
		<div class="footer-area">
				<div class="container">
						<div class="row section_gap">
								<div class="col-lg-3 col-md-6 col-sm-6">
										<div class="single-footer-widget tp_widgets">
												<img class="img-fluid" src="	ff-stuff/img/banner/fulllogo.png" width="70%" style="padding-top: 20px;">
										</div>
										<p class="text-center" style="color:#fdbb00; font-family: 'Baloo Thambi', sans-serif;">Est. 2019</p>
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
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/country_amb2.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/Prex.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/homepage3.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/homepage4.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/Melvina_Conton-Sierra_Leone.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/project1.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/project2.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/codedge.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/mentorship1.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/banner/woodblog.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/voluteer/about3.jpg" class="img-fluid" alt=""></a></li>
														<li><a href="gallery.html"><img src="	ff-stuff/img/voluteer/Lisa1.jpg" class="img-fluid" alt=""></a></li>
													</ul>
												</div>
										</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
										<div class="single-footer-widget instafeed">
												<h4 class="footer_title"> Subscribe to Newsletter</h4>
												<form class="footer-newsletter" id="subscribeForm" name="subscribeForm" method="post" action="subscribe.php">
													<input type="text" name="email" id="email" class="form-control border-secondary" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
													<br>
														<input type="submit" value="Subscribe" class="modelbtn">
													
												</form>
												<br>
												<ul class="list instafeed d-flex flex-wrap">
														<div class="team_item1">
																<div class="team_name">
																		<div class="social">
																				<a href="https://web.facebook.com/FirenzeGlobal/"><i class="fa fa-facebook fa-4x"></i></a>
																				<a href="https://twitter.com/FirenzeGlobal"><i class="fa fa-twitter fa-4x"></i></a>
																				<a href="https://www.linkedin.com/company/the-firenze-foundation"><i class="fa fa-linkedin fa-4x"></i></a>
																				<a href="https://instagram.com/firenzeglobal?igshid=11m6nwpo27gn0"><i class="fa fa-instagram fa-4x"></i></a>
																		</div>
																</div>
														</div>
														
												</ul><br>
											<p class="text-center privacy" style="color:white;"> <a href="site_policy.html">Site Policy</a> | <a href="privacy_policy.html">Privacy Policy </a></p>

										</div>
								</div>
								
						</div>
				</div>
		</div>
		<div style="width:100%;height:6px; background: url(	ff-stuff/img/banner/Line.svg);background-size:cover"></div>
		<div class="footer-bottom">
				<div class="container">
						<div class="row d-flex">
								<p class="col-lg-12 footer-text text-center">
All Rights Reserved. Firenze Foundation Copyright &copy;<script>document.write(new Date().getFullYear());</script>
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
                    <div style="width:15%;height:6px;margin-left: auto;margin-right: auto; background: url(	ff-stuff/img/banner/Line.svg);background-size:cover"></div><br>
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
                    <div style="width:15%;height:6px;margin-left: auto;margin-right: auto; background: url(	ff-stuff/img/banner/Line.svg);background-size:cover"></div><br>
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
	<script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
	<script src="js/subscribe.js"></script>
	
	<script type='text/javascript' src='js/swiper.min.js'></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
          var mySwiper = new Swiper('.hero-slider', {
                slidesPerView: 1,
                spaceBetween: 0,
				loop: true,
				speed: 2000,
				autoplay: true,
			    autoplayTimeout: 6000,
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