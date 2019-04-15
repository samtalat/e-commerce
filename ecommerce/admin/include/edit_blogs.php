<?php
include "fun/connection.php";
$id = $_GET['id'];
$select = "SELECT * FROM blogs WHERE id = $id";
$result = $conn->query($select);
$row = $result->fetch_assoc();
?>
<form action="fun/edit_blog.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	<label>IMAGE-BLOG</label>
	<input type="file" name="img">
	<br>
	<label>BLOG-TITLE</label>
	<input type="text" name="title_blog" class="form-control" value="<?php echo $row['title_blog'] ?>">
	<br>
	<label>BLOG-TEXT</label>
    <textarea name="text_blog" class="form-control"><?php echo $row['text_blog'] ?></textarea>	
     <br>
     <input type="submit" name="submit" class="btn btn-primary" value="EDIT">
     


</form>