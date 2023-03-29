<?php 
include "db_conn.php"

 ?>
<?php include "includes/header.php" ?>
<body>
     <link rel="stylesheet" type="text/css" href="style.css">
     <?php include "includes/nav.php"?>
<?php
        $sql = "SELECT DISTINCT a.nume, a.prenume FROM angajati a JOIN intretinuti au ON a.angajatid = au.angajatid";
        $result = mysqli_query($conn, $sql);
        echo "<h3 font-size: 5px;'>", 'Angajatii ce au intretinuti sunt:  ', '</h3>';
        foreach ($result as $key) {
            echo "<h3 font-size: 5px;'>",'--->', $key['nume'], ' ', $key['prenume'], '</h3>';
        }
    ?>
</body>
</html>
    