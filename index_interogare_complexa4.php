<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
		$sql = "SELECT nume, prenume from angajati
				where DataAngajarii = (SELECT min(DataAngajarii)
				from angajati)";
		$result = mysqli_query($conn, $sql);
		echo "<h3 font-size: 5px;'>", 'Cel mai vechi angajat este: ', '</h3>';
		foreach ($result as $key) {
			echo "<h3 font-size: 5px;'>",'--->', $key['nume'], ' ', $key['prenume'],'</h3>';
		}
	?>
</body>
</html>
	