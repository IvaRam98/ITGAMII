<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<title>ITGAM II</title>
	<meta name="author" content="TecNM">
	<meta name="description" content="Página del Tecnológico Nacional de México">
	<meta name="keywords"
		content="TecNM, Instituto Tecnológico Nacional de México, Tec, Tecnológico Nacional de México, Universidad" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="copyright" content="TecNM" />
	<meta name="robots" content="ALL">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/favicon/tecnm.ico" />

	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

	<!-- Mis estilos -->
	<link rel="preload" href="css/estilos.css" as="style">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="preload" href="css/styles.css" as="style">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Normalizar -->
	<link rel="preload" href="css/normalize.css" as="style">
	<link rel="stylesheet" href="css/normalize.css">

	<!-- Iconos con Font Awesome -->
	<link rel="stylesheet" href="assets/files/main/css/fa-svg-with-js.css">
	<link rel="stylesheet" href="iconos/iconos.css">

	<!-- Se agrega para poder usar las fuentes en el css -->
	<link rel="stylesheet" href="assets/files/main/css/estilo-compresion.min.css">
	<link rel="stylesheet" href="assets/files/main/css/jssorStyle.css">

	<link href="css/noticarrusel/slick-theme.css" rel="stylesheet" />
	<link href="css/noticarrusel/slick.css" rel="stylesheet" />

	<!-- Estilo del carrucel -->
	<style>
		.sitios {
			width: 50%;
			margin: 0px auto;
		}

		.principal {
			width: 100%;
			/*height: 60vh;*/
			margin: 0px 0px;
			margin-bottom: 0px;
		}

		.slick-slide {
			margin: 0px 0px;
		}

		.anexo>.slick-prev:before {
			/* Flecha azul - lado izquierdo */
			background: url('img/flechas/izquierda_gris.png');
			background-size: contain;
			color: transparent;
		}

		.anexo>.slick-next:before {
			/* Flecha azul - lado derecho */
			background: url('img/flechas/derecha_gris.png');
			background-size: contain;
			color: transparent;
		}

		#noticias>.slick-prev:before {
			/* Flecha azul - lado izquierdo */
			background: url('img/flechas/izquierda_azul.png');
			background-size: contain;
			color: transparent;
		}

		#noticias>.slick-next:before {
			/* Flecha azul - lado derecho */
			background: url('img/flechas/derecha_azul.png');
			background-size: contain;
			color: transparent;
		}

		.slick-slide {
			transition: all ease-in-out .3s;
			opacity: 1;
		}

		.slick-active {
			opacity: 1;
		}

		.slick-current {
			opacity: 1;
		}


		.carousel-item {
			width: 100vw;
			height: 60vh;
			min-height: 10%;
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
			background: round;
		}

		.card-columns .card {
			display: inline-block;
			width: 100%;
		}

		.card-img-top {
			width: 100%;
			height: 200px !important;
			border-top-left-radius: calc(0.25rem - 1px);
			border-top-right-radius: calc(0.25rem - 1px);
		}

		@media (max-width: 400px) {
			.carousel-item {
				height: 30vh;
			}
		}

		@media (max-width: 500px) {
			.carousel-item {
				height: 25vh;
			}
		}
	</style>

	<!-- Desface -->
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(document).ready(function () {
			setTimeout(function () {
				$("#desface_noticias").fadeIn(1000);
			}, 50);
		});
		$(document).ready(function () {
			setTimeout(function () {
				$("#desface").fadeIn(1000);
			}, 500);
		});
		$(document).ready(function () {
			setTimeout(function () {
				$("#desface_footer").fadeIn(1000);
			}, 500);
		});
		$(document).ready(function () {
			setTimeout(function () {
				$("#desface_footer_gob").fadeIn(1000);
			}, 1000);
		});
	</script>

	<!-- Sub Menú -->
	<link rel="stylesheet" href="css/bootnavbar.css">

	<!-- Menú Fijo -->
	<style>
		#main_navbar,
		#main_navbar2 {
			width: 100%;
		}

		.menuazul,
		.menublanco {
			position: fixed;
		}

		.menublanco {
			top: 45px;
			z-index: 1001;
		}

		.menuazul {
			top: 82px;
			z-index: 1000;
		}

		@media (max-width: 700px) {
			.menuazul {
				top: 75px;
			}
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		posicionarMenu2();

		$(window).scroll(function () { posicionarMenu2(); });

		function posicionarMenu2() {
			var altura_del_header = $('#barraGobmx').outerHeight(true);
			var altura_del_menu_blanco = $('#main_navbar2').outerHeight(true);

			if ($(window).scrollTop() >= altura_del_header) {
				$('#main_navbar2').addClass('menublanco');
				$('.wrapper').css('margin-top', (altura_del_menu_blanco) + 'px');
			} else {
				$('#main_navbar2').removeClass('menublanco');
				//$('.wrapper').css('margin-top', '0');
			}
		}

		posicionarMenu();

		$(window).scroll(function () { posicionarMenu(); });

		function posicionarMenu() {
			var altura_del_menu_blanco = $('#main_navbar2').outerHeight(true);
			var altura_del_menu = $('#main_navbar').outerHeight(true);

			if ($(window).scrollTop() >= altura_del_menu_blanco) {
				$('#main_navbar').addClass('menuazul');
				$('.wrapper').css('margin-top', (altura_del_menu) + 'px');
			} else {
				$('#main_navbar').removeClass('menuazul');
				//$('.wrapper').css('margin-top', '0');
			}
		}
	</script>
	<!--  -->

	<!-- Traductor -->
	<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'es',
				autoDisplay: false,
				gaTrack: true,
				gaId: 'wewe',
				layout: google.translate.TranslateElement.InlineLayout.SIMPLE
			}, 'google_translate_element');
		}
	</script>

