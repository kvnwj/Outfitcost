<?php
require("myFunctions.php");
session_start();
$minimum_range = 100;
$maximum_range = 600;
?>

<!DOCTYPE html>
<html>

<head>
	<title>Products</title>
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
	<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<!-- untuk Bootstrap dapat berjalan -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
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
</head>

<body>
	<!-- untuk header -->
	<?php include('header.php') ?>
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<h3>Filter By Price</h3>
					<ul class="dropdown-menu1">
						<li><a href="">
								<div id="slider-range"></div>
								<input type="text" id="amount" style="border: 0" />
							</a></li>
					</ul>
					<script type='text/javascript'>
						$(window).load(function() {
							$("#slider-range").slider({
								range: true,
								min: 0,
								max: 1000,
								values: [100, 500],
								slide: function(event, ui) {
									$("#minimum_range").val(ui.values[0]);
									$("#maximum_range").val(ui.values[1]);
									load_product(ui.values[0], ui.values[1]);
									$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
								}
							});
							load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>);
							
							function load_product(minimum_range, maximum_range)
							{
								$.ajax({
									method:"POST",
									data:{minimum_range:minimum_range, maximum_range:maximum_range},
									success:function(data)
									{
										$('#load_product').fadeIn('slow').html(data);
										}
										});
							}
							
							$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider(
								"values", 1));


						});
					</script>
					<script type="text/javascript" src="js/jquery-ui.min.js"></script>
				</div>
				<div class="categories animated wow slideInUp" data-wow-delay=".5s">
					<h3>Categories</h3>
					<ul class="cate">
						<li><a href="products.php">Best Selling</a> <span>(15)</span></li>
						<li><a href="products.php">Man</a> <span>(16)</span></li>
						<ul>
							<li><a href="products.php">Backpack</a> <span>(2)</span></li>
							<li><a href="products.php">Briefcase</a> <span>(5)</span></li>
							<li><a href="products.php">Carryall</a> <span>(1)</span></li>
							<li><a href="products.php">Sling Bag</a> <span>(0)</span></li>
							<li><a href="products.php">Tote Bag</a> <span>(1)</span></li>
							<li><a href="products.php">Waist Bag</a> <span>(0)</span></li>
						</ul>
						<li><a href="products.php">Sales</a> <span>(15)</span></li>
					</ul>
				</div>
				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.php"><img src="images/27.jpg" alt=" " class="img-responsive" /></a>
					<div class="men-position-pos">
						<h4>Summer collection</h4>
						<h5><span>55%</span> Flat Discount</h5>
					</div>
				</div>
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
						<img src="images/18.jpg" alt=" " class="img-responsive" />
						<div class="products-right-grids-position1">
							<h4>2020 New Collection</h4>
							<p>
								A Collection of New Models and Innovations to Start an Immersive Year!
							</p>
						</div>
					</div>
				</div>
				<div class="products-right-grids-bottom">
					<!-- Code untuk menampilkan hasil search -->
					<?php
                    if (isset($_GET["search"])) {
                        $searchQuery = $_GET["search"];
                        $results = searchProductByQuery($searchQuery);
                    } elseif (isset($_GET["category"])) {
                        $category = $_GET["category"];
                        $results = searchProductByCategory($category);
                    } else {
                        echo "Error menampilkan produk. Tidak ada Kategori yang dipilih dan Tidak ada Search. ";
                    }
                     ?>
					<!-- Satu kotak Produk -->
					<?php
                    if ($results != null) {
                        foreach ($results as $row) { ?>
					<div class="col-md-4 products-right-grids-bottom-grid">
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp"
							data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<!-- Gambar per masing-masing produk -->
								<a href="single.php?id=<?= $row['IDProduk']?>"
									class="product-image"><img
										src="<?= $row["Picture"]?>"
										alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a
										href="single.php?id=<?= $row['IDProduk']?>">Quick
										View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
								</div>
							</div>
							<!-- Nama Produk di sini -->
							<h4><a
									href="single.php?id=<?= $row['IDProduk']?>"><?= $row['Name'] ?></a>
							</h4>
							<!-- Deskripsi Singkat Produk (kalo ada) -->
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<!-- Harga dan tombol add to cart di sini -->
								<p><i>Rp. <?= $row['Price']+250000 ?></i>
									<span class="item_price">Rp. <?= $row['Price'] ?></span>
								</p>
							</div>
						</div>
					</div>
					<?php
                        }
                    } else { ?>
						<p>No item matched your query. </p>
					<?php } ?>
					<!-- End Satu kotak Produk -->
					<div class="clearfix"> </div>
				</div>
				<nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
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
							<h4><a href="single.php">Sellers</a></h4>
							<p>Posted On 12/1/2020</p>
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
