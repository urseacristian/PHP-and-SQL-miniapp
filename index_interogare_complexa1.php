<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
		$sql = "SELECT c.nume as nume, c.prenume as prenume, (
					select count(*) from  intretinuti co
					where c.angajatid = co.angajatid)
    				as angajatid
    			from angajati c";

		$result = mysqli_query($conn, $sql);
		echo "<h3 font-size: 5px;'>", 'Numarul de intretinuti ai fiecarui angajat: ', '</h3>';
		foreach ($result as $key) {
			echo "<h3 font-size: 5px;'>",'--->', $key['nume'], ' ', $key['prenume'],' ----> ', $key['angajatid'], '</h3>';
		}
	?>
</body>
</html>
	