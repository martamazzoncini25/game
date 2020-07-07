<DOCTYPE HTML>
<HTML>
    <head>
        <title>Lifegame</title>
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></link>
            <link rel="stylesheet" href="css/pagina.css"></link>
			
    </head> 
   <body> 
           

           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand">BENVENUTO</a>
          
		   <div class="centratutto"> 
              <ul class="navbar-nav mr-auto"> <!-- Questa riga serve a definire lo stile del menu -->
                <li class="nav-item active"> 
                    <a class="nav-link" href="index.html">HOME</a>
                </li>
	            <li class="nav-item">
                    <a class="nav-link" href="pagina1.html">PAGE1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pagina2.html">PAGE2</a>
                </li>
   
              </ul>
             </div>
            </nav>
          
		  
		   
		   
		   
		   
		   
		   
		   
		     	   
		   
		   
		   
		   
		   
		   
		   
	
		   
		    <div class="dimensioneCarosello">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="0" >
            
        <div class="carousel-inner">
		 <form  method='GET' action="salvadati.php" >
		 <input type="date" name="data">
          <div class="carousel-item active"data-interval="0">
		  
           <img src="img/immagine1.jpg" class="d-block w-100" width="50%"height="200%">Foto 1
               		 <textarea  name="biografia1" width="100%" height="50px"></textarea>
          </div>
		  
		  <?php
		  
			for($i = 2; $i < 11; $i++)
			{
		  ?>

          <div class="carousel-item"data-interval="0">
          <img src="img/immagine<?php  echo $i ?>.jpg" class="d-block w-100" width="50%"height="200%" >Foto 2
		 <textarea  name="biografia<?php  echo $i ?>" width="100%" height="50px"></textarea>
          </div>
		  <?php
			}
			
		  ?>

		  </div> 
      </div>
		   
		  
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>

            </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon"></span>
           <span class="sr-only">Next</span>
          </a>
		  <br>
		  </div>
		  
           <br>
		   
	      <div class="centratutto">


	
		  
            <p><input type="text" name="nome">nome</p>
			
                <input type="int" name="foto">foto</p>
            <p>
         <!-- <input name="f" type="radio" value="img/immagine1.jpg"> foto1
           <input name="f" type="radio" value="img/immagine3.jpg"> foto2
           <input name="f" type="radio" value="img/immagine4.jpg"> foto3	
		  <input name="f" type="radio" value="img/immagine5.jpg"> foto4
		  
           <input name="f" type="radio" value="img/immagine5.jpg"> foto5
           <input name="f" type="radio" value="img/immagine6.jpg"> foto6	
		   <input name="f" type="radio" value="img/immagine7.jpg"> foto7
           
		   <input name="f" type="radio" value="img/immagine8.jpg"> foto8
           <input name="f" type="radio" value="img/immagine9.jpg"> foto9
		   <input name="f" type="radio" value="img/immagine10.jpg"> foto10
           </p>-->
           <p>
           <input name="sesso" type="radio" value="maschio"> maschio
           <input name="sesso" type="radio" value="femmina"> femmina
           </p>
           <p>
           <input type="submit" value="inserisci" onclick="index.html"/>
		  
          
	   </div>
	   </form>
	   
    
		
	   


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</html>