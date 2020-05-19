<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<!-- untuk device mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
		<!-- untuk Bootstrap mengenai style-nya -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
	
<?php
$host_db="localhost";
$user_db="root";
$pass_db="";
$nama_db="inkomtek_kvnwj_outfitcost";

$mysqli = new mysqli($host_db, $user_db, $pass_db, $nama_db);

if (isset($_POST['daftar'])) {
    $FirstName = $mysqli->real_escape_string($_POST['FirstName']);
    $LastName = $mysqli->real_escape_string($_POST['LastName']);
    $Email = $mysqli->real_escape_string($_POST['Email']);
    $Password = $mysqli->real_escape_string($_POST['Password']);
    $passwd_hash = password_hash($Password, PASSWORD_DEFAULT); // hash password
    
    if (strlen($Password) > 25 || strlen($Password) < 6) {
        echo '<script type="text/javascript">
  alert("Password harus antara 6-25 karakter");
</script>';
    } else {
        $sqli_get = mysqli_query($mysqli, "SELECT * FROM pembeli WHERE Email = '$Email'");
        $num_row = mysqli_num_rows($sqli_get);
        //fungsi script ini adalah untuk mengecek ketersediaan email, jika tidak tersedia maka program akan berjalan
        if ($num_row == 0) {
            $Password = md5($Password);
            $sql_insert = mysqli_query($mysqli, "INSERT INTO pembeli VALUES ('','$Email','$FirstName','$LastName','$Password')");
            echo "Pendaftaran berhasil. Login <a href='login.php'>disini</a>";
        } else {
            echo '<script type="text/javascript">
  alert("Email sudah terdaftar, Silahkan gunakan email lain");
</script>';
        }
    }
}
 

?>
<form action="" method="post">
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
			<div class="login-form-grids">

				<h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
				<form class="animated wow slideInUp" data-wow-delay=".5s">
					<input name="FirstName" type="text" placeholder="First Name..." required=" " >
					<input name="LastName" type="text" placeholder="Last Name..." required=" " >
					<input name="Email" type="email" placeholder="Email Address" required=" " >
					<input name="Password" type="password" placeholder="Password" required=" " >
					
					<input type="submit" style="center" value="Register" name="daftar">
					</form>
							
						</div>
					</div>

					
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="index.php">Home</a>
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
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">outfitcost@gmail.com</a></li>
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
