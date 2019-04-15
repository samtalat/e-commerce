<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin panal </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php"><span>Sam</span>company</a>
				<ul class="nav navbar-top-links navbar-right">

					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.php">
						<em class="fa fa-envelope"></em><span class="label label-danger">
							<?php 
						include "fun/connection.php";
						$select = "SELECT * FROM message WHERE view = 'o'";
						$reslut = $conn->query($select);
						$count = $reslut->num_rows;
						echo $count;

						?>
							
						</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li >

								<div class="dropdown-messages-box" >

                                  <?php

                                include "fun/connection.php";
                                $select = "SELECT * FROM message ORDER BY id DESC  LIMIT 3;";
                                $reslut = $conn->query($select);
                                foreach ($reslut as $row) {
                                	?>


                                <div class="message-body">
                                	 <?php
                                    if ($row['view']=='1') {
                                    	?>
                                    	<strong style="color: blue">SEEN</strong>

                                    	<?php
                                    }else{
                                    	?>
                                    	<strong style="color: green">UNSEEN</strong>
                                    <?php } 


                                    	
                                   
                    

                                	 ?>



                                	<!-- <a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a> -->
										<a href="?do=message&id=<?php echo $row['id'] ?>"><strong><?php echo $row['f_name'] ;?></strong> send a new message.</a>
									<br /><small class="text-muted"><?php echo $row['u_date'] ; ?></small></div>



                                	<?php
                                  }
                                  ?>
									



								</div>

							</li>
							<li class="divider"></li>
							
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="message.php">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>