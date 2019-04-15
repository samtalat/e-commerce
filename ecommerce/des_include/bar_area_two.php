
<?php
include "des_fun/connection.php";
$select = "SELECT * FROM site_information";
$result = $conn->query($select);
$row = $result->fetch_assoc();


?>


<!-- support bar area two start -->
<div class="support-bar-two bg-white home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content">
                    <a href="index.php" class="logo main-logo">
                        <img src="admin/fun/uploads/<?php echo $row['logo'] ?> "style="width: 150px;height: 70px;"" alt="logo">
                    </a>
                </div>
                <div class="right-content">
                    <ul>
                        <li>
                            <div class="support-search-area">
                                <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index-3.html" class="search-form">
                                    <div class="form-element has-icon">
                                        <input type="text" class="input-field" placeholder="Search your keyword" id="searchh">
                                        <div class="the-icon">
                                            <select class="category select selectpicker">
                                                <option value="0">All Category</option>
                                                <option value="0">Men's Wear</option>
                                                <option value="0">Women's Wear</option>
                                                <option value="0">Kids Wear</option>
                                                <option value="0">Sports Wear</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email Us</h4>
                                    <span class="details"><?php echo $row['email']  ?></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Free Support</h4>
                                    <span class="details"><?php echo $row['num_support'] ?></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- support bar area two end -->
