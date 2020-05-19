<!-- Header untuk semua page, cukup edit 1 langsung berubah semua -->
<?php
// Code buat connect secara PDO
require("pdoConnection.php");

// Get categories
$sql = "SELECT * FROM category";
$stmt = $pdo->prepare($sql);
$stmt -> execute();
$categories = $stmt->fetchAll();
?>
<div class="header">
    <div class="container">
        <div class="header-grid">
            <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                <ul>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                            href="mailto:info@example.com">outfitcost@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 <span>567 </span>893
                    </li>
                    <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.php">Login</a>
                    </li>
                    <li class="active"><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a
                            href="register.php">Register</a></li>
                </ul>
            </div>
            <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                <ul class="social-icons">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="instagram"></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="logo-nav">
            <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                <h1><a href="index.php">Outfitcost <span>Shop anywhere</span></a></h1>
            </div>
            <div class="logo-nav-left1">
                <nav class="navbar navbar-default">
                    <!-- untuk mengelompokkannya agar lebih rapi pada tampilan di mobile device -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                            data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php" class="act">Home</a></li>
                            <!-- untuk menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3" style="min-width: 250px;">
                                    <!-- Pake foreach untuk ambil data dari database, tampilkan ke dropdown menu -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="multi-column-dropdown">
                                                <?php foreach ($categories as $category) { ?>
                                                <li><a
                                                        href="products.php?category=<?= $category['CategoryName']?>"><?= $category['CategoryName']?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Brands <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>New Arrivals</h6>
                                                <li><a href="products.php">Adidas</a></li>
                                                <li><a href="products.php">Chanel</a></li>
                                                <li><a href="products.php">Mulberry</a></li>
                                                <li><a href="products.php">Michael Kors</a></li>
                                                <li><a href="products.php">Versace</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Limited Collections</h6>
                                                <li><a href="products.php">Carlier</a></li>
                                                <li><a href="products.php">Coach</a></li>
                                                <li><a href="products.php">Dior</a></li>
                                                <li><a href="products.php">Gucci</a></li>
                                                <li><a href="products.php">Jimmy Choo</a></li>
                                                <li><a href="products.php">Louis Vuitton</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Accessories</h6>
                                                <li><a href="products.php">Sport</a></li>
                                                <li><a href="products.php">Travel</a></li>
                                                <li><a href="products.php">Others</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="mail.php">Mail Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="logo-nav-right">
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form method="GET" action="products.php">
                            <input class="sb-search-input" placeholder="Enter your search term..." type="search"
                                id="search" name="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>
                <!-- script untuk pencarian -->
                <script src="js/classie.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch(document.getElementById('sb-search'));
                </script>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="checkout.php">
                        <h3>
                            <div class="total">
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
                                    class="simpleCart_quantity"></span> items)</div>
                            <img src="images/bag.png" alt="" />
                        </h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>