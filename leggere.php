<!DOCTYPE html>
<head>
   <title>Visualizza</title>
</head>

<body>
<table border="2">
	
	<?php
	$mysqli = new mysqli("localhost", "root", "", "life");
	
	$sql = "SELECT * FROM utenti";
	
	$result = $mysqli->query($sql);
	echo "<tr><td>biografia</td><td>Nome</td><td>data</td></tr>";
	  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {	
		echo "<tr><td>".$row["biografia"]. "</td><td>".$row["nome"]."</td><td>".$row["data"]."</td></tr>";	
    }
	} else {
    echo "0 results";
	}
	$mysqli->close();
	

	
	?>
	<br><a href="index.html">Indietro</a>
	
</table>
</body>
</html>