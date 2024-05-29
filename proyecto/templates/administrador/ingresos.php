<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ingresos.css">
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" href="css/bootstrap.css"> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <title>Ingresos.php</title>
</head>
<body>
<header>
			<nav>
</section>

  <section class="nav">
				<li><a href="ingresos.php">Ingresos </a></li>
				<li><a href="estimar.php">Estimar pago </a></li>
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
  <li><a href="">Candelaria</a></li>
  <li><a href="">Chapinero</a></li>
  <li><a href="">Usaquen</a></li>
  <li><a href="">Bosa</a></li>
  <li><a href="">Kennedy</a></li>
  <li><a href="">Barrios Unidos</a></li>
  <li><a href="">Puente aranda</a></li>
</ul> 
  </div>
  </div>
</section>
			</ul>
	    </nav>
	</header>
  <section class="ingresos">  
<form method="POST" action="ingresos.php">
<label class="form-label">Ingrese el resultado de la mensualidad de :</label>
<input type="number" class="form-control" name="pedido">
<hr>
<br>
<br>
<br>
<button class="btn btn-primary" type="submit" class="btn btn-primary" id="btn-submit">ver resultado</a>
</form>
</section>
<section class="resultado">
<?php
include ('conexion.php');
$consultasql ="SELECT * FROM horacan";
$ejecutarconsulta = mysqli_query($link, $consultasql);
while ($row = mysqli_fetch_array($ejecutarconsulta)){
    $nombres=$row['nombres'];
    $apellidos=$row['apellidos'];
    echo "<tr>";
    echo "<td>".$nombres."</td>";
    echo "<td>".$apellidos."</td>";
    echo "</tr>";

}; 
mysqli_close($link);
$num1=$_POST['pedido'];
if($num1>"60"){
$num2=10000;  
$mul=$num1*$num2;
echo "has excedido la hora de pago ahora el pago por hora es de 10000 por lo cual el valor de aparcamiento es de: ".$mul;
};
if($num1<"60"){
    $num2=55;
    $mul=$num1*$num2;
    echo "el valor en dolares a pagar por minuto es de: ".$mul;
}
?>
</section>
</body>
</html>