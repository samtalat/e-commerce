<?php
include "connection.php";
$search = $_POST['search'];
$select_search = "SELECT * FROM products WHERE name LIKE '%".$search."%'";
$result_search = $conn->query($select_search);
foreach ($result_search as $key_search) {
	
   echo '<div class="col-lg-4 col-md-6">
<div class="single-new-collection-item"><!-- single new collections -->
<div class="thumb">
<img src="admin/fun/uploads/'. $key_search['img'] .'" alt="new collcetion image" style="width: 300px;height: 200px;">
<div class="hover">

<a data_id="'.$key_search['id'].'" class="addtocart">Add To Cart</a>
</div>
</div>
<div class="content">
  <span class="category">
     
  </span>
<a href="#"><h4 class="title">'. $key_search['name'] .'</h4></a>
<div class="price"><span class="sprice">'. $key_search['price'] .'</span> <del class="dprice"></del></div>
</div>
</div><!-- //. single new collections  -->
</div>
';


}