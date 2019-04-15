
<style type="text/css">
  .head
  {background-color: black;}
  .th1
  {color: white;}

</style>




<table class="table">
  <thead class="head">
    <tr>
      <th class="th1" scope="col">IMAGE</th>
      <th class="th1" scope="col">TITLE</th>
      <th class="th1" scope="col">TEXT</th>
      <th class="th1" scope="col">DATE</th>
      <th class="th1" scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
    <a href="?do=add" class="btn btn-primary">Add new categoris</a>

<?php

include "fun/connection.php";
$select = "SELECT * FROM blogs";
$result = $conn->query($select);
foreach ($result as $row) {

  ?>



    <tr>
      <th scope="row"><img src="fun/uploads/<?php echo $row['image']; ?>" style="width: 150px;height: 70px;"></th>

      <th scope="row"><?php echo $row['title_blog'] ?></th>

      <th scope="row"><?php echo $row['text_blog'] ?></th>

      <th scope="row"><?php echo $row['u_date'] ?></th>

      <th scope="row"><a href="?do=edit&id=<?php echo $row['id'] ?>" class="btn btn-primary"> EDIT BLOG</a></th>
      
      
    </tr>







  <?php
}
?>



    
    




  </tbody>
</table>