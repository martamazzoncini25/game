<DOCTYPE HTML>
<HTML>
<head>
        <title>Lifegame</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></link>
   <link rel="stylesheet" href="css/file1.css">
  </head> 
 <body>  
  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">BENVENUTO</a>
 
 <div class="centratutto">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
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





<div>
 <div>
   <img src="img/immagine2.jpg"></img>
 
</div>
 <div class="centratutto">
    <form>
	 
	
     <?php
	 $biografia = $_POST['biografia'];
	 echo "<textarea>";
	 echo $biografia;
	 echo "</textarea>";
	 ?>
    </form>
  </div>
 </div>   
 
  

 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>