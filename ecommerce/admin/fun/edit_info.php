<?php
include "connection.php";
$id = $_POST['id'];
$num_support = $_POST['num_support'];
$email = $_POST['email'];
$f_num = $_POST['f_num'];
$s_num = $_POST['s_num'];
$adress = $_POST['adress'];
if ($_FILES['logo']['name'])
 
{
	$logo_name = $_FILES['logo']['name'];
$logo_tmp = $_FILES['logo']['tmp_name'];
move_uploaded_file($logo_tmp, "uploads/$logo_name");
$update = "UPDATE site_information SET logo='$logo_name' WHERE id = $id";
$conn->query($update);
}
if ($_FILES['homeimg']['name'])
 
{
	$homeimg_name = $_FILES['homeimg']['name'];
$homeimg_tmp = $_FILES['homeimg']['tmp_name'];
move_uploaded_file($homeimg_tmp, "uploads/$homeimg_name");
$update = "UPDATE site_information SET home_img='$homeimg_name' WHERE id = $id";
$conn->query($update);
}




$update = "UPDATE  site_information  SET  num_support =$num_support, email ='$email', f_phone ='$f_num', s_phone ='$s_num', adress ='$adress' WHERE id = $id";
$result = $conn->query($update);
header("location:../site_information.php");