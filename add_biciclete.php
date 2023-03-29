<?php

	include "db_conn.php";

	
	if(isset($_POST['submit'])){

		if(!empty($_POST['inchiriata']) && !empty($_POST['id']) && !empty($_POST['angajatid']) && !empty($_POST['numar_de_inmatriculare']) && !empty($_POST['capacitate'])){

			$inchiriata1 = $_POST['inchiriata'];
			$id1 = $_POST['id'];
			$angajatid1 = $_POST['angajatid'];
			$numar_de_inmatriculare1 = $_POST['numar_de_inmatriculare'];
			$capacitate1 = $_POST['capacitate'];

			$query = "insert into biciclete(inchiriata, id, angajatid, numar_de_inmatriculare, capacitate) values ('$inchiriata1', '$id1', '$angajatid1', '$numar_de_inmatriculare1', '$capacitate1')";
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
    else{
				   	header("Location: bicicleta.php");
				   	exit();
			}
?>