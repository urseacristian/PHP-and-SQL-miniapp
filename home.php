<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <?php include "includes/header.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <?php include "includes/nav.php" ?>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>