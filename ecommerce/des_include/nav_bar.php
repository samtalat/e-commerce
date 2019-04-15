 <?php
include "des_fun/connection.php";
$select = "SELECT * FROM site_information";
$result = $conn->query($select);
$row = $result->fetch_assoc();


?>
 <!-- navbar area start -->
    <nav class="navbar navbar-area navbar-expand-lg navbar-light bg-light-blue home-6">
            <div class="container nav-container">
                <div class="logo-wrapper navbar-brand ">
                    <a href="index.php" class="logo main-logo mobile-logo">
                        <img src="admin/fun/uploads/<?php echo $row['logo'] ?> "style="width: 150px;height: 70px;" alt="logo">
                    </a>
                    <div class="form-element has-icon">
                        <select class="category selectpicker" >
                            <option value="0">All Category</option>
                            <option value="0">Men's Wear</option>
                            <option value="0">Women's Wear</option>
                            <option value="0">Kids Wear</option>
                            <option value="0">Sports Wear</option>
                        </select>
                        <span class="the-icon">
                                <i class="fas fa-plus"></i>
                        </span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="mirex">
                    <!-- navbar collapse start -->
                    <ul class="navbar-nav">
                        <!-- navbar- nav -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown mega-menu"><!-- mega menu start -->
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                            <div class="mega-menu-wrapper">
                                <div class="container mega-menu-container">
                                    <div class="row">
                                      <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Inner Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="category.php">Category</a></li>
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="product-details.php">Product Details</a></li>
                                                <li><a href="signup.php">Signup</a></li>
                                                <li><a href="sellers-products.php">Sellers Products</a></li>
                                                <li><a href="seller-dashboard.php">Sellers Dashboard</a></li>
                                            </ul>
                                        </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-12">
                                            <div class="mega-menu-columns">
                                                <h6 class="title">Other Pages</h6>
                                                <ul class="menga-menu-page-links">
                                                    <li><a href="product_upload.php">Product Upload</a></li>
                                                    <li><a href="offers.php">Offer</a></li>
                                                    <li><a href="invoice.php">Invoice</a></li>
                                                    <li><a href="vendor-list.php">Vendor List</a></li>
                                                    <li><a href="partners.php">Partners</a></li>
                                                    <li><a href="404.php">404 Page</a></li>
                                                </ul>
                                            </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-12">
                                            <div class="mega-menu-columns">
                                                <h6 class="title">Other Pages</h6>
                                                <ul class="menga-menu-page-links">
                                                    <li><a href="search.php">Search</a></li>
                                                    <li><a href="become-affiliats.php">Become Affiliant</a></li>
                                                    <li><a href="faq.php">Faq</a></li>
                                                    <li><a href="track-orders.php">Track Order</a></li>
                                                    <li><a href="privacy_policy.php">Privacy Policy</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-12">
                                            <a href="product-details.php">
                                                <img src="assets/img/mega-menu.jpg" alt="product image">
                                            </a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </li><!-- mega menu start -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu">
                                <a href="blog.php" class="dropdown-item">Blog</a>
                                <a href="blog-details.php" class="dropdown-item">Blog Details</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="des_fun/logout.php">Logout</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar btn wrapper -->
                <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mirex" aria-controls="mirex"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- navbar collapse end -->
                <div class="right-btn-wrapper">
                   <ul>
                       <li class="search" id="search"><i class="fas fa-search"></i> </li>
                       <li class="cart" id="cart"><i class="fas fa-shopping-basket"></i> 
                        <span class="badge" id="chart">
 <?php
 $id_user = $_SESSION['id'];
 include"des_fun/connection.php"; 
 $sql_cart = "SELECT * FROM cart WHERE user_id = $id_user";
 $result_cart = $conn->query($sql_cart);
 $count = $result_cart->num_rows;
 echo  $count;


 ?>                           


                        </span>
                        </li>
                       <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>
                   </ul>
                </div>
               
                
            </div>
        </nav>
        <!-- navbar area end -->