<?php

	include "db_conn.php";

	
	if(isset($_POST['submit'])){

		if(!empty($_POST['numar_de_inmatriculare']) && !empty($_POST['nou']) ){

			$numar_de_inmatriculare = $_POST['numar_de_inmatriculare'];
			$nou = $_POST['nou'];


			$query = "update biciclete set numar_de_inmatriculare = '$nou' where numar_de_inmatriculare = '$numar_de_inmatriculare'";
			$run = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if($run){
				   	header("Location: bicicleta.php");
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