<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
     <link rel="stylesheet" type="text/css" href="style.css">
     <?php include "includes/nav.php"?>
<?php
    if(isset($_POST['submit'])){

        if(!empty($_POST['departament'])){

            $departament = $_POST['departament'];
            $query = "SELECT a.nume, a.prenume FROM angajati a JOIN departamentangajat h ON a.angajatid = h.angajatid JOIN departament d ON h.departamentid = d.departamentid and d.nume_departament = '$departament'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if($result){
                    echo "<h3 font-size: 5px;'>", 'Angajatii care lucreaza in departamentul introdus sunt: ', '</h3>';
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