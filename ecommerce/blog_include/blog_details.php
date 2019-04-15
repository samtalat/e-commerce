<?php
$id = $_GET['id'];
include "des_fun/connection.php";
$select = "SELECT * FROM blogs WHERE id = $id";
$result = $conn->query($select);
$row = $result->fetch_assoc();




?>
<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Blog Details</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index.html" class="search-popup-form">
        <div class="form-element">
                <input type="text"  class="input-field" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- slide sidebar area start -->
<div class="slide-sidebar-area" id="slide-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" id="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="recent-reviews"><!-- recent reviews -->
            <h4 class="title">Recent Reviews</h4>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Abir Khan</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Rex Rifat</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
        </div> <!-- //. recent reviews -->
    </div><!-- //. bottom content -->
</div>
<!-- slide sidebar area end -->
<!-- cart sidebar area start -->
<div class="cart-sidebar-area" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" ><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="checkout.html" class="boxed-btn">Checkout</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->
    <!-- blog details page content area start -->
    <section class="blog-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-blog-post"><!-- single blog post -->
                            <div class="meta-time"><!-- meta time -->
                                <span class="date"><?php
                                
                                echo $row['u_date']; 
                                 ?></span>
                                
                            </div><!-- //.meta time -->
                            <div class="details-container"><!-- details contaienr -->
                                <div class="meta-tags"><!-- meta tags -->
                                    <ul>
                                        <li><i class="fas fa-comments"></i> 33 Comments</li>
                                        <li><i class="fas fa-share"></i> 50 Shares</li>
                                    </ul>
                                </div>
                                <div class="post-body"><!-- post body -->
                                    <h3 class="title"><?php echo $row['title_blog'] ?></h3>
                                    
                                    <p><?php echo $row['text_blog'] ?></p>
                                    
                                    <div class="post-bottom-content"><!-- post bottom content -->
                                        <div class="top-content"><!-- top content -->
                                            <div class="left-content"><h4 class="title">Releted Tags</h4></div>
                                            <div class="right-content"><h4 class="title">Social Share</h4></div>
                                        </div><!-- //.top content -->
                                        <div class="bottom-content"><!-- bottom content -->
                                            <div class="left-content"><!-- left content -->
                                                <ul>
                                                    <li><a href="#">organic</a></li>
                                                    <li><a href="#">Foods</a></li>
                                                    <li><a href="#">tasty</a></li>
                                                </ul>
                                            </div><!-- //.left content -->
                                            <div class="right-content"><!-- right content -->
                                                <h4 class="title">Social Share</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                                </ul>
                                            </div><!-- right content -->
                                        </div><!-- //.bottom content -->
                                    </div><!-- //.post bottom content -->
                                </div><!-- //.post body -->
                                <div class="single-post-separator"></div>
                                <div class="comments-area"><!-- comments area satart -->
                                    <h3 class="title">Comments</h3>
                                    <div class="single-comment-item margin-bottom-40"><!-- single comment item -->
                                        <div class="thumb">
                                            <img src="assets/img/comments/01.png" alt="commente avatar">
                                        </div>
                                        <div class="content">
                                            <span class="meta-date">19th May 2018</span>
                                            <h4 class="author-name">Rosalina Pong</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                        <a href="#" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                    </div><!-- //. single comment item -->
                                    <div class="single-comment-item"><!-- single comment item -->
                                        <div class="thumb">
                                            <img src="assets/img/comments/02.png" alt="commente avatar">
                                        </div>
                                        <div class="content">
                                            <span class="meta-date">19th May 2018</span>
                                            <h4 class="author-name">Arista Williamson</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                        <a href="#" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                    </div><!-- //. single comment item -->
                                </div><!-- //. comments area end -->
                                <div class="single-blog-page-separator"></div>
                                <div class="comments-form-area"><!-- comments form area -->
                                    <h3 class="title">Post Comment</h3>
                                    <div class="comment-form-wrapper"><!-- comment form wrapper -->
                                        <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/blog-details.html">
                                            <div class="form-element margin-bottom-15">
                                                <div class="has-icon textarea">
                                                    <textarea rows="20" cols="8" placeholder="Type your comments...." class="input-field borderd textarea"></textarea>
                                                    <div class="the-icon">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-bottom-20">
                                                <div class="has-icon ">
                                                   <input type="text" class="input-field borderd" placeholder="Type your name....">
                                                    <div class="the-icon">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-bottom-20">
                                                <div class="has-icon ">
                                                   <input type="email" class="input-field borderd" placeholder="Type your email....">
                                                    <div class="the-icon">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element ">
                                                <div class="has-icon ">
                                                   <input type="url" class="input-field borderd" placeholder="Type your website....">
                                                    <div class="the-icon">
                                                        <i class="fas fa-globe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-top-40">
                                                <input type="submit" value="post comment" class="submit-btn btn-rounded">
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- comments form area -->
                            </div>
                        </div>
                    </div><!-- //.col-lg-8 -->
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <div class="widget-area instagram">
                                <!-- instagram widget start -->
                                <div class="widget-title">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="instagram-feed">
                                        <!-- instagram feed -->
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/01.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/02.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/03.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/04.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/05.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/06.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/07.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/08.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/09.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /.instagram feed -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- instagram widget end -->
                            <div class="sidebar-separator"></div>
                            <div class="widget-area social">
                                <!-- social widget start-->
                                <div class="widget-title">
                                    <h4>Follow Us</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body-->
                                    <ul class="social-links">
                                        <!-- social links-->
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="pinterest">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wordpress">
                                                <i class="fab fa-wordpress"></i>
                                            </a>
                                        </li>
                        
                                    </ul>
                                    <!-- ./ social links-->
                                </div>
                                <!-- ./ widget body -->
                            </div>
                            <!-- instragram widget end -->
                            <div class="sidebar-separator"></div>
                            <div class="widget-area category">
                                <!-- category widget start-->
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="categories">
                                        <!-- categories -->
                                        <li>
                                            <a href="#">Lifestyle
                                                <span class="count">(05)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Travel
                                                <span class="count">(34)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Fashion
                                                <span class="count">(89)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Music
                                                <span class="count">(96)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Branding
                                                <span class="count">(78)</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- ./ cateogries -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- category widget end-->
                            <div class="sidebar-separator category"></div>
                            <div class="widget-area latest-post">
                                <!-- latest post widget start -->
                                <div class="widget-title">
                                    <h4>Latest Posts</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/01.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Alonso Kelina Falao Asiano Pero</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 6 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/02.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">It is a long fact that a reader</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 7 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/03.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Many desktop packages and web</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 9 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/04.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Various have evolved over the years</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 10 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/05.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Photo booth anim wolf moon.</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 13 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <div class="sidebar-separator latest-post"></div>
                            <!-- latest post widget end -->
                            <div class="widget-area tags">
                                <!-- tag widget  start -->
                                <div class="widget-title">
                                    <h4>Tags</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="tags-list">
                                        <!-- tags -->
                                        <li>
                                            <a href="#">Travel</a>
                                        </li>
                                        <li>
                                            <a href="#">Lifestyle</a>
                                        </li>
                                        <li>
                                            <a href="#">Photo </a>
                                        </li>
                                        <li>
                                            <a href="#">Adventures </a>
                                        </li>
                                        <li>
                                            <a href="#">Musician </a>
                                        </li>
                                        <li>
                                            <a href="#">08 </a>
                                        </li>
                                        <li>
                                            <a href="#">Travel </a>
                                        </li>
                                        <li>
                                            <a href="#">Lifestyle </a>
                                        </li>
                                        <li>
                                            <a href="#">Photo </a>
                                        </li>
                                        <li>
                                            <a href="#">Adventures </a>
                                        </li>
                                        <li>
                                            <a href="#">Musician </a>
                                        </li>
                                        <li>
                                            <a href="#">08 </a>
                                        </li>
                                    </ul>
                                    <!-- /.tags -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- tag widget  end -->
                        </aside>
                        <!-- sidebar end -->
                    </div><!-- //.col-lg-4 -->
                </div><!-- //.row -->
            </div><!-- //.container -->
        </section>
        <!-- blog details page content area end -->
