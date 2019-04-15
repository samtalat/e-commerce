<?php
include "fun/connection.php";
$select = "SELECT * FROM about_site";
$result = $conn->query($select);
$row = $result->fetch_assoc();
?>
<form action="fun/edit_about_site.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>BACKGROUND-IMAGE</label>
	<input type="file" name="background" >

	<label>URL OF VIDEO</label>
	<input type="text" name="url" class="form-control" value="<?php echo $row['url_video']; ?>">

	<label>SECTION IMAGE</label>
	<input type="file" name="section_image">

	<label>SECTION-SUBJECT</label>
	<input type="text" name="section_subject" class="form-control" value="<?php echo $row['section_subject'] ?>">

	<label>SECTION-TITLE</label>
	<input type="text" name="section_title" class="form-control" value="<?php echo $row['section_title'] ?>">

	<label>SECTION-TEXT</label>
	<br>
	<textarea name="section_text" class="form-control"><?php echo $row['section_text'];?></textarea>
	<br>

	<label>IMAGE-MISSION 1</label>
	<input type="file" name="img1_mission">
	<br>

	<label>TITLE-MISSION 1</label>
	<input type="text" name="title1_mission" class="form-control" value="<?php echo $row['title1_mission'] ?>">

	<label>TEXT-MISSION 1</label>
	<textarea name="text1_mission" class="form-control"><?php echo $row['text1_mission'] ?></textarea>
	<br>

	<label>IMAGE-MISSION 2</label>
	<input type="file" name="img2_mission">
	<br>

	<label>TITLE-MISSION 2</label>
	<input type="text" name="title2_mission" class="form-control" value="<?php echo $row['title2_mission'] ?>">

	<label>TEXT-MISSION 2</label>
	<textarea name="text2_mission" class="form-control"><?php echo $row['text2_mission'] ?></textarea>



	<input type="submit" name="submit" value="EDIT" class="btn btn-primary">








</form>