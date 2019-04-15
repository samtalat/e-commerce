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
             
             <?php
             include "des_fun/connection.php";
             $select_cart = "SELECT * FROM cart";
             $result_cart = $conn->query($select_cart);
             foreach ($result_cart as $row_cart) {
                 ?>
                 <?php
                 $prod_id = $row_cart['prod_id'];
                 $select_product = "SELECT * FROM products WHERE id = $prod_id";
                 $result_product = $conn->query($select_product);
                 $row_product = $result_product->fetch_assoc();



                 ?>



                 <div class="single-product-item"><!-- single product item -->
                <div class="thumb" id="cart_x">
                    <img src="admin/fun/uploads/<?php echo $row_product['img']; ?>" alt="recent review" style="width: 95px;height: 86px;">
                </div>
                <div class="content">
                    <h4 class="title">
                        <?php echo $row_product['name'] ?>(<span id="vvv<?php echo $row_product['id']; ?>"><?php echo $row_cart['count']; ?></span>)
                    </h4>
                    <div class="price"><span style="color: white ">Total</span><span class="pprice"><?php echo $row_cart['total_price'] ?></span> </div>
                    <a delete_id="<?php echo $row_cart['id']; ?>" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->




                 <?php
             }

             ?>
             <div id="divvv"></div>

             

             



           


            



           
            <div class="btn-wrapper">
                <a href="checkout.html" class="boxed-btn">Checkout</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>