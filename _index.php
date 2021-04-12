<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">
	
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" /> <!--Añadido-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> <!--Añadido-->
	
	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel=stylesheet href="css/style_2.css" type="text/css"/>
	
	<!-- Modernizr -->
	<script src="js/modernizr.js"></script> <!--Añadido-->
	
	<!--CSS Intern-->
	<style type="text/css">


	</style>
	
	<!-- Enllaç a Javascript Extern -->
	<script  type="text/javascript" src="js/javascript.js"></script>
	
	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />
	
	<!-- Títol de la pàgina -->
	<title>Listado de películas</title>

	
</head>
<body>
	<header>
		
		<ul class="header_ul">
			<li class="header_li"><a class="header_a_active" href="#home">Home</a></li>
			<li class="header_li"><a class="header_a" href="urls/login.php">Iniciar sesión</a></li>
			<li class="header_li"><a class="header_a" href="#contact">Contact</a></li>
			<li class="header_li_right">

				<form action='functions/01-start_session.php' method='POST' id='Form_busqueda'> 
					<input type='text' id='Input_busqueda' name='Texto_busqueda' /> 
					<button type='submit' id='Button_busqueda'><img src='img/Search.png' id='Icon_search' /></button>
				</form>

			</li>
		</ul>

		<section>

			
				</section>
			</div>

		</section>

	</header>

	<section class="main_container">
		<article>
			<h1>Listado de películas</h1>

			<?php 	

			session_start();
			
			if(isset($_SESSION['Texto_busqueda']))
			{
				pelliculas_list($_SESSION['Texto_busqueda']);
			}
			else {pelliculas_list('');}
						 
			?>
		</article>

	</section>

	<footer>

		<p>Movie DB - 2021 | by Víctor Maynou Gómez</p>

	</footer>

	

</body>
</html>