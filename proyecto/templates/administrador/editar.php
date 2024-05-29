<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="editar.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="editar.css">
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" href="css/bootstrap.css"> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<hr> 
<section class="pagina">

<div class="row">
 <h2>Editar</h2>
 <label for="">valores a editar para editar: </label>
<div class="col-md-6 offset-md-3 mb-5">
<form action="database.php" method="get" id="editar">
<label class="form-label"><h2>Marca:</h2></label>
<input type="text" class="form-control" name="marca">
<label class="form-label"><h2>Fotografia:</h2></label>
<input type="file" class="form-control" name="fotografia">
<label class="form-label"><h2>Placa:</h2></label>
<input type="text" class="form-control" name="placa">
<br>
<p>por favor colocar la misma placa que este en el formulario para editar</pl>
<button type="submit" class="btn btn-primary" id="btn-editar">editar</button>
</section>
</form>
</div>
<script>  
	const formulario = document.querySelector('#editar');
  const btnEnviar = document.querySelector('#btn-editar');
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
<?php
include('conexion.php');
$marca=$_GET['marca'];
$fotografia=$_GET['fotografia'];
$placa=$_GET['placa'];
$editsql = "UPDATE temporal SET marca='$marca',fotografia='$fotografia' WHERE placa='$placa'";
$ejecutareditacion = mysqli_query($link, $editsql);
mysqli_close($link);
?>
<a href="ejemplo.php">salir</a>
</body>
</html>
</form>
