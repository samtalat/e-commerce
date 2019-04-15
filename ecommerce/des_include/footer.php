<?php
include "des_fun/connection.php";
$select = "SELECT * FROM site_information";
$result= $conn->query($select);
$row = $result->fetch_assoc();




?>


<!-- footer area one start -->
<footer class="footer-arae-one">
        <div class="footer-top-one blue-bg"><!-- footer top one-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget about">
                            <div class="widget-body">
                                <a href="index.html" class="footer-logo">
                                    <img src="assets/img/logo.png" alt="footer logo">
                                </a>
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details"><?php echo $row['adress'] ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details"><?php echo $row['email'] ?></span>
                                                <span class="details"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details"><?php echo $row['f_phone'] ?><br></span>
                                                <span class="details"><?php echo$row['s_phone'] ?></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Shopping Guide</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="blog.html">--  Blog</a></li>
                                    <li><a href="faq.html">--  Faq</a></li>
                                    <li><a href="#">--  Payment</a></li>
                                    <li><a href="track-orders.html">--  Shipment</a></li>
                                    <li><a href="#">--  Where is my order</a></li>
                                    <li><a href="#">--  Return policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Style Adviser</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="signup.html">--  Your Account</a></li>
                                    <li><a href="#">--  Information</a></li>
                                    <li><a href="#">--  Address</a></li>
                                    <li><a href="#">--  Discount</a></li>
                                    <li><a href="#">--  Order History</a></li>
                                    <li><a href="track-orders.html">--   Order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Information</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="#">--  Sitemap</a></li>
                                    <li><a href="#">--  Search Terms</a></li>
                                    <li><a href="#">--  Advanced Search</a></li>
                                    <li><a href="about.html">--  About us</a></li>
                                    <li><a href="contact.html">--  Contact Us</a></li>
                                    <li><a href="partners.html">--  Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //.footer top one -->
        <div class="copyright-area blue-bg"><!-- copyright area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-inner"><!-- copyright inner -->
                            <div class="left-content-area">
                                <span class="copyright-text">Copyright by@Bigenza - 2018</span>
                            </div>
                            <div class="right-content-area">
                                <ul class="payment-logo">
                                    <li>
                                        <img src="assets/img/payment-logo/01.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/02.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/03.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/04.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/05.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/06.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/07.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/08.png" alt="payment logo">
                                    </li>
                                </ul>
                            </div>
                        </div><!-- //. copyright inner -->
                    </div>
                </div>
            </div>
        </div><!-- //. copyright area -->
    </footer>
    <!-- footer area one end -->

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>    
	<!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- way poin js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:38:48 GMT -->
</html>