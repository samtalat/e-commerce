
<style type="text/css">
  .head
  {background-color: black;}
  .th1
  {color: white;}

</style>

<a href="?do=add" class="btn btn-primary">Add new product</a>




<table class="table">
  <thead class="head">
    <tr>
      <th class="th1" scope="col">Name</th>
      <th class="th1" scope="col">Image</th>
      <th class="th1" scope="col">Price</th>
      <th class="th1" scope="col">Control</th>
      
      
    </tr>
  </thead>
  <tbody>
<?php
include "fun/connection.php";
$select = "SELECT * FROM products";
$result = $conn->query($select);

foreach ($result as $row) {

  ?>




    <tr>
      <th scope="row"><?php echo $row ['name'] ;?></th>
      <td><img src="fun/uploads/<?php echo $row['img'] ; ?> "style="width: 150px;height: 70px;"></td>
      <td><?php echo $row ['price'] ;?></td>
      <td>
        <a href="?do=det&id=<?php echo $row['id']; ?>" class="btn btn-primary" >Detalies</a>
        <a href="?do=edit&id=<?php echo $row['id']; ?>" class="btn btn-primary" >Edit</a>




      </td>
    </tr>






  <?php
}
?>



  
  </tbody>
</table>