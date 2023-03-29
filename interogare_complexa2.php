<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php include "includes/nav.php"?>
<?php
	if(isset($_POST['submit'])){

		if(!empty($_POST['numar'])){

			$numar = $_POST['numar'];
			$query = "SELECT c.name as Name, (
						select count(*) from  biciclete co
						where c.id = co.id
    					)
    					as id
    					from users c
    					having id > '$numar'";
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if($result){
					echo "<h3 font-size: 5px;'>", 'Utilizatorii care au adus mai multe biciclete in firma decat numarul introdus sunt: ', '</h3>';
					foreach ($result as $key) {
					echo "<h3 font-size: 5px;'>",'--->', $key['Name'], '</h3>';
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