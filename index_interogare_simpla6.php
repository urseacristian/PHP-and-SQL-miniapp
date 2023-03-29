<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
		$sql = "SELECT d.nume_departament FROM departament d JOIN departamentangajat h on d.departamentid = h.departamentid JOIN angajati a ON h.angajatid = a.angajatid  and a.Salariu IN(select max(Salariu) from angajati)";
		$result = mysqli_query($conn, $sql);
		echo "<h3 font-size: 5px;'>", 'Departamentul unde se gaseste salariul maxim este: ', '</h3>';
		foreach ($result as $key) {
			echo "<h3 font-size: 5px;'>",'--->', $key['nume_departament'],'</h3>';
		}
	?>
</body>
</html>
	