<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="editar.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="eliminar.css">
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" href="css/bootstrap.css"> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<section class="pagina">   
</body>
</html>
<?php
include('conexion.php');
$placa=$_POST['placa'];
$deletesql="DELETE FROM temporal WHERE placa=".$placa;
$ejecutareliminacion = mysqli_query($link, $deletesql);
mysqli_close($link);
?>
<div class="container">
<div class="alert alert-success">
<button type="button" class="close"data-dismiss="alert" aria-hidden="true">&times;</button>
<strong>Eliminacion completada!!</strong>
<meta http-equiv="refresh" content="3; url=ejemplo.php">
<a href="completo.php">salir</a>
</div>
</div>
</section>