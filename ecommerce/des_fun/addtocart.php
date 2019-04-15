<?php
session_start();
if (isset($_SESSION['username'])) {
	include "connection.php";

	$id = $_POST['id_x'];
	$price = $_POST['price_x'];
	$id_user = $_SESSION['id'];
     
 //     $select = "SELECT * FROM cart WHERE prod_id = $id AND user_id = $id_user";
 //     $result = $conn->query($select);
 //     $count = $result->num_rows;
     
 //     if ($count>0) {
     	
 //     	$updata = "UPDATE  cart  SET count = count + 1 , total_price = total_price + $price WHERE prod_id = $id AND user_id = $id_user";
 //     	$result = $conn->query($updata);




 //     }else{

	// $insirt = "INSERT INTO cart (prod_id , user_id , count , total_price ) VALUES ($id,$id_user,1 ,$price)";
	// $conn->query($insirt);}

	$sql_cart = "SELECT * FROM cart WHERE user_id = $id_user";
 $result_cart = $conn->query($sql_cart);
 $count = $result_cart->num_rows;

 echo $count;







}