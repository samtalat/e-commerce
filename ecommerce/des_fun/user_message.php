<?php
include "connection.php";
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date =  date("Y-m-d h:i:sa");

$sql = "INSERT INTO  message ( f_name ,  l_name ,  email ,  subject ,  message , u_date) VALUES ('$f_name' , '$l_name' , '$email' , '$subject' , '$message' , '$date' )";
$result = $conn->query($sql);
header("location:../contact.php");