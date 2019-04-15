<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Blog</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<!-- blog page content area start -->
<section class="blog-page-content-area">
    <div class="container">
        <div class="row">
            
                <?php
                include "des_fun/connection.php";
                $select = "SELECT * FROM blogs";
                $result = $conn->query($select);
                foreach ($result as $row) {
                    ?>

                   <div class="col-lg-4 col-md-6">
                    <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="admin/fun/uploads/blog/<?php echo $row['image'] ?>" alt="our story">
                    </div>


                    <div class="conent">
                        <span class="time"><?php echo $row['u_date'] ?></span>
                        <a href="?do=view&id=<?php echo $row['id'] ?>"><h4 class="title"><?php echo $row['title_blog'] ?></h4></a>
                        <p><?php
                        if(strlen($row['text_blog'])>100){
                        $row['text_blog']=substr($row['text_blog'],0,100). "....";
                        echo $row['text_blog'];
                            }else{
                                echo $row['text_blog'];
                            }
                            ?>
                             </p>
                    </div>
                    </div>


                </div><!-- //.single our story item -->


                             
 <?php
                }
                    ?>