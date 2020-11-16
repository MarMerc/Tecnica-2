<!DOCTYPE html>
<html>
<head>
	<title>Tecnica N°2"</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!--Fuentes-->
	<link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
	<!--Recursos-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--MarMerc Disegno - Desarrollo Web-->
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
	<!-- Menu -->
	<div class="w3-bar w3-red navbar-fixed-top">
		<a href="#" class="w3-bar-item w3-button titulo"> Inicio</a>
		<a href="vistas/historia.php" class="w3-bar-item w3-button titulo"> Historia</a>
		<a href="vistas/directivos.php" class="w3-bar-item w3-button titulo"> Directivos</a>
		<a href="vistas/orientaciones.php" class="w3-bar-item w3-button titulo"> Orientaciones</a>
		<a href="vistas/novedades.php" class="w3-bar-item w3-button titulo"> Novedades</a>  
		<a href="vistas/campus.php" class="w3-bar-item w3-button titulo"> Campus</a> 
		<a href="salir" class="w3-bar-item w3-button titulo"> Salir</a> 
	</div>
	<header class="cabecera">
		<div class="contenedor-cab">
			<a href="index.php" class="link-logo">
				<img class="portada" src="img/cabecera1.png" width="1400" height="650">
			</a>
		</div>
		<br>
	</header>
	<section class="contenedor-nove">
		<div class="conten-nov">
			<h2 class="titulo" id="text5">Novedades de nuestra Grandiosa T2</h2>
			<br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item active">
						<img src="img/Electromecanica.jpg" alt="ECO YPF" style="width:70%;">
						<div class="carousel-caption">
							<h3>Proyecto ECO YPF</h3>
							<p>Ganamos la Beca!</p>
						</div>
					</div>

					<div class="item">
						<img src="img/particulaDios.jpg" alt="La particula de Dios" style="width:100%;">
						<div class="carousel-caption">
							<h3>Concurso de Fisica</h3>
							<p>Tema: La Particula de Dios</p>
						</div>
					</div>

					<div class="item">
						<img src="img/Electronica.jpg" alt="New York" style="width:100%;">
						<div class="carousel-caption">
							<h3>Robotica</h3>
							<p>Competencia en Parana</p>
						</div>
					</div>

				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<footer>
		<div class="contenedor-footer">
			<div class="jumbotron">
				<div class="col-sm-4" id="accesos">
					<span></span>
				</div>
				<div class="col-sm-4" id="contactos">
					<h1 id="text5">Contactanos</h1>
					<h4>Telefono:</h4>
					<p>381 4522469</p>
					<h4>Ubicacion:</h4>
					<p>Pasaje Garcia 75</p>
					<h4>Email</h4>
					<p>EscuelaTec2@Tec2.com</p>
				</div>
			</div>
		</div>
	<h2 class="titulo-final">&copy; MarMerc Disegno Web</h2>
	</footer>
</body>
</html>
