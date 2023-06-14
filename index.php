<!DOCTYPE html>
<html lang="en">

<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BUSCADOR DE SOCIOS</title>
</head>

<body>
	<div class="container">
		<br />

		<h2 class="text-center">Buscador de Socios</h2>
		<div class="row justify-content-center">

			<div class="col-12 col-md-10 col-lg-8">
				<form class="card card-sm">
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" id="search" type="text" placeholder="Search topics or keywords">
						</div>
						<!--end of col-->
						<!-- <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div> -->
						<!--end of col-->
					</div>
				</form>
				<table class="table" id="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido</th>
							<th scope="col">DNI</th>
							<th scope="col">Correo</th>
							<th scope="col">Ciudad</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<div>

					<h2>API</h2>


				</div>

				<?php


				$url = 'https://api.chucknorris.io/jokes/random';

				// Inicia una sesión CURL
				$ch = curl_init();

				// Configura las opciones para la sesión CURL
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

				// Ejecuta la sesión CURL y almacena el resultado en una variable
				$resultado = curl_exec($ch);

				// Cierra la sesión CURL
				curl_close($ch);

				// Decodifica el resultado JSON en un array asociativo
				$chiste = json_decode($resultado, true);

				?>

			</div>

			<div>

			
			</div>

			<!--end of col-->
		</div>
	</div>


</body>

</html>

<!------ Include the above in your HEAD tag ---------->