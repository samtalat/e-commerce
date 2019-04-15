<?php
session_start();
if (isset($_SESSION['username'])) {
	


include "des_include/header.php";
include "des_include/sider_bar.php";

?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
			</div>
		</div><!--/.row-->



<?php
error_reporting(E_ALL ^ E_NOTICE);
if (!$_GET['do']) {
	include "include/user_view.php";

}elseif ($_GET['do']='det') {
	include "include/user_detalies.php";
}elseif ($_GET['do']=="message") {
	include "include/message_view.php";
}












?>









	<?php

include "des_include/footer.php";
}else{header("location:login.php");}

	?>