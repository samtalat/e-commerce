

<style type="text/css">
	
.header
{background-color:black;}
.th1
{color: white;}



</style>






<table class="table">
  <thead class="header">
    <tr>
      <th class="th1" scope="col">Username</th>
      <th class="th1" scope="col">First.Name</th>
      <th class="th1" scope="col">Last.Name</th>
      <th class="th1" scope="col">Genader</th>
      <th class="th1" scope="col">Control</th>
    </tr>
  </thead>
  <tbody>

<?php

include "fun/connection.php";
$select = "SELECT * FROM users";
$result = $conn->query($select);

foreach ($result as $row) {
	
?>






<tr>
      <th scope="row"><?php echo $row['u_username'] ;  ?></th>
      <td><?php echo $row['u_F_name'] ;  ?></td>
      <td><?php echo $row['u_L_name'] ;  ?></td>
      <td><?php

       if ($row['u_gender']==1) {
       	echo "Male";
       }elseif ($row['u_gender']==2) {
       	echo "Female";
       }


         ?></td>
      <td>
      <a href="?do=det&id=<?php echo $row['u_id'];?>"  class = "btn btn-primary">Details</a>
      </td>
    </tr>






<?php
}

?>


    
  



  </tbody>
</table>

