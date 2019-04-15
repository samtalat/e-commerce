<style type="text/css">
  
.header
{
  background-color: black;
}
.th1
{
 color:white;
}

</style>
<!-- <a href="?do=add" class="btn btn-primary">Add Admin</a>
 -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Admin
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">you must have username and password of manger</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="fun/login_add_admin.php" method="post">
          <label>Username</label>
       <input type="text" name="username" class="form-control">
          <label>Password</label>
          <input type="Password" name="password" class="form-control">

         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Next" class="btn btn-primary">

        </form>
      </div>
      
    </div>
  </div>
</div>











<table class="table">
  <thead class="header">
    <tr>
      <th class="th1" scope="col">Username</th>
      <th class="th1" scope="col">e_mail</th>
      <th class="th1" scope="col">Phone</th>
      <th class="th1" scope="col">Job</th>
       <th class="th1" scope="col">Control</th>
    </tr>
  </thead>
  <tbody>



<?php

include "fun/connection.php";
$select = "SELECT * FROM admin";
$result = $conn->query($select);

foreach ($result as $row) {
  
?>

<tr>
      <th scope="row"><?php echo $row['ad_username'] ;?></th>
      <td><?php echo $row['ad_email'] ;?></td>
      <td><?php echo $row['ad_phone'] ;?></td>
      <td><?php echo $row['ad_job'] ;?></td>
       <td>
         <a href="?do=edit&id=<?php echo $row['id'];?>" class = "btn btn-primary">Edit</a>
        
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ;?>">
  Delete
</button>
         <!-- <a href="fun/delete_Admin.php?id=<?php echo $row['id']; ?>" class= "btn btn-danger">DELETE</a> -->

       </td>
      

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want delete <?php echo $row['ad_username'] ;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="fun/delete_Admin.php?id=<?php echo $row['id']; ?>" class= "btn btn-danger">DELETE</a>
      </div>
    </div>
  </div>
</div>
    </tr>
    
<?php
}

?>
   
  </tbody>
</table>