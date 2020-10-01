<html>
	<head>
		<title>PHP Bank - Admin</title>
		<link rel="stylesheet" type="text/css" href="../style/index.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<style>body { font-family: Consolas, sans-serif; }</style>
	</head>
	<body>
		<?php
			session_start();
		?>
		<nav id="topMenu">
			<ul>
				<li><a class="menuLink" href="?page=member">Member</a></li>
				<li><a class="menuLink" href="?page=log">Log</a></li>
				<li><a class="menuLink" href="?page=logout">Logout</a></li>
			</ul>
		</nav>

		<br><br>

		<nav id="content">
			<?php
				if($_GET['page']=="member"){
					include 'information_members.php';
				}
				if($_GET['page']=="log"){
					include 'information_logs.php';
				}
				if($_GET['page']=="logout"){
					include 'admin_logout.php';
				}
			?>
		</nav>
	</body>
</html>