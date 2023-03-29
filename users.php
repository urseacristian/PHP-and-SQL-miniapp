<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style1.css">
	 <?php include "includes/nav.php"?>
<?php
$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);
foreach ($result as $key) {
	echo "<h3 font-size: 5px;'>", 'name -> ', $key['name'], '</h3>';
	echo "<h3 font-size: 5px;'>", 'id ->', $key['id'], '</h3>';
	echo "<h3 font-size: 5px;'>",'user_name ->', $key['user_name'], '</h3>';
	echo "<h3 font-size: 5px;'>", 'password -> ', $key['password'], '</h3>';
	echo '<br>';
}
?>
</body>
</html>