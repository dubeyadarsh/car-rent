<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
                            <a href="index.php"> <h1 class="logo"> Quick Rent ⚡</h1></a>	
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
				
					
					<a href="account.php">Client Login</a>
					<a href="login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
							
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>