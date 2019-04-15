<table class="table">
  <thead>
<tr>
      <th scope="col">NAME</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">DATE</th>
      <th scope="col">STATUE</th>
    </tr>
<?php

include "fun/connection.php";
$select = "SELECT * FROM message ORDER BY id DESC";
$result = $conn->query($select);
foreach ($result as $row) {
	?>

<tr>
      <th scope="col"><a href="?do=message&id=<?php echo $row['id'] ?>"><?php echo $row['f_name']; echo " ";echo $row['l_name']; ?></a></th>
      <th scope="col"><a href="?do=message&id=<?php echo $row['id'] ?>"><?php echo $row['subject']; ?></a></th>
      <th scope="col"><?php echo $row['u_date']; ?></th>
      <th scope="col"><?php
      if ($row['view']=='1') {
        ?>
                                      <strong style="color: blue">SEEN</strong>

                                      <?php
      }else{
                                      ?>
                                      <strong style="color: green">UNSEEN</strong>
                                    <?php }

         ?></th>
    </tr>





	<?php
}
?>
    
  </thead>

</table>