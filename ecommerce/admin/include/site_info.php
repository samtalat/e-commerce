
<style type="text/css">
  .left {
    background-color: gray;
  }
  .left_text
  {
    color: white;
  }
</style>

<a href="?do=edit" class="btn btn-primary">Edit</a>

<table class="table">
  <thead class="black white-text">

<?php
include "fun/connection.php";
$select = "SELECT * FROM site_information";
$result = $conn->query($select);
foreach ($result as $row) {
 ?>

<tr>
      <th class="left"  scope="col"><p class="left_text">Number of<br> support</p></th>
      <th scope="col"><?php echo $row['num_support']; ?></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="left" scope="row"><p class="left_text"><strong>e_mail</strong></p></th>
      <td><strong><?php echo $row['email'] ?></strong></td>
      
    </tr>
    <tr>
      <th class="left" scope="row"><p class="left_text">first phone</p></th>
      <td><strong><?php echo $row['f_phone'] ?></strong></td>
      
    </tr>
    <tr>
      <th class="left" scope="row"><p class="left_text">Second phone</p></th>
      <td><strong><?php echo $row['s_phone'] ?></strong></td>
      
    </tr>
        <tr>
      <th class="left" scope="row"><p class="left_text">Adress</p></th>
      <td><strong><?php echo $row['adress'] ?></strong></td>
      
    </tr>
     <tr>
      <th class="left" scope="row"><p class="left_text">Logo</p></th>
      <td><strong><img src="fun/uploads/<?php echo $row['logo'] ?> "style="width: 150px;height: 70px;"> </strong></td>
      
    </tr>
    <tr>
      <th class="left" scope="row"><p class="left_text">Home Background</p></th>
      <td><strong><img src="fun/uploads/<?php echo $row['home_img'] ?> "style="width: 150px;height: 70px;"></strong></td>
      
    </tr>




 <?php
}
?>

    



  </tbody>
</table>

