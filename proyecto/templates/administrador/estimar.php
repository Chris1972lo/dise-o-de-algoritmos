<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estimar2.css">
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" href="css/bootstrap.css"> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>  
<title>estimar</title>
<header>
			<nav>
</section>

  <section class="nav">
				<li><a href="completo.php">Pagina Principal </a></li>

    </h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      <li><a href="">Sedes </a></li>
      </button>
      </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <ul>
    <li><a href="candelaria.php">Candelaria</a></li>
</ul> 
  </div>
  </div>
</section>
			</ul>
	    </nav>
	</header>
  <body>
  <div class="container nt-3">
<table class ="table table-bordered table-striped table-reponsive ">    
<tr>
<td>hora de ingreso</td>
<td>hora de salida</td>
</tr>            
<section class="resultado">
<?php
include ('conexion.php');
$consultasql ="SELECT * FROM candelaria";
$ejecutarconsulta = mysqli_query($link, $consultasql);
while ($row = mysqli_fetch_array($ejecutarconsulta)){
    $hora=$row['hora'];
    $salida=$row['salida'];
    echo "<tr>";
    echo "<td>".$hora."</td>";
    echo "<td>".$salida."</td>";
    echo "</tr>";
}; 
mysqli_close($link);
$resultado=$salida-$hora;
if($resultado>240){
$num2=10000;  
$mul=$resultado*$num2;
echo "has excedido las 4 horas de pago ahora el pago por hora es de 10000 por lo cual el valor de aparcamiento es de: ".$mul;
};
if($resultado<240){
    $num3=55;
    $mul1=$resultado*$num3;
    echo "el valor en dolares a pagar por minuto es de: ".$mul1;
}

?>
</section>
</body>
</html>