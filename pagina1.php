<DOCTYPE HTML>
<HTML>
    <head>
        <title>Lifegame</title>
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></link>
            <link rel="stylesheet" href="./css/pagina.css">
			
    </head> 
   <body> 
           

           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand">BENVENUTO</a>
          
		   <div class="centratutto"> 
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <!-- Anche qyesta riga serve a definire lo stile del menu -->
                    <a class="nav-link" href="index.html">HOME</a>
                </li>
	            <li class="nav-item">
                    <a class="nav-link" href="pagina1.php">PAGE1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pagina2.html">PAGE2</a>
                </li>
   
              </ul>
             </div>
            </nav>
           <!-- Creo le card per immetterci i valori inseriti dall'utente -->
		    <!-- prima card -->
	     
	   <div class="allineacard"> 
		   <?php
				$mysqli = new mysqli("localhost", "root", "", "life");
	
	            $sql = "SELECT * FROM utenti";
		       $result = $mysqli->query($sql);
				while($row = $result->fetch_assoc())
				{
		   ?>
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?php echo $row['foto'];  ?>
					<div class="card-body">
						<h5 class="card-title">Nome Utente <?php echo $row['nome']; ?></h5>
							<p class="card-text">
									<br>Data : <?php echo $row['data']; ?>
									<br>Biografia : <?php echo $row['biografia']; ?>
									<br>Sesso: <?php echo $row['sesso']; ?>
							</p>
						<a type="submit" class="btn btn-primary">Cancella</a>
					</div>
			</div>
			<?php
				}
		   ?>
		</div>
         
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>