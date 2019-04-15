<?php
session_start();
if (isset($_SESSION['username'])) {
	


include "des_include/header.php";
include "des_include/sider_bar.php";
include "des_include/nav.php";
?>
	
		
	

		


 
<?php
error_reporting(E_ALL ^ E_NOTICE);


if (!$_GET['do']) {
	include "include/admin_view.php";

}elseif ($_GET['do']=="edit") {
	include "include/admin_edit.php";

}elseif ($_GET['do']=="message") {
	include "include/message_view.php";
}










?>

	<?php

include "des_include/footer.php";
}else{header("location:login.php");}

	?>