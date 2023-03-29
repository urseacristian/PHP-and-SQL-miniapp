<?php

	include "db_conn.php";

	
	if(isset($_POST['submit'])){

		if(!empty($_POST['numar_de_inmatriculare'])){

			$numar_de_inmatriculare = $_POST['numar_de_inmatriculare'];


			$query = "delete from users where user_name = '$numar_de_inmatriculare'";
			$run = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if($run){
				   	header("Location: users.php");
				   	exit();
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