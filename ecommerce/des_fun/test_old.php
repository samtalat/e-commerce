<?php
session_start();
             include "connection.php";
             $id = $_POST['id_x'];
             $price = $_POST['price_x'];
             $id_user = $_SESSION['id'];





             $insirt = "INSERT INTO cart (prod_id , user_id , count , total_price ) VALUES ($id,$id_user,1 ,$price)";
	         $conn->query($insirt);


             $select_cart = "SELECT * FROM cart WHERE prod_id = $id AND user_id = $id_user";
             $result_cart = $conn->query($select_cart);

             $row_cart = $result_cart->fetch_assoc();
             
                 
                 $prod_id = $row_cart['prod_id'];
                 $select_product = "SELECT * FROM products WHERE id = $prod_id";
                 $result_product = $conn->query($select_product);
                 $row_product = $result_product->fetch_assoc();

                 

                echo '
                 <div class="single-product-item"><!-- single product item -->
                <div class="thumb" id="cart_x">
                    <img src="admin/fun/uploads/'.$row_product['img'].'" alt="recent review" style="width: 95px;height: 86px;">
                </div>
                <div class="content">
                    <h4 class="title">'. $row_product['name'] .'</h4>
                    <div class="price"><span class="pprice"><span style="color: white">TOTAL  </span>'. $row_cart['total_price'] .'</span> </div>
                    <a href="des_fun/remove_cart.php?id='. $row_cart['id'] .'" class="btn btn-danger">Remove</a>
                </div>
            </div>
            <div id="divvv"></div><!-- //. single product item -->';







                
           
