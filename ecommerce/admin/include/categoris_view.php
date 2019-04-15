
<style type="text/css">
  .head
  {background-color: black;}
  .th1
  {color: white;}

</style>




<table class="table">
  <thead class="head">
    <tr>
      <th class="th1" scope="col">Name</th>
      <th class="th1" scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
    <a href="?do=add" class="btn btn-primary">Add new categoris</a>

<?php

include "fun/connection.php";
$select = "SELECT * FROM categoris";
$result = $conn->query($select);
foreach ($result as $row) {

  ?>



<tr>
      <th scope="row"><?php echo $row['name']; ?></th>
      <td>
      <a href="?do=edit&id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit name</a>

      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to delete <?php echo $row['name']; ?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="fun/delete_cat.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete</a>
      </div>
    </div>
  </div>
</div>



      </td>
      
    </tr>







  <?php
}
?>



    
    




  </tbody>
</table>