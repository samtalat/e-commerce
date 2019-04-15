<?php
include "fun/connection.php";
$select = "SELECT * FROM site_information";
$result = $conn->query($select);
$row = $result->fetch_assoc();



?>


<form action="fun/edit_info.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	<label>Number of support</label>
	<input type="text" name="num_support" class="form-control" value="<?php echo $row['num_support'] ?>">
	<label><strong>email</strong></label>
	<input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
	<label>First number</label>
	<input type="text" name="f_num" class="form-control" value="<?php echo $row ['f_phone'] ?>">
	<label>Second number</label>
	<input type="text" name="s_num" class="form-control" value="<?php echo $row['s_phone'] ?>">
	<label>Adress</label>
    <input type="text" name="adress" class="form-control" value="<?php echo $row['adress'] ?>">
    <label>Logo</label>
<input type="file" name="logo" >
<label>Home Background</label>
<input type="file" name="homeimg" >
<br>
<input type="submit" name="submit" class="btn btn-primary" value="Edit">




</form>