<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Quick Rent</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Admin</strong></a>
				<span>|</span>
				<!--<a href="#">Help</a>-->
				<span>|</span>
				<!--<a href="#">Profile Settings</a>-->
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
			    <li><a href="client_requests.php"><span>Hire Requests</span></a></li>
		
			</ul>
		</div>