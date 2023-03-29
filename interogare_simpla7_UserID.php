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
			$query = "SELECT a.id FROM users a WHERE  a.user_name = '$capacitate'";
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if($result){
					echo "<h3 font-size: 5px;'>", 'Id-ul userului este: ', '</h3>';
					foreach ($result as $key) {
					echo "<h3 font-size: 5px;'>",'--->', $key['id'], '</h3>';
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