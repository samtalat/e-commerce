<?php
$id = $_GET['id'];
include "fun/connection.php";
$select = "SELECT * FROM admin WHERE id = $id";
$result = $conn->query($select);
$row = $result->fetch_assoc(); 


?>


<form action="fun/edit_admin.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
	<label>Username</label>
<input type="text" name="username" class="form-control" value="<?php echo $row ['ad_username'] ?>">
<br>
<label>Password</label>
<input type="Password" name="password" class="form-control">
<br>
<label>e_mail</label>
<input type="email" name="e_mail" class="form-control" value="<?php echo $row ['ad_email'] ?>">
<br>
<label>Phone</label>
<input type="text" name="phone" class="form-control" value="<?php echo $row ['ad_phone'] ?>">
<br>
<label>Job</label>
<input type="text" name="job" class="form-control" value="<?php echo $row ['ad_job'] ?>">
<br>
<input type="submit" name="submit" value="Edit" class="btn btn-primary">



</form>