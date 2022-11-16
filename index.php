<?php include "session.php" ?>
<!doctype html>
	<html>
	<head>
		<title> </title>
</head>
<body>
	<h2> Dashboard Admin</h2>
	 Selamat datang ...  <br>
	 <br>
	 <br>
	 <br>
	 <a href="tampil_profil.php">Data Guru</a>
	 <br>
	 <br><a href="logout.php">Logout</a>
	<strong><?php echo $_SESSION['username']; ?></strong>
	<h3><?php echo @$_GET['pesan']?></h3>
</body>
</html>