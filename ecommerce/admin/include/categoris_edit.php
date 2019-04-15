<?php
$id = $_GET['id'];
include "fun/connection.php";
$select = "SELECT * FROM categoris WHERE id =$id";
$result = $conn->query($select);
$row = $result->fetch_assoc();
?>
<form action="fun/categoris_edit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row ['id'];?>">
	<label>Categoris name</label>
<input type="text" name="name" class="form-control" value="<?php echo $row ['name']; ?>">
<input type="submit" name="submit" value="Save new name" class="btn btn-primary">

</form>