</head>

<body>

	<!-- MENU GOBERNACIÓN -->
	<header id='header'>
		<nav class="navbar fixed-top" id="barraGobmx" style="background:#0b231e; position: fixed;">
			<div class="container u-noPaddingContainer">
				<a class="navbar-brand d-none d-lg-block" style="padding-left: 8px;" href="https://www.gob.mx/"
					target='_blank'>
					<img loading='lazy' src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg"
						style="width: 8rem; margin-left: -15%;" height="29" alt="Gobierno de México">
				</a>
				<div class="barraGobmx-enlaces">
					<a href="https://www.gob.mx/gobierno" title="Gobierno" class="nav-link text-white" target='_blank'>
						Gobierno
					</a>
					<a href="https://www.gob.mx/participa" title="Participación Ciudadana" class="nav-link text-white"
						target='_blank'>
						Participa
					</a>
					<a href="https://datos.gob.mx" title="Datos Abiertos" class="nav-link text-white" target='_blank'>
						Datos
					</a>
					<a class='d-none' href="https://www.gob.mx/busqueda" target='_blank'>
						<span class="sr-only"> Búsqueda </span>
						<svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false"
							data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 512 512" data-fa-i2svg="">
							<path fill="currentColor"
								d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
							</path>
						</svg>
					</a>
				</div>
			</div>
		</nav>
	</header>

	<!-- Encabezado principal -->
	<div class="u-noPaddingContainer contenedorGobierno">
		<div class="container-cabecera">

			<div class="row no-gutters">
				<div class="col-md-12" style="max-width:60%">
					<div class="d-inline-block text-left">
						<a href="https://www.gob.mx/sep" target="_blank" id="pleca_1" class='d-none d-xl-inline'>
							<img loading='lazy' src="img/logos/logo educacion.png" alt="Gobierno de México"
								class="plecaGob gob">
						</a>
						<a href="index.php" target="_blank" id="pleca_2">
							<img loading='lazy' src="img/logos/itgamii.png" alt="Educación" class="plecaGob gob">
						</a>
						<a href="https://www.tecnm.mx/" id="pleca_3">
							<img loading='lazy' src="img/logos/tecnm.jpg" alt="TecNM" class="plecaTECNM"
								style="width:20%;height:auto; min-width:80px" />
						</a>
					</div>
				</div>
			</div>

			<!-- Opciones de accesibilidad -->
			<div class="contenedorAccesibilidad" style="top: 5%;">
				<div class="idiomas text-right">
					<a href="https://globalpage-prod.webex.com/join?surl=https%3A%2F%2Fsignin.webex.com%2Fcollabs%2F%23%2Fmeetings%2Fjoinbynumber%3FTrackID%3D%26hbxref%3D%26goid%3Dattend-meeting"
						title="Microsoft Teams" target="_blank">
						<img loading='lazy' style="height:8%;width:7%" src="img/encabezado/microsoft_teams.png"
							alt="MT">
					</a>
					<a href="https://login.microsoftonline.com/?whr=tecnm.mx" title="Correo Institucional"
						target="_blank">
						<img loading='lazy' style="height:8%;width:7%" src="img/encabezado/correo-icono.png"
							alt="Buzón">
					</a>
					<a href="pdf/Calendario_Academico_2019-2020.pdf" title="Calendario Académico" target="_blank">
						<img loading='lazy' style="height:6%;width:7%" src="img/encabezado/calendario-icono.png"
							alt="Calendario Académico">
					</a>

					<!-- Traductor -->
					<a href='index?idioma=mandarin#googtrans(es|zh-CN)'>
						<img style='height:6%;width:6%' src='img/encabezado/china-icono.png' title='Mandarín'
							alt='Idioma Mandarín'>
					</a>
					<a href='index?idioma=ingles#googtrans(es|en)'>
						<img style='height:6%;width:6%' src='img/encabezado/usa-icono.png' title='Inglés'
							alt='Idioma Inglés'>
					</a>
					<a href='index?idioma=frances#googtrans(es|fr)'>
						<img style='height:6%;width:6%' src='img/encabezado/francia-icono.png' title='Francés'
							alt='Idioma Francés'>
					</a>
					<a href='index?idioma=español#googtrans(es|es)' class='mr-3'>
						<img style='height:6%;width:6%' src='img/encabezado/mexico-icono.png' title='Español'
							alt='Idioma Español'>
					</a>
					<!--  -->

					<img loading='lazy' style="height:6%;width:6%;" title="Accesibilidad"
						src="img/encabezado/ojo-icono.png" alt="Débil Visual" />

					<a class="btn--accesibilidad contraste">
						<svg class="svg-inline--fa fa-adjust fa-w-16" aria-hidden="true" focusable="false"
							data-prefix="fas" data-icon="adjust" role="img" xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 512 512" data-fa-i2svg="">
							<path fill="#1B396A"
								d="M8 256c0 136.966 111.033 248 248 248s248-111.034 248-248S392.966 8 256 8 8 119.033 8 256zm248 184V72c101.705 0 184 82.311 184 184 0 101.705-82.311 184-184 184z">
								<title>Contraste</title>
							</path>
						</svg><!-- <i class="fas fa-adjust"></i> -->
					</a>
					<a class="btn--accesibilidad aumentaLetra " title="Aumentar letra" style="color:#1B396A">A+</a>
					<a class="btn--accesibilidad reduceLetra" title="Disminuir letra" style="color:#1B396A">A-</a>
					<a class="btn--accesibilidad resetLetra" title="Restablecer tamaño" style="color:#1B396A">A </a>
				</div>
			</div>

		</div>
	</div>


	<!-- Menú Azul  -->
	<nav class="navbar navbar-expand-xl navbar-dark" style='background-color: #1B396A;' id="main_navbar2">

		<button class="navbar-toggler border-0 text-white" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span> Menú Principal
		</button>

		<div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent2">
			<ul class="navbar-nav mr-auto">

				<div class='d-none d-lg-block' id="tecnmblanco" style="visibility:hidden; ">
					<img loading='lazy' alt="TecNM" style="width: 90px; height:auto;" src="img/logos/tecnm_menu.png" />
				</div>

				<li class="nav-item active">
					<a class="nav-link" href="index.php"> <span class="icon-home"></span></a>
				</li>


				<!--
				<li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nivel 1
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="#"> 
								Nivel 2 
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
								Nivel 2 
							</a>						
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
								<li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
							</ul>
                        </li>
					</ul>
                </li>
				-->

				<!--
				<li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nivel 1
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="#"> Nivel 2 </a>
                        </li>
					</ul>
                </li>
				-->
				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">¿Quiénes somos?


					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="instituto.php"> Institucion </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="ubicacion.php"> Ubicacion </a>
						</li>
					</ul>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Directorio
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="http://intranet.dgest.gob.mx/telecom/directorio/"> TECNM </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="itgamii.php"> ITGAM II</a>
						</li>
					</ul>
				</li>


				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Departamentos
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="SubPlaneacion.php"> Subdireccion Planeacion </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="SubAcademica.php"> Subdireccion Academica </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="SubAdministrativa.php"> Subdireccion Administrativa </a>
						</li>
					</ul>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link active font-weight-bold" href="admision.php">
						Admisión
					</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Oferta Educativa
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="administracion.php"> Ingenieria en Administracion </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="arquitectura.php"> Arquitectura </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="industrial.php"> Ingenieria Industrial </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="tics.php"> Ingenieria en Tecnologias de la Informacion y
								Comunicacion </a>
						</li>
					</ul>

				<li class="nav-item dropdown">
					<a class="nav-link active font-weight-bold" href="pdf/anexos/politica_integral.pdf">
						Política Integral
					</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link active font-weight-bold" href="https://online.flippingbook.com/view/982300121/">
						Ceneval Comunica
					</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						I.R.C
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="pdf/anexos/IRC 2012-2018 ITGAM II.pdf"> Sexenal </a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="pdf/anexos/IRC 2020 - FINAL.pdf"> Anual</a>
						</li>
					</ul>

				<li class="nav-item dropdown">
					<a class="nav-link active font-weight-bold" href="https://sii.gamadero2.tecnm.mx/web/login">
						SII
					</a>
				</li>
				</li>
				<!--
				<li class="nav-item dropdown">
					<a class="nav-link active font-weight-bold" href="TecNM_Virtual">
						Como llegar
					</a>
				</li>
				-->
				</li>
				<!--
				<li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nivel 1
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="#"> Nivel 2 </a>
                        </li>
						<li class="nav-item dropdown dropleft">
							<a class="dropdown-item dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
								Nivel 2
							</a>									
							<ul class="dropdown-menu left" aria-labelledby="navbarDropdown1">
								<li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
								<li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
								<li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
							</ul>
                        </li>
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="#"> 
								Nivel 2 
							</a>
                        </li>
						<li class="nav-item dropdown">
							<a class="dropdown-item dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
								Nivel 2								
							</a>									
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
								<li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
								<li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
							</ul>
                        </li>
					</ul>
                </li>
				-->
			</ul>
		</div>

	</nav>