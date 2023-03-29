<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
		$sql = "SELECT c.nume, c.prenume from angajati c join departamentangajat co on c.angajatid = co.angajatid and co.ore_lucrate IN(select max(ore_lucrate) from departamentangajat)";
		$result = mysqli_query($conn, $sql);
		echo "<h3 font-size: 5px;'>", 'Angajatul cu cele mai multe ore lucrate este:  ', '</h3>';
		foreach ($result as $key) {
			echo "<h3 font-size: 5px;'>",'--->', $key['nume'], ' ', $key['prenume'], '</h3>';
		}
	?>
</body>
</html>