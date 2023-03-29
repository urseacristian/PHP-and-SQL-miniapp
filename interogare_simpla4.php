<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
	if(isset($_POST['submit'])){

		if(!empty($_POST['capacitate'])){

			$capacitate = $_POST['capacitate'];
			$query = "SELECT a.nume, a.prenume FROM angajati a JOIN departamentangajat au ON a.angajatid = au.angajatid and au.ore_lucrate > '$capacitate'";
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if($result){
					echo "<h3 font-size: 5px;'>", 'Angajatii care mucesc un numar de ore mai mare decat cele introduse sunt: ', '</h3>';
					foreach ($result as $key) {
					echo "<h3 font-size: 5px;'>",'--->', $key['nume'], ' ', $key['prenume'], '</h3>';
					}
			}

			else{

				echo "Not completed";
			}

		}	
		else{
			echo "all fields required";
		}
	}

?>