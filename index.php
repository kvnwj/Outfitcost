<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<!-- untuk device mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- untuk device mobile -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- untuk cart -->
	<script src="js/simpleCart.min.js"></script>
	<!-- cart -->
	<!-- untuk Bootstrap dapat berjalan -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- untuk Bootstrap dapat berjalan -->
	<link
		href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
	<link
		href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
		rel='stylesheet' type='text/css'>
	<!-- untuk timer -->
	<link rel="stylesheet" href="css/jquery.countdown.css" />
	<!-- untuk efek animasi -->
	<link href="css/animate.min.css" rel="stylesheet">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>

</head>

<body>
	<!-- untuk header -->
	<?php include('header.php') ?>
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>Free Online Shopping</h3>
				<h4>Up to <span>50% <i>Off/-</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Backpack + Briefcase for Mens</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Tote Bag + Wristlet for Womens</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>School Bag for Kids</p>
								</div>
							</div>
						</article>
					</div>
				</div>
				<script src="js/jquery.wmuSlider.js"></script>
				<script>
					$('.example1').wmuSlider();
				</script>
			</div>
		</div>
	</div>
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>Outfit <span>cost</span><i> in online shopping</i></h3>
								<div>
									<p>Must have it? We’ve got it.</p>
									<p>Need it. Want it. Done.</p>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-pos">
							<p>Discount 20%</p>
						</div>
					</div>
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p>Latest New Collections</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="grid-left-grid1-pos">
							<p>top and classic designs <span>2020 Collection</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- New Collections, tampilkan pakai php retrieve produk dan gambar -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/7.jpg" alt=" "
									class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">Formal Bag</a></h4>
						<p>Suitable for Work</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$325</i> <span class="item_price">$250</span><a class="item_add" href="#">add to cart
								</a></p>
						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/8.jpg" alt=" "
									class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">C&K Bag</a></h4>
						<p>Suitable for Everyday Use</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart
								</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp"
						data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/5.jpg" alt=" "
									class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right new-collections-grid1-right-rate">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="new-one">
								<p>New</p>
							</div>
						</div>
						<h4><a href="single.php">Travel Bag</a></h4>
						<p>Suitable for Outdoor Travel</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$580</i> <span class="item_price">$550</span><a class="item_add" href="#">add to cart
								</a></p>
						</div>
					</div>
					<div class="new-collections-grid-sub-grids">
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									<a href="single.php" class="product-image"><img src="images/6.jpg" alt=" "
											class="img-responsive" /></a>
									<div class="new-collections-grid1-image-pos">
										<a href="single.php">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="single.php">Shoulder Bag</a></h4>
								<p>Suitable for Everyday Use</p>
								<div class="new-collections-grid1-left simpleCart_shelfItem">
									<p><i>$480</i> <span class="item_price">$400</span><a class="item_add" href="#">add
											to cart </a></p>
								</div>
							</div>
						</div>
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									<a href="single.php" class="product-image"><img src="images/9.jpg" alt=" "
											class="img-responsive" /></a>
									<div class="new-collections-grid1-image-pos">
										<a href="single.php">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="single.php">Backpack</a></h4>
								<p>Suitable for Adventure Trip</p>
								<div class="new-collections-grid1-left simpleCart_shelfItem">
									<p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add
											to cart </a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/10.jpg" alt=" "
									class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">Tote Bag</a></h4>
						<p>Suitable for Shopping</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$180</i> <span class="item_price">$120</span><a class="item_add" href="#">add to cart
								</a></p>
						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/11.jpg" alt=" "
									class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>

									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">Gucci Bag</a></h4>
						<p>Suitable for Everyday Use</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$890</i> <span class="item_price">$857</span><a class="item_add" href="#">add to cart
								</a></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="timer">
		<div class="container">
			<div class="timer-grids">
				<div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<h3><a href="products.php">Louis Vuitton Monogram Shoulder Bag</a></h3>
					<div class="rating">
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/1.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
						<p><i>$980</i> <span class="item_price">$850</span></p>
						<h4>A sleek and simple shoulder bag featuring a unique mesh finish. Turn to this nude coloured
							piece to anchor a black bandeau dress and open-toed mules for a little daytime glam.
						</h4>
						<p><a class="item_add timer_add" href="#">add to cart </a></p>
					</div>
					<div id="counter"> </div>
					<script src="js/jquery.countdown.js"></script>
					<script src="js/script.js"></script>
				</div>
				<div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="timer-grid-right1">
						<img src="images/17.jpg" alt=" " class="img-responsive" />
						<div class="timer-grid-right-pos">
							<h4>Special Offer</h4>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="collections-bottom">
		<div class="container">
			<div class="collections-bottom-grids">
				<div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>45% Offer For <span>Women & Children's</span></h3>
				</div>
			</div>
			<div class="newsletter animated wow slideInUp" data-wow-delay=".5s">
				<h3>Newsletter</h3>
				<p>Join us now to get all news and special offers.</p>
				<form>
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<input type="email" value="Enter your email address" onfocus="this.value = '';"
						onblur="if (this.value == '') {this.value = 'Enter your email address';}" required="">
					<input type="submit" value="Join Us">
				</form>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Selling and buying everything bags you need online.<span></span>Trusted by over
						1,000,000 sellers and buyers worldwide.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block,
							<span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
								href="mailto:info@example.com">outfitcost@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 893</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Outfitcost Events</h3>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Community</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/91.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">Sellers</a></h4>
							<p>Posted On 12/1/2020</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/101.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">Buyers</a></h4>
							<p>Posted On 25/3/2020</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.php">Outfitcost <span>shop anywhere</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2020 Outfitcost. All rights reserved</p>
			</div>
		</div>
	</div>
</body>

</html>