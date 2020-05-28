<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0069)checkout.php -->
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Checkout</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script src="js/jquery.min.js"></script>
	<script data-dapp-detection="">
		(function() {
			let alreadyInsertedMetaTag = false

			function __insertDappDetected() {
				if (!alreadyInsertedMetaTag) {
					const meta = document.createElement('meta')
					meta.name = 'dapp-detected'
					document.head.appendChild(meta)
					alreadyInsertedMetaTag = true
				}
			}

			if (window.hasOwnProperty('web3')) {
				// Note a closure can't be used for this var because some sites like
				// www.wnyc.org do a second script execution via eval for some reason.
				window.__disableDappDetectionInsertion = true
				// Likely oldWeb3 is undefined and it has a property only because
				// we defined it. Some sites like wnyc.org are evaling all scripts
				// that exist again, so this is protection against multiple calls.
				if (window.web3 === undefined) {
					return
				}
				__insertDappDetected()
			} else {
				var oldWeb3 = window.web3
				Object.defineProperty(window, 'web3', {
					configurable: true,
					set: function(val) {
						if (!window.__disableDappDetectionInsertion)
							__insertDappDetected()
						oldWeb3 = val
					},
					get: function() {
						if (!window.__disableDappDetectionInsertion)
							__insertDappDetected()
						return oldWeb3
					}
				})
			}
		})()
	</script>
	<!-- //js -->
	<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<link
		href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
	<link
		href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
		rel='stylesheet' type='text/css'>
	<!-- untuk efek animasi -->
	<link href="css/animate.min.css" rel="stylesheet">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- //animation-effect -->
</head>

<body style="">
	<!-- header -->
	<?php include('header.php') ?>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!---728x90--->

	<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<!-- Code untuk menampilkan produk di tabel customer -->
			<?php
                require("myFunctions.php");
                $customerCart = getCustomerCart();?>
			<div class="checkout-right animated wow slideInUp animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
				<?php if ($customerCart==null) {
                    // Html bila keranjang kosong?>
				<h3 class="animated wow slideInLeft animated" data-wow-delay=".5s"
					style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft; margin: 150px 50px">
					Your shopping cart
					is empty</h3>
				<?php
                } else {
                    $cartLength = sizeof($customerCart) ?>
				<h3 class="animated wow slideInLeft animated" data-wow-delay=".5s"
					style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">Your shopping cart
					contains: <span><?= $cartLength?> Products</span>
				</h3>
				<!-- Table Headers -->
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>No.</th>
							<th>Product Image</th>
							<th>Quantity</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Category</th>
							<th>Brand</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1;
                    foreach ($customerCart as $row) { ?>
						<!-- // Html untuk mengisi tabel keranjang -->
						<tr class="rem<?= $i?>">
							<td class="invert"><?= $i?>
							</td>
							<td class="invert-image"><a
									href="single.php?id=<?=$row['IDProduk']?>"><img
										src="<?= $row['Picture']?>"
										alt=" " class="img-responsive"></a></td>
							<td class="invert"><?= $row['jumlah']?>
							</td>
							<td class="invert"><?= $row['Name']?>
							</td>
							<td class="invert">Rp. <?= $row['Price']?>
							</td>
							<td class="invert"><?= $row['CategoryName']?>
							</td>
							<td class="invert"><?= $row['BrandName']?>
							</td>
							<td class="invert">
								<div class="rem">
									<a
										href="deleteProduk.php?IDProduk=<?= $row["IDProduk"]?>&IDTransaksi=<?= $_SESSION["IDTransaksi"]?>">
										<div class="close<?= $i?>">
										</div>
									</a>
								</div>
								<script>
									$(document).ready(function(c) {
										$('.close<?= $i?>').on('click', function(c) {
											$('.rem<?= $i?>').fadeOut('slow', function(
												c) {
												$('.rem<?= $i?>').remove();
											});
										});
									});
								</script>
							</td>
						</tr>
						<?php $i++;
                    } ?>
					</tbody>
				</table>
			</div>
			<div class="checkout-left">
				<div class="checkout-left-basket animated wow slideInLeft animated" data-wow-delay=".5s"
					style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
					<h4>Cart Total</h4>
					<ul>
						<?php
                        $totalPrice = 0;
                    foreach ($customerCart as $row) { ?>
						<li><?= $row['Name'] ?>
							<span>Rp. <?= $row['Price']*$row['jumlah']?></span>
						</li>
						<?php
                        $totalPrice = $totalPrice + ($row['Price']*$row['jumlah']); } ?>
						<li>Total <span>Rp. <?= $totalPrice?></span>
						</li>
					</ul>
					<a href="checkoutProses.php"><strong>CHECKOUT</strong><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
				</div>
				<div class="checkout-right-basket animated wow slideInRight animated" data-wow-delay=".5s"
					style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue
						Shopping</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php
                } ?>
		</div>
	</div>
	<!-- //checkout -->
	<!-- footer -->
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
	<!-- //footer -->

</body>

</html>

<!-- Original Code untuk tr -->
<!-- <tr class="rem2">
							<td class="invert">2</td>
							<td class="invert-image"><a href="single.php"><img src="images/30.jpg" alt=" "
										class="img-responsive"></a></td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span>1</span></div>
										<div class="entry value-plus active">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class="invert">Centre Table</td>
							<td class="invert">$5.00</td>
							<td class="invert">$250.00</td>
							<td class="invert">
								<div class="rem">
									<div class="close2"> </div>
								</div>
								<script>
									$(document).ready(function(c) {
										$('.close2').on('click', function(c) {
											$('.rem2').fadeOut('slow', function(c) {
												$('.rem2').remove();
											});
										});
									});
								</script>
							</td>
						</tr> -->