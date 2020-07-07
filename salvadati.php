
<?php

    
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $foto = $_POST['foto'];
	$biografia = $_POST['biografia'];
    $sesso= $_POST['sesso'];
   $conn = new mysqli("localhost", "root", "", "life");
//se è connesso il database
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
	//inserisco i dati nel database
   $sql = "INSERT INTO utenti (nome,data,foto,biografia,sesso)
VALUES ( '".$nome . "', '". $data ."', '" . $foto . "', '" . $biografia ."', '" . $sesso ."')";	
	
		
        $conn->query($sql);
			//chiudo la connessione
			 $conn->close();
			
			
           
?>

<meta http-equiv="refresh" content="0;URL=index.html">
