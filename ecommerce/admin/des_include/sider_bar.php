<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php foreach ($_SESSION as $key => $username) {
	echo $username;
} ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=""><a href="index.php"><em class="fa fa-user-circle">&nbsp;</em> Admin</a></li>

			<li><a href="users.php"><em class="fa fa-address-book">&nbsp;</em> Users</a></li>

			<li><a href="categoris.php"><em class="fa fa-archive">&nbsp;</em> Categoris</a></li>

			<li><a href="Products.php"><em class="fa fa-product-hunt">&nbsp;</em> Products</a></li>

			<li><a href="site_information.php"><em class="fa fa-address-card">&nbsp;</em> Site Information</a></li>

			<li><a href="about_site.php"><em class="fa fa-twitch">&nbsp;</em> About Site</a></li>

			<li><a href="blogs.php"><em class="fa fa-th">&nbsp;</em> BLOGS</a></li>
			
			<li><a href="fun/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->