<?php
$id = $_GET['id'];
include "fun/connection.php";
$select = "SELECT * FROM users WHERE u_id = $id";
$result = $conn->query($select);
$row = $result->fetch_assoc();

?>




<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col"><?php echo $row ['u_username']; ?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">First Name</th>
      <td><?php echo $row ['u_F_name']; ?></td>
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><?php echo $row ['u_L_name']; ?></td>
    </tr>
    <tr>
      <th scope="row">e-mail</th>
      <td><?php echo $row ['u_email']; ?></td>
    </tr>
    <tr>
      <th scope="row">Phone</th>
      <td><?php echo $row ['u_phone']; ?></td>
    </tr>
    <tr>
      <th scope="row">Age</th>
      <td><?php echo $row ['u_age']; ?></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php if ($row['u_gender']==1) {
       	echo "Male";
       }elseif ($row['u_gender']==2) {
       	echo "Female";
       }; ?></td>
    </tr>
    <tr>
      <th scope="row">Adress</th>
      <td><?php echo $row ['u_adress']; ?></td>
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $row ['u_date']; ?></td>
    </tr>

    
   
  </tbody>
</table>

<a href="users.php" class="btn btn-primary">Back</a>

<form action="fun/delete_user.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row ['u_id']; ?>">
	<input type="submit" name="submit" value="Delete" class="btn btn-danger">
</form>
