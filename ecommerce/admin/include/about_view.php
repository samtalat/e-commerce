
<style type="text/css">
  .left {
    background-color: gray;
  }
  .left_text
  {
    color: white;
  }
</style>


<a href="?do=edit" class="btn btn-primary">EDIT</a>
<table class="table">
  <thead class="black white-text">
<?php
include "fun/connection.php";
$select = "SELECT * FROM about_site";
$result = $conn->query($select);
foreach ($result as $row) {
  ?>

    <tr>
      <th class="left"  scope="col"><p class="left_text">Bachground<br> Image</p></th>
      <th scope="col"><img src="fun/uploads/<?php echo $row['background']; ?>" style="width: 150px;height: 70px;"></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">URL Of Video </p></th>
      <th scope="col"><?php echo $row['url_video']; ?></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">SECTION<br>IMAGE</p></th>
      <th scope="col"><img src="fun/uploads/<?php echo $row['section_image']; ?>" style="width: 150px;height: 70px;"></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">SECTION-SUBJECT </p></th>
      <th scope="col"><?php echo $row['section_subject']; ?></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">SECTION-TITLE </p></th>
      <th scope="col"><?php echo $row['section_title']; ?></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">SECTION-TEXT </p></th>
      <th scope="col"><?php echo $row['section_text']; ?></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">IMAGE-MISSION 1 </p></th>
      <th scope="col"><img src="fun/uploads/<?php echo $row['img1_mission']; ?>" style="width: 150px;height: 70px;"></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">TITLE-MISSION 1 </p></th>
      <th scope="col"><?php echo $row['title1_mission']; ?></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">TEXT-MISSION 1 </p></th>
      <th scope="col"><?php echo $row['text1_mission']; ?></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">IMAGE-MISSION 2 </p></th>
      <th scope="col"><img src="fun/uploads/<?php echo $row['img2_mission']; ?>" style="width: 150px;height: 70px;"></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">TITLE-MISSION 2 </p></th>
      <th scope="col"><?php echo $row['title2_mission']; ?></th>
    </tr>

    <tr>
      <th class="left"  scope="col"><p class="left_text">TEXT-MISSION 2 </p></th>
      <th scope="col"><?php echo $row['text2_mission']; ?></th>
    </tr>





  </thead>
  <tbody>
    







  </tbody>
</table>




  <?php
}




?>


