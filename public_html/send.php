<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'dgomezs@gmail.com';
$asunto = 'Contacto desde Daniel Gómez F1 Team';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto - Daniel Gómez F1 Team</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../lib/slider/responsiveslides.css">
	<link rel="stylesheet" href="../lib/slider/demo/themes/themes.css">
	<link rel="stylesheet" href="../lib/fontello/css/fontello.css">
	<link href="../css/style.css" media="screen" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<div class="header-home">
			<a href="index.html">
				<img src="../img/logo.png" alt="Logo tipo de Daniel Gómez F1 Team">
				<h1>Daniel Gómez F1 Team</h1>
			</a>
		</div>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu" class="icon-menu"></label>
		<nav class="header-menu">
			<span></span>
			<ul>
				<li class="submenu">
					<a href="#">Noticias<span class="icon-down expand"></span></a>
					<ul class="push">
						<li><a href="news.html" class="border-top">Archivo de noticias</a></li>
						<li><a href="../blog/" class="border-bottom">Blog</a></li>
					</ul>
				</li>
				<li><a href="drivers.html">Pilotos</a></li>
				<li><a href="teams.html">Escuderías</a></li>
				<li><a href="circuits.html">Circuitos</a></li>
				<li><a href="#" class="private">Área privada</a></li>
			</ul>
		</nav>
		<div class="clearfix"></div>
	</header>
	<main>
	<div class="clearfix"></div>
		<h2>¡Muchas gracias!</h2>
		<section class="contact1">
			<article class="contact">
				<?php 
				if(mail($para, $asunto, utf8_decode($mensaje), $header)){
					echo "<p>Tu opinión es importante.</p><p>Gracias por rellenar el formulario.</p><p>Se ha enviado de forma correcta.</p><p>Pulse para <a href=\"index.html\">volver al inicio</a>.</p>";
				}
				else{
					echo "<p>Su mensaje NO fue enviado. Es una pena, seguro que querías decir algo superinteresante.<p>Pulsa para <a href=\"index.html\">volver al inicio</a>.</p>";
				}
				?>
				<div class="contact-img">
					<img src="../img/f1.png" alt="Logo de la F1 en la página Contacto">
				</div>
			</article>
		</section>
	</main>
	<footer id="footer">
		<nav class="footer-social">
			<ul>
				<li><a href="" class="icon-facebook"></a></li>
				<li><a href="" class="icon-twitter"></a></li>
				<li><a href="" class="icon-instagram"></a></li>
			</ul>
		</nav>
		<nav class="footer-corporate">
			<ul>
				<li><a href="hola.html">Hola</a></li>
				<li><a href="contacto.html">Contacto</a></li>
				<li><a href="aviso.html">Aviso Legal</a></li>
				<li><a href="privacidad.html">Política de privacidad</a></li>
			</ul>
		</nav>
	</footer>
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="../lib/equalize.min.js"></script>
	<script src="../lib/slider/responsiveslides.min.js"></script>
	<script src="../lib/scrollup/dist/jquery.scrollUp.min.js"></script>
  <script src="../js/script.min.js"></script>
</body>
</html>