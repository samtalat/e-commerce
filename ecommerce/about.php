
<?php
include "des_include/bar_area_one.php";
include "des_include/bar_area_two.php";
include "des_include/nav_bar.php";
include "des_fun/connection.php";
$select = "SELECT * FROM about_site";
$result = $conn->query($select);
$row = $result->fetch_assoc();

?>
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

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg"  style="background-image: url(admin/fun/uploads/<?php echo $row['background']; ?>);">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">About</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- counter area start -->
<section class="counter-area rubik">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="singloe-counter-item"><!-- single counter item -->
                    <div class="cunter-num">
                        <div class="count-wrap">
                            <span class="count">11</span>k <span class="sup">+</span>
                        </div>
                    </div>
                    <h4 class="title rubik">Project done</h4>
                </div><!-- //.single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="singloe-counter-item"><!-- single counter item -->
                    <div class="cunter-num">
                        <div class="count-wrap">
                            <span class="count">20</span>k <span class="sup">+</span>
                        </div>
                    </div>
                    <h4 class="title rubik">Cup Coffee</h4>
                </div><!-- //.single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="singloe-counter-item"><!-- single counter item -->
                    <div class="cunter-num">
                        <div class="count-wrap">
                            <span class="count">50</span>k <span class="sup">+</span>
                        </div>
                    </div>
                    <h4 class="title rubik">Happy Clients</h4>
                </div><!-- //.single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="singloe-counter-item"><!-- single counter item -->
                    <div class="cunter-num">
                        <div class="count-wrap">
                            <span class="count">2</span>k <span class="sup">+</span>
                        </div>
                    </div>
                    <h4 class="title rubik">Get awards</h4>
                </div><!-- //.single counter item -->
            </div>
        </div>
    </div>
</section>
<!-- counter area end -->

<!-- about content area start -->
<section class="about-content-area">
    <div class="video-btn">
        <a href="<?php echo $row['url_video']; ?>" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 remove-col-padding" >
                <div class="left-content-area left-content-bg" style="background-image: url(admin/fun/uploads/<?php echo $row['section_image']; ?>);"></div>
            </div>
            <div class="col-lg-6 remove-col-padding">
                <div class="right-content-area rubik gray-bg">
                    <span class="subtitle"><?php echo $row['section_subject']; ?></span>
                    <h2 class="title rubik"><?php echo $row['section_title'] ?></h2>
                    <p><?php echo $row['section_text']?></p>
                    
                    <div class="btn-wrapper">
                        <a href="#" class="boxed-btn">get started now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about content area end -->

<!-- about bottom content area start -->
<section class="about-bottom-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-about-bottom-item"><!-- single about bottom item -->
                    <div class="thumb">
                        <img src="admin/fun/uploads/<?php echo $row['img1_mission'] ?>" alt="about bottom image">
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo $row['title1_mission'] ?></h4>
                        <p><?php echo $row['text1_mission'] ?></p>
                    </div>
                </div><!-- //.single about bottom item -->
            </div>
            <div class="col-lg-6">
                <div class="single-about-bottom-item"><!-- single about bottom item -->
                    <div class="thumb">
                        <img src="admin/fun/uploads/<?php echo $row['img2_mission'] ?>" alt="about bottom image">
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo $row['title2_mission'] ?></h4>
                        <p><?php echo $row['text2_mission'] ?></p>
                    </div>
                </div><!-- //.single about bottom item -->
            </div>
        </div>
    </div>
</section>
<!-- about bottom content area end -->

<!-- team member area start -->
<section class="team-member-area half-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title-two rubik white"><!-- section title two -->
                    <span class="subtitle">Angels</span>
                    <h2 class="title">Our Team</h2>
                </div><!-- //. section title two -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-carousel" id="team-carousel"><!-- team member carusel -->
                    <div class="sinlge-team-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/team/01.jpg" alt="team member image">
                            <div class="hover">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Yankee Mikado </h4>
                            <span class="post">Ceo & designer</span>
                        </div>
                    </div>
                    <div class="sinlge-team-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/team/02.jpg" alt="team member image">
                            <div class="hover">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Mikado Hossian</h4>
                            <span class="post">Ceo & designer</span>
                        </div>
                    </div>
                    <div class="sinlge-team-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/team/03.jpg" alt="team member image">
                            <div class="hover">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Lukan Brinskon</h4>
                            <span class="post">Ceo & designer</span>
                        </div>
                    </div>
                    <div class="sinlge-team-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/team/04.jpg" alt="team member image">
                            <div class="hover">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Alexis Franchis</h4>
                            <span class="post">Ceo & designer</span>
                        </div>
                    </div>
                </div><!-- //.team member carusel -->
            </div>
        </div>
    </div>
</section>
<!-- team member area end -->

<!-- testimonial area start -->
<section class="testimonial-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title-two rubik extra"><!-- section title two -->
                    <span class="subtitle">Testimonials</span>
                    <h2 class="title">Happy Clients</h2>
                </div><!-- //. section title two -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel" id="testimonial-carousel"><!-- team member carusel -->
                    <div class="sinlge-testimonial-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/testimonial/01.jpg" alt="team member image">
                        </div>
                        <div class="content">
                            <h4 class="title">Mikado Yankee</h4>
                            <span class="post">Ceo & designer</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>   
                        </div>
                    </div>
                    <div class="sinlge-testimonial-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/testimonial/02.jpg" alt="team member image">
                        </div>
                        <div class="content">
                            <h4 class="title">Mikado Yankee</h4>
                            <span class="post">Ceo & designer</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>      
                        </div>
                    </div>
                    <div class="sinlge-testimonial-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/testimonial/03.jpg" alt="team member image">
                        </div>
                        <div class="content">
                            <h4 class="title">Mikado Yankee</h4>
                            <span class="post">Ceo & designer</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>    
                        </div>
                    </div>
                    <div class="sinlge-testimonial-member"><!-- single team member -->
                        <div class="thumb">
                            <img src="assets/img/testimonial/04.jpg" alt="team member image">
                        </div>
                        <div class="content">
                            <h4 class="title">Mikado Yankee</h4>
                            <span class="post">Ceo & designer</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>     
                        </div>
                    </div>
                </div><!-- //.team member carusel -->
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->

<!-- our story area start -->
<section class="our-story-area">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-8">
                <div class="section-title">
                    <span class="subtitle rubik">Latest Posts</span>
                    <h2 class="title rubik">Read Our Stories</h2>
                </div>
           </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/01.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                       <a href="#"> <h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/02.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                        <a href="#"><h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/03.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                        <a href="#"><h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
        </div>
    </div>
</section>
<!-- our story area end -->
<?php

include "des_include/footer.php";

?>