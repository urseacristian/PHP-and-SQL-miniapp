<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
		$sql = "SELECT c.name as name,  (
					select count(*) from  biciclete co
					where c.id = co.id)
    				as inchiriata
    			from users c";

		$result = mysqli_query($conn, $sql);
		echo "<h3 font-size: 5px;'>", 'Numarul de biciclete inchiriate ale fiecarui user: ', '</h3>';
		foreach ($result as $key) {
			echo "<h3 font-size: 5px;'>",'--->', $key['name'], ' ', ' ----> ', $key['inchiriata'], '</h3>';
		}
	?>
</body>
</html>
	