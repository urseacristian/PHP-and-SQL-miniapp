<?php

	include "db_conn.php";

	
	if(isset($_POST['submit'])){

		if(!empty($_POST['user_name']) && !empty($_POST['password']) ){

			$user_name = $_POST['user_name'];
			$password = $_POST['password'];


			$query = "update users set password = '$password' where user_name = '$user_name'";
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