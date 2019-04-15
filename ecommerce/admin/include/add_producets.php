




<form action="fun/add_product.php" method="post" enctype="multipart/form-data">
	
<label>Name of product</label>
<input type="text" name="name" class="form-control">
<label>Price</label>
<input type="text" name="price" class="form-control">
<label>Count</label>
<input type="text" name="count" class="form-control">
<label>code number</label>
<input type="text" name="code" class="form-control">
<label>Description</label>
<br>
<textarea name="disc"></textarea>
<br>
<select class="form-control" name="cat">
	<option disabled="" selected="">choose category</option>
	<?php 
	include "fun/connection.php";
	$sql = "SELECT * FROM categoris";
	$result =$conn->query($sql);
	foreach ($result as $key) {
		
	

	?>
	<option value="<?php echo $key['id']; ?> "><?php echo $key['name']; ?></option>
<?php } ?>
</select>
<label>Image</label>
<input type="file" name="img" ">


<input type="submit" name="submit" value="ADD NEW" class="btn btn-primary">


</form>