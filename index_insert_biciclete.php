 <!DOCTYPE html>
 <html>
 <head>
 	<title>Insert</title>
 	<link rel="stylesheet" type="text/css" href ="style.css">
 </head>
 <body>
 	<form action = "add_biciclete.php" methosd = "post">

 	<label>Inchiriata 0/1 (Fals/Adevarat)</label>
 	<input type="text" name="inchiriata" placeholder="Inchiriata (recomandat: 0)"><br>

       <label>Id (id-ul userului care adauga bicicleta)</label>
       <input type="text" name="id" placeholder="ID"><br>

        <label>Angajat Id (responsabilul de bicicleta)</label>
        <input type="text" name="angajatid" placeholder="Angajat ID"><br>
	
        <label>Numar de inmatriculare</label>
        <input type="text" name="numar_de_inmatriculare" placeholder="Numar de inmatriculare"><br>

        <label>Capacitate</label>
        <input type="text" name="capacitate" placeholder="Capacitate"><br>


 		<button type = "submit" name = "submit">Submit</button>
 	</form>
 </body>
 </html>