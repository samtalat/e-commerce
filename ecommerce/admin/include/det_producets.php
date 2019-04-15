<?php
$id = $_GET['id'];
include "fun/connection.php";
$select = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($select);
$row = $result->fetch_assoc();

?>




<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product name</th>
      <th scope="col"><?php echo $row ['name']; ?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Price</th>
      <td><?php echo $row ['price']; ?></td>
    </tr>
    <tr>
      <th scope="row">Count</th>
      <td><?php echo $row ['count']; ?></td>
    </tr>
    <tr>
      <th scope="row">Code_number</th>
      <td><?php echo $row ['code_number']; ?></td>
    </tr>
    <tr>
      <th scope="row">Image</th>
      <td><img src="fun/uploads/<?php echo $row['img'] ; ?> "style="width: 150px;height: 70px;"></td>
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $row ['date']; ?></td>
    </tr>
    
    <tr>
      <th scope="row">Rate</th>
      <td><?php echo $row ['rate']; ?></td>
    </tr>
    <tr>
      <th scope="row">Category</th>
      <td>
     <?php
    $cat_id = $row['id_cat'];
    include "fun/connection.php";
    $select_cat = "SELECT * FROM categoris WHERE id = $cat_id";
    $result = $conn->query($select_cat);
    $row = $result->fetch_assoc();
    echo $row['name'];





     ?>





      </td>
    </tr>

    <tr>
      <th scope="row">Discraption</th>
      <td><?php echo $row ['description']; ?></td>
    </tr>
   
  </tbody>
</table>

<a href="products.php" class="btn btn-primary">Back</a>


<form action="fun/delete_pro.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="submit" name="submit" value="Delete" class="btn btn-danger">
</form>
