<?php
include "connection.php";
$name = $_POST['name'];
$insert = "INSERT INTO  categoris ( name ) VALUES ('$name')";
$result = $conn->query($insert);
header("location:../categoris.php");