<?php

session_start();
if (isset($_SESSION['username'])) {

include "des_include/bar_area_one.php";
include "des_include/bar_area_two.php";
include "des_include/nav_bar.php";


?>


<!-- header area start -->
<div class="header-area-three header-bg-four home-six" style="background-image: url('admin/fun/uploads/<?php echo $row['home_img'] ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-inner "><!-- header inner -->
                    <span class="subtitle">SPRING - SUMMER 2018</span>
                    <h1 class="title">New Arrivals</h1>
                    <p class="wow fadeInDown">Stock up on sportswear and limited edition collections on
                        our awesome mid-season sale.</p>
                        <div class="btn-wrapper">
                            <a href="category.html" class="boxed-btn">View Collections</a>
                            <a href="about.html" class="boxed-btn blank">learn more</a>
                        </div>
                </div><!-- //. header inner -->
            </div>
        </div>
    </div>
</div>
<!-- header area end -->
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
<?php
include "des_include/cart_slider.php";


?>


<!-- cart sidebar area end -->
<!-- feature area home 6 start -->
<div class="feature-area-home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="img-wrapper">
                    <a href="#">
                        <img src="assets/img/banner-add/03.jpg" alt="banner image">
                    </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="assets/img/banner-add/04.jpg" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="img-wrapper">
                    <a href="#">
                        <img src="assets/img/banner-add/05.jpg" alt="banner image">
                    </a>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- feature area home 6 end -->
<div class="trending-seller-area home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="single-offer-item-tall"><!-- single offer item tall -->
                    <div class="thumb">
                        <img src="assets/img/product-offer/01.jpg" alt="offered image">
                    </div>
                    <div class="content">
                        <span class="subtitle">Hurry Up! Offer ends in:</span>
                        <div class="countdown-area">
                            <ul>
                                <li>
                                    <div class="single-countdown-box"><!-- single countdown box -->
                                        <span class="time" id="chour">03</span>
                                        <span class="name">Hor</span>
                                    </div><!-- //.single countdown box -->
                                </li>
                                <li>
                                    <div class="single-countdown-box"><!-- single countdown box -->
                                        <span class="time" id="cmin">16</span>
                                        <span class="name">min</span>
                                    </div><!-- //.single countdown box -->
                                </li>
                                <li>
                                    <div class="single-countdown-box"><!-- single countdown box -->
                                        <span class="time" id="csec">46</span>
                                        <span class="name">Sec</span>
                                    </div><!-- //.single countdown box -->
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Game Console Controller + USB 3.0 Cable</h4></a>
                        <div class="price"><span class="sprice">$400</span> <del class="dprice">$570</del></div>
                    </div>
                </div><!-- //.single oofer item tall -->
                <div class="single-offer-banner"><!-- single offer item tall -->
                    <a href="#">
                        <div class="img-wrapper">
                            <img src="assets/img/banner-add/06.jpg" alt="banner image">
                        </div>
                    </a>
                </div><!-- //.single oofer item tall -->
            </div>
            <div class="col-lg-9 ">
                <div class="home-six-trending-seller-filter"><!-- home six trending seller filter -->
                   <div class="row">
                       <div class="col-lg-12">
                        <div class="home-six-trending-sellter-filter-nav">
                                <ul class="nav nav-tabs"  role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="bestseller-tab" data-toggle="tab" href="#bestseller" role="tab" aria-controls="bestseller" aria-selected="true">best sellers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="trendeseller-tab" data-toggle="tab" href="#trendeseller" role="tab" aria-controls="trendeseller" aria-selected="false">trending sellers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">new sellers</a>
                                    </li>
                                </ul> 
                        </div>
                        <div class="home-six-trending-masonry">
                                <div class="tab-content" >
                                    <div class="tab-pane fade show active" id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
                                        <div class="row" id="rowsearch">

<?php 
include "des_fun/connection.php";
$select = "SELECT * FROM products";
$query = $conn->query($select);

foreach ($query as $row) {
    ?>

    <div class="col-lg-4 col-md-6">
<div class="single-new-collection-item"><!-- single new collections -->
<div class="thumb">
<img src="admin/fun/uploads/<?php echo $row['img'] ?>" alt="new collcetion image" style="width: 300px;height: 200px;">
<div class="hover">

<a data_id="<?php echo $row['id']; ?>" class="addtocart">Add To Cart</a>
</div>
</div>
<div class="content">
  <span class="category"><?php 
    $cat_id = $row['id_cat'] ;
    $select_cat = "SELECT * FROM categoris WHERE id = $cat_id";
       $result_cat = $conn->query($select_cat);
       $row_cat = $result_cat->fetch_assoc();
       echo $row_cat['name'];
    ?>
     
  </span>
<a href="#"><h4 class="title"><?php echo $row['name'] ?></h4></a>
<div class="price"><span class="sprice"><?php  echo $row['price'] ?></span> <del class="dprice"></del></div>
</div>
</div><!-- //. single new collections  -->
</div>



<?php
}

?>




                                                
                                                    
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="trendeseller" role="tabpanel" aria-labelledby="trendeseller-tab">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-offer/02.jpg" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">Sportswear</span>
                                                            <a href="#"><h4 class="title">Black Tshirt Brock</h4></a>
                                                            <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-offer/03.jpg" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">shoe</span>
                                                            <a href="#"><h4 class="title">Footwear Dark</h4></a>
                                                            <div class="price"><span class="sprice">$56.00</span> <del class="dprice">$78.00</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-offer/04.jpg" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">accesories</span>
                                                            <a href="#"><h4 class="title">Milo Hoverboard</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-offer/05.jpg" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">hat</span>
                                                            <a href="#"><h4 class="title">Red Yello Hat</h4></a>
                                                            <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$100.00</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-offer/06.jpg" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">Cycle</span>
                                                            <a href="#"><h4 class="title">Minimal Cycle</h4></a>
                                                            <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$1200.00</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-offer/07.jpg" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">Add To Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">bike</span>
                                                            <a href="#"><h4 class="title">Dart Motao Bike</h4></a>
                                                            <div class="price"><span class="sprice">$800.00</span> <del class="dprice">$1000.00</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/02.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">Sportswear</span>
                                                        <a href="#"><h4 class="title">Black Tshirt Brock</h4></a>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/03.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">shoe</span>
                                                        <a href="#"><h4 class="title">Footwear Dark</h4></a>
                                                        <div class="price"><span class="sprice">$56.00</span> <del class="dprice">$78.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/04.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">accesories</span>
                                                        <a href="#"><h4 class="title">Milo Hoverboard</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/05.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">hat</span>
                                                        <a href="#"><h4 class="title">Red Yello Hat</h4></a>
                                                        <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$100.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/06.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">Cycle</span>
                                                        <a href="#"><h4 class="title">Minimal Cycle</h4></a>
                                                        <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$1200.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/07.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">bike</span>
                                                        <a href="#"><h4 class="title">Dart Motao Bike</h4></a>
                                                        <div class="price"><span class="sprice">$800.00</span> <del class="dprice">$1000.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div><!-- //.home six trending seller filter -->
                       </div>
                   </div>
            </div>
        </div>
    </div>
</div>

<!-- best seller home 6 area start -->
<div class="best-seller-home-6-area blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="best-seller-home-6-filter-menu"><!-- best seller home 6 filter menu -->
                    <ul>
                        <li data-filter=".popular">popular item</li>
                        <li class="active" data-filter="*">best sellers</li>
                        <li data-filter=".best">featured item</li>
                    </ul>
                </div><!-- //.best seller home 6 filter menu -->
            </div>
            <div class="col-lg-12 remove-col-padding">
                <div class="best-seller-home-6-masonry" id="best-seller-home-6-masonry"><!-- best seller home 6 masonry -->
                    <div class="col-lg-3 col-md-4 popular home-6-grid-item">
                        <div class="single-product-item-two home-6 ">
                            <div class="img-wrapper">
                                <img src="assets/img/product-offer/11.jpg" alt="product image">
                                <div class="hover">
                                    <a href="#" class="addtocart">Add to cart</a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="category">cycle</a>
                                <h4 class="title">Minimal Cycle</h4>
                                <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 best home-6-grid-item">
                        <div class="single-offer-item-wide"><!-- single offer item tall -->
                            <div class="thumb">
                                <img src="assets/img/product-offer/01-wide.jpg" alt="offered image">
                            </div>
                            <div class="content">
                                    <a href="#"><h4 class="title">Game Console Controller + USB 3.0 Cable</h4></a>
                                    <div class="price"><span class="sprice">$400</span> <del class="dprice">$570</del></div>
                                <span class="subtitle">Hurry Up! Offer ends in:</span>
                                <div class="countdown-area">
                                    <ul>
                                        <li>
                                            <div class="single-countdown-box"><!-- single countdown box -->
                                                <span class="time" id="cwhour">03</span>
                                                <span class="name">Hor</span>
                                            </div><!-- //.single countdown box -->
                                        </li>
                                        <li>
                                            <div class="single-countdown-box"><!-- single countdown box -->
                                                <span class="time" id="cwmin">16</span>
                                                <span class="name">min</span>
                                            </div><!-- //.single countdown box -->
                                        </li>
                                        <li>
                                            <div class="single-countdown-box"><!-- single countdown box -->
                                                <span class="time" id="cwsec">46</span>
                                                <span class="name">Sec</span>
                                            </div><!-- //.single countdown box -->
                                        </li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div><!-- //.single oofer item tall -->
                    </div>
                    <div class="col-lg-3 col-md-4 popular home-6-grid-item">
                        <div class="single-product-item-two home-6">
                            <div class="img-wrapper">
                                <img src="assets/img/product-offer/08.jpg" alt="product image">
                                <div class="hover">
                                    <a href="#" class="addtocart">Add to cart</a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="category">cycle</a>
                                <h4 class="title">Minimal Cycle</h4>
                                <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 popular best home-6-grid-item">
                            <div class="single-product-item-two home-6">
                                <div class="img-wrapper">
                                    <img src="assets/img/product-offer/10.jpg" alt="product image">
                                    <div class="hover">
                                        <a href="#" class="addtocart">Add to cart</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="#" class="category">cycle</a>
                                    <h4 class="title">Minimal Cycle</h4>
                                    <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-4 best home-6-grid-item">
                        <div class="single-product-item-two home-6">
                            <div class="img-wrapper">
                                <img src="assets/img/product-offer/09.jpg" alt="product image">
                                <div class="hover">
                                    <a href="#" class="addtocart">Add to cart</a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="category">cycle</a>
                                <h4 class="title">Minimal Cycle</h4>
                                <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                            </div>
                        </div>
                    </div>

                </div><!-- //.best seller home 6 masonry -->
            </div>
        </div>
    </div>
</div>
<!-- best seller home 6 area end -->

<!-- best seller home 6 area small start -->
<div class="best-seller-home-6-area-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="best-seller-home-6-filter-menu-small"><!-- best seller home 6 filter menu small -->
                    <ul class="nav nav-tabs"  role="tablist">
                            <li class="nav-item">
                                  <a class="nav-link active" id="popular-tab_3" data-toggle="tab" href="#popular_3" role="tab" aria-controls="popular_3" aria-selected="true">popular item</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="bestseller-tab_3" data-toggle="tab" href="#bestseller_3" role="tab" aria-controls="bestseller_3" aria-selected="false">best sellers</a>
                          </li>
                          <li class="nav-item">
                               <a class="nav-link" id="featured-tab_3" data-toggle="tab" href="#featured_3" role="tab" aria-controls="featured_3" aria-selected="false">featured item</a>
                          </li>
                    </ul> 
                </div><!-- //.best seller home 6 filter menu -->
            </div>
            <div class="col-lg-12">
                <div class="best-seller-home-6-masonry-small"><!-- best seller home 6 masonry small -->
                    <div class="tab-content">
                            <div class="tab-pane fade show active" id="popular_3" role="tabpanel" aria-labelledby="popular-tab_3">
                                <div class="row">



                                        <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bestseller_3" role="tabpanel" aria-labelledby="bestseller-tab_3">
                                    <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="featured_3" role="tabpanel" aria-labelledby="featured-tab_3">
                                    <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                    </div>
                            </div>
                    </div>
                </div><!-- //.best seller home 6 masonry small-->
            </div>
        </div>
    </div>
</div>
<!-- best seller home 6 area small end -->

<!-- banner add area start -->
<div class="banner-add margin-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-add-inner"><!-- banner add inner -->
                    <div class="img-wrapper">
                        <img src="assets/img/banner-add/07.jpg" alt="banner add image">
                    </div>
                </div><!-- //.banner add inner -->
            </div>
        </div>
    </div>
</div>
<!-- banner add area end -->

<!-- recently added start -->
<div class="recently-added-area home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="recently-added-nav-menu"><!-- recently added nav menu -->
                    <ul>
                        <li>recently added</li>
                    </ul>
                </div><!-- //.recently added nav menu -->
            </div>
            <div class="col-lg-12">
                <div class="recently-added-carousel" id="recently-added-carousel"><!-- recently added carousel -->
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/09.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">accesories</a>
                            <h4 class="title">Milo Hoverboard</h4>
                            <div class="price"><span class="sprice">$7.00</span> <del class="dprice">$42.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/10.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">Bike</a>
                            <h4 class="title">Dart Moto Bike</h4>
                            <div class="price"><span class="sprice">$30.00</span> <del class="dprice">$45.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/11.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$120.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/12.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">hat</a>
                            <h4 class="title">Red Yello Hat</h4>
                            <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$156.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/03.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$90.00</del></div>
                        </div>
                    </div>
                </div><!-- //. recently added carousel -->
            </div>
        </div>
    </div>
</div>
<!-- recently added end -->

<!-- brand logo carousel area one start -->
<div class="brand-logo-carousel-area-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo-carousel-one" id="brand-logo-carousel-one"><!-- brand logo carousel one -->
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/01.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/02.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/03.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/04.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/05.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/06.png" alt="brand logo image">
                        </a>
                    </div>
                </div><!-- //.brand logo carousel one -->
            </div>
        </div>
    </div>
</div>
<!-- brand logo carousel area one end -->
<!-- feature area one start -->
<section class="feature-one-area home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">get 45% off</span>
                        <h3 class="title">Featured</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/01.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/02.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/03.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/04.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">get 45% off</span>
                        <h3 class="title">Best Seller</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/05.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/06.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/07.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/08.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">Product intro</span>
                        <h3 class="title">Offer Ad</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="banner-add">
                               <a href="#"> <img src="assets/img/banner-add/01.jpg" alt="banner image"></a>
                            </div>
                        </li>
                        <li>
                            <div class="banner-add">
                                <a href="#"><img src="assets/img/banner-add/02.jpg" alt="banner image"></a>
                            </div>
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
        </div>
    </div>
</section>
<!-- feature area one end -->
<?php

include "des_include/footer.php";
}else{
    header("location:login.php");
}
?>


