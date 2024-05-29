<!DOCTYPE html>
<html>
<head>
	<title>Clase No.4</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src=""></script>
  <link rel="stylesheet" href="{{url_for('static', filename='css/diseno.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.css"> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<title>completo.php</title>
</head>
<body>	
	<header>
			<nav>
</section>

  <section class="nav">
				<li><a href="completo.php">Ingresar cuenta</a></li>
    </h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
      </h2>
      </div>
    </div>
	    </nav>
	</header>
	<br>
	<br>
		<section class="registro">
          <h2>Ingreso de sesion<h2> 
            <hr>
        <div class="row">
<div class="col-md-6 offset-md-3 mb-5">
<form action="/ingresar" method="POST" id="formulario">
<div class="mb-4">
<label class="form-label">Usuario:</label>
<input type="text" class="form-control" name="usuario" required>
<hr>
</div>
<div class="mb-4">
<label class="form-label">Contraseña:</label>
<input type="password" class="form-control" name="contraseña" required>
<hr>
<label class="form-label">Tipo de usuario:</label>
<input type="text" class="form-control" name="categoria" required>
<hr>
<a class="btn btn-primary" type="submit" class="btn btn-primary" id="btn-submit">Iniciar sesion</a>
</form>
</section>
<hr>
<br>
<script>
	const formulario = document.querySelector('#formulario');
  const btnEnviar = document.querySelector('#btn-submit');
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
</section>
</body>
</html>
</body>
</html>