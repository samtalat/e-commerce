
<style type="text/css">
	.black{
background-color: black;
	}
     .th1{
     	color: white;
     }
</style>

<h1>Message</h1>

<table class="table">
  <thead class="black">


<?php
$id = $_GET['id'];

include "fun/connection.php";
$update = "UPDATE message SET view = '1' WHERE id = $id";
$result_update = $conn->query($update);

$select = "SELECT * FROM message WHERE id = $id";
$result = $conn->query($select);
foreach ($result as $row) {
	?>

<form action="fun/delete_message.php" method="post">
  <input type="hidden" name="id" value="<?php echo $row ['id']; ?>">
  <input type="submit" name="submit" value="Delete Message" class="btn btn-danger">
</form>

<tr>
      <th class="th1" scope="col">e_mail : <?php echo $row['email'] ;?></th>
      <th class="th1" scope="col"></th>
      <th class="th1" scope="col"></th>
      <th class="th1" scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name : <?php echo $row['f_name'];echo " "; ;echo $row ['l_name']; ?></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Subject : <?php echo $row['subject']; ?></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Message : <br> <?php echo $row['message']; ?></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>





	<?php
}
	?>







    






  
  </tbody>
</table>
