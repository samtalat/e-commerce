<?php
$id_product = $_GET['id'];
 include "fun/connection.php";
 $select_product = "SELECT * FROM products WHERE id = $id_product";
 $result_product = $conn->query($select_product);
 $row_product = $result_product->fetch_assoc();


?>


<form action="fun/edit_product.php" method="post" enctype="multipart/form-data">
<label>Name of product</label>
<input type="text" name="name_product" class="form-control" value="<?php echo $row_product['name'] ?>">
<label>Price of product</label>
<br>
<input type="number" name="price_product"  value="<?php echo $row_product['price']?>">
<br>
<label>Count of product</label>
<br>
<input type="number" name="count_product" value="<?php echo $row_product['count'] ?>">
<br>
<label>Code of product</label>
<input type="text" name="code_product" value="<?php echo $row_product['code_number'] ?>" class="form-control">
<label>Description of Product</label>
<textarea class="form-control" name="Description_product"><?php echo $row_product['description'] ?></textarea>
<label>Image of product</label>
<input type="file" name="img_product">
<br>
<input type="submit" name="submit" class="btn btn-primary" value="EDIT">

</form>