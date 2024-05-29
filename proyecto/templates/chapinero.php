<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="chapinero.css">
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" href="css/bootstrap.css"> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{url_for('static', filename='css/chapinero.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <header>
			<nav>
</section>

  <section class="nav">
				<li><a href="completo.php">Ingresar cuenta</a></li>

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
  <li><a href="chapinero.php">Chapinero</a></li>
  <li><a href="Usaquen.php">Usaquen</a></li>
  <li><a href="Bosa.php">Bosa</a></li>
  <li><a href="kennedy.php">Kennedy</a></li>
  <li><a href="barrios.php">Barrios Unidos</a></li>
  <li><a href="puente.php">Puente aranda</a></li>
</ul> 
  </div>
  </div>
</section>
			</ul>
	    </nav>
	</header>
</head>
<body>
<br>
	<br>
		<section class="registro">
    <h2>Bienvenido a la sede de Chapinero<h2> 
          <h2>Registro<h2> 
            <hr>
        <div class="row">
<div class="col-md-6 offset-md-3 mb-5">
<form action="datachapinero.php" method="POST" id="formulario">
<div class="mb-4">
<label class="form-label">orden:</label>
<input type="text" class="form-control" name="orden">
<hr>
</div>
<div class="mb-4">
<label class="form-label">Marca:</label>
<input type="text" class="form-control" name="marca">
<hr>
<label class="form-label">cantidad:</label>
<input type="text" class="form-control" name="cantidad">
<hr>
<label class="form-label">Nombres:</label>
<input type="text" class="form-control" name="nombres">
<hr>
<label class="form-label">Apellidos:</label>
<input type="text" class="form-control" name="apellidos">
<hr>
<label class="form-label">Cedula:</label>
<input type="text" class="form-control" name="cedula">
<hr>
<label class="form-label">Fecha de ingreso:</label>
<input type="date" class="form-control" name="fecha">
<hr>
<label class="form-label">Valor del servicio:</label>
<input type="number" class="form-control" name="valor2" value="50000" readonly="readonly">
<hr>
<label class="form-label">Hora de ingreso:</label>
<input type="time" class="form-control" name="hora" value="<?php date_default_timezone_set('America/Bogota'); echo( date('H:i', time()));?>"> 
<hr>
<label class="form-label">Hora de salida:</label>
<input type="time" class="form-control" name="salida" readonly="readonly" value="<?php date_default_timezone_set('America/Bogota'); echo( date('H:i', time()));?>">
<button href="chapinero.php" class="btn btn-primary" type="submit" class="btn btn-primary" id="subir">Submit</button>
</form>
</section>
<br>
<script>
	const formulario = document.querySelector('#formulario');
  const btnEnviar = document.querySelector('#subir');
  // agregamos el evento de escucha al botón
  btnEnviar.addEventListener('click', function(event) {
    // detenemos el envío del formulario
    event.preventDefault();
    // mostramos el mensaje de confirmación
    swal({
      title: "Formulario",
      text: "Enviaras tus datos a la base",
      icon: "success",
      buttons: ["Cancelar", "Enviar"],
      dangerMode: true,
    })
    .then((enviar) => {
      if (enviar) {      
        formulario.submit();
      }
    });
  }); 
</script>
</div>
</div>
</form>
<div class="container">
<section class="tabla"> 
<div class="container nt-3">
<table class ="table table-bordered table-striped table-reponsive ">    
<tr>
        <td>Nombres</td>
        <td>apellidos</td>
        <td>cedula</td>
        <td>placa</td>
        <td>marca</td>
        <td>fecha de ingreso</td>
        <td>fotografia</td>
        <td>mensualidad</td>
        <td>hora de entrada</td>
        <td>hora de salida</td>
</tr>
</div>
</section>
<section class="resultado">
<?php
include ('conexion.php');
$consultasql ="SELECT * FROM chapinero";
$ejecutarconsulta = mysqli_query($link, $consultasql);
while ($row = mysqli_fetch_array($ejecutarconsulta)){
    $nombres=$row['nombres'];
    $apellidos=$row['apellidos'];
    $cedula=$row['cedula'];
    $placa=$row['placa'];
    $marca=$row['marca'];
    $fecha=$row['fecha'];
    $fotografia=$row['fotografia'];
    $valor2=$row['valor2'];
    $hora = $row['hora'];
    $salida =$row['salida'];
    echo "<tr>";
    echo "<td>".$nombres."</td>";
    echo "<td>".$apellidos."</td>";
    echo "<td>".$cedula."</td>";
    echo "<td>".$placa."</td>";
    echo "<td>".$marca."</td>";
    echo "<td>".$fecha."</td>";
    echo "<td>".$fotografia."</td>";
    echo "<td>".$valor2."<td>";
    echo "<td>".$salida."<td>";
    echo "<td>".$hora."<td>";
    echo "</tr>";
};
settype($hora,"integer");
settype($salida,"integer");
echo "el valor de la hora ingresada es de:" .$hora;
echo "el valor de la hora de salida es de:".$salida;
$resultado=($salida-$hora);
if($resultado>240){
  $mul=$resultado*10000;
  echo "has excedido las 4 horas de pago ahora el pago por hora es de 10000 por lo cual el valor de aparcamiento es de: ".$mul;
  };
  if($resultado<240){
      $mul1=$resultado*55;
      echo "el valor en dolares a pagar por minuto es de: ".$mul1;
  };
  mysqli_close($link);
 ?>

</body>
</html>