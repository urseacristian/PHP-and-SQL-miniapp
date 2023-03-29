<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
$sql = "SELECT * from biciclete";
$result = mysqli_query($conn, $sql);
foreach ($result as $key) {
	echo "<h3 font-size: 5px;'>", 'inchiriata -> ', $key['inchiriata'], '</h3>';
	echo "<h3 font-size: 5px;'>",'bicicletaid -> ', $key['bicicletaid'], '</h3>';
	echo "<h3 font-size: 5px;'>", 'id -> ', $key['id'], '</h3>';
	echo "<h3 font-size: 5px;'>",'angajatid -> ', $key['angajatid'], '</h3>';
	echo "<h3 font-size: 5px;'>", 'numar_de_inmatriculare -> ', $key['numar_de_inmatriculare'], '</h3>';
	echo "<h3 font-size: 5px;'>", 'capacitate -> ', $key['capacitate'], '</h3>';
	echo '<br>';
	echo '<br>';
}
?>
</body>
</html>
