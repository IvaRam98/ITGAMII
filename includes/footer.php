
	<!-- Redes Sociales Lateral -->
	<div class="sticky-container">
		<ul class="sticky">
			<li>
				<img loading='lazy' src="img/redes_sociales/facebook.png" width="32" height="32" alt="facebook" />
				<p><a href="https://www.facebook.com/ITGAMADEROIIOFICIAL" target="_blank">Me gusta en<br>Facebook</a>
				</p>
			</li>
			<li>
				<img loading='lazy' src="img/redes_sociales/twitter.png" width="32" height="32" alt="Twitter" />
				<p><a href="https://twitter.com/ITGAMIIOFICIAL" target="_blank">Síguenos en<br>Twitter</a></p>
			</li>
			<li>
				<img loading='lazy' src="img/redes_sociales/youtube.png" width="32" height="32" alt="YouTube" />
				<p><a href="https://www.youtube.com/channel/UC9IAe3kJLPLoA7_TfMXYH1Q" target="_blank">Suscríbase
						en<br>YouTube</a></p>
			</li>
			<li>
				<img loading='lazy' src="img/redes_sociales/elibro.png" width="32" height="32" alt="YouTube" />
				<p><a href="https://elibro.net/es/lc/gamadero2/login_usuario/?next=/es/lc/gamadero2/inicio/" target="_blank">Entra
						a<br>elibro</a></p>
			</li>
		</ul>


		<!---OCC MUNdial -->

		<div id="occ-widget"></div>

<script id ="bolsa-widget"

type = "text/javascript"

charset = "UTF-8"

src = "https://jobdiscovery-widget-occ.occ.com.mx/button-bundle.js"

key = "1nctl3wleYWA9SxWavdCzcXkDk0" >

</script>
	</div>
<!-- Dirección y teléfono -->
<div id='desface_footer' style='display: none;'>
		<footer class='border bg-tecnm footer'>

			<div class='row m-0 justify-content-center p-3'>

				<div class='h6 col-12 col-lg-3 text-center text-lg-left' style='line-height: 1.5;'>

					<p class='h5 font-weight-bold my-2 mt-lg-5'>
						Dirección
					</p>
					<p>
						Calle Morelos No. 193, Col: Loma La Palma , Alcaldía Gustavo A. Madero, México CDMX. , C.P.:
						07160
					</p>

					<p class='h5 font-weight-bold mt-lg-5'>
						Contacto
					</p>
					<p>
					<div class='row'>
						<div class='col-12'>
							<p>Email: dir_gamadero2@tecnm.mx</p>
						</div>
						<div class='col-12'>
							<p>Conmutador:(55) - 5323-1041 (55) - 6798-3312 (55) - 6830-3206</p>
						</div>
					</div>
					</p>

				</div>

				<div class='h6 col-12 col-lg-3 text-center text-lg-left' style='line-height: 1.5;'>
					<p class='h5 font-weight-bold my-2 mt-lg-5'>
						Enlaces
					</p>
					<p>
						<a style="color:#fff"
							href="http://portaltransparencia.gob.mx/buscador/search/search.do?method=begin">
							Portal de Obligaciones de Transparencia
						</a>
						<br />
						<a style="color:#fff" href="http://inicio.ifai.org.mx/SitePages/ifai.aspx">INAI</a>
						<br />
						<a style="color:#fff" href="mailto: web@tecnm.mx">
							Buzón de Sugerencias
						</a>
					</p>

					<p class='h5 font-weight-bold my-2'>
						Número de visitas
					</p>

				</div>

				<div class='h6 col-12 col-lg-6 '>
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7519.4266718861!2d-99.147411!3d19.553917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f7a0f7a48a1d%3A0xce20942bad18c363!2sInstituto%20Tecnol%C3%B3gico%20de%20Gustavo%20A.%20Madero%20II!5e0!3m2!1ses!2sus!4v1677167729134!5m2!1ses!2sus"
						width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
					</iframe>
				</div>

				<div class='vh6 col-12 text-center' style='line-height: 1.5;'>
					© Copyright 2023 TecNM - Todos los Derechos Reservados
					<br />
					<a class='text-white'
						href='https://www.gob.mx/cms/uploads/attachment/file/328462/Proyecto_Aviso_Privacidad_TecNM_16052018.pdf'
						target='_blank'> Aviso de Privacidad </a>
					<br />
					Última actualización: 17/04/2023
				</div>

			</div>

		</footer>
	</div>

	<!-- Opciones de Accesibilidad -->
	<script src='assets/files/main/js/index.onload.js'></script>

	<!-- Twitter -->
	<script id='twitter-wjs' src='https://platform.twitter.com/widgets.js'></script>

	<!-- Banner -->
	<script src='assets/web/assets/jquery/jquery.min.js'></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	<!-- Configuración de los carrucel -->
	<script>
		$(document).on('ready', function () {

			$('.one-time').slick({
				dots: true,
				infinite: true,
				speed: 500,
				slidesToShow: 1,
				adaptiveHeight: true,
				adaptiveWidth: true,
				autoplay: true,
				autoplaySpeed: 6000,
				arrows: false,
				fade: true,
				pauseOnHover: true
			});

			$('.center').slick({
				dots: false,
				infinite: true,
				arrows: true,
				autoplay: true,
				autoplaySpeed: 4000,
				centerMode: false,
				centerPadding: '0px',
				slidesToShow: 4,
				responsive: [{
					breakpoint: 768,
					settings: {
						//arrows: false,
						centerMode: true,
						centerPadding: '0px',
						slidesToShow: 2
					}
				}, {
					breakpoint: 480,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '0px',
						slidesToShow: 2
					}
				}
				]
			});

			$('.anexo').slick({
				dots: false, // puntos
				infinite: true,
				arrows: true, // flechas
				autoplay: true,
				autoplaySpeed: 3500,
				slidesToShow: 4,
				pauseOnHover: true,
				responsive: [{
					breakpoint: 768,
					settings: {
						//arrows: false,
						slidesToShow: 2
					}
				}, {
					breakpoint: 480,
					settings: {
						arrows: false,
						centerPadding: '0px',
						slidesToShow: 2
					}
				}
				]
			});
		});
	</script>

	<script src="js/noticarrusel/slick.js"></script>

<!-- Footer Gobernación -->
<div id='desface_footer_gob' style='display: none;'>
		<footer class="main-footer m-0 p-1">

			<div class="row justify-concent-center list-info w-100 m-0 p-2" id='gobierno_mexico'>

				<div class="col-11 col-sm-3 text-center">
					<img src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg" alt="logo gobierno de méxico"
						class="img-fluid p-3 w-100">
				</div>

				<div class="col-11 col-sm-3">
					<h5>Enlaces</h5>
					<ul>
						<li>
							<a href="https://participa.gob.mx" target="_blank" rel="noopener"
								title="Enlace abre en ventana nueva">
								Participa
							</a>
						</li>
						<li>
							<a href="https://www.gob.mx/publicaciones" target="_blank" rel="noopener"
								title="Enlace abre en ventana nueva">
								Publicaciones Oficiales
							</a>
						</li>
						<li>
							<a href="http://www.ordenjuridico.gob.mx" target="_blank" rel="noopener"
								title="Enlace abre en ventana nueva">
								Marco Jurídico
							</a>
						</li>
						<li>
							<a href="https://consultapublicamx.inai.org.mx/vut-web/" target="_blank" rel="noopener"
								title="Enlace abre en ventana nueva">
								Plataforma Nacional de Transparencia
							</a>
						</li>
					</ul>
				</div>

				<div class="col-11 col-sm-3">
					<h5> ¿Qué es gob.mx? </h5>
					<p>
						Es el portal único de trámites, información y participación ciudadana.
						<a href="https://www.gob.mx/que-es-gobmx" target="_blank">Leer más</a>
					</p>

					<ul>
						<li>
							<a href="https://datos.gob.mx" target="_blank">
								Portal de datos abiertos
							</a>
						</li>
						<li>
							<a href="https://www.gob.mx/accesibilidad" target="_blank">
								Declaración de accesibilidad
							</a>
						</li>
						<li>
							<a href="https://www.gob.mx/privacidadintegral" target="_blank">
								Aviso de privacidad integral
							</a>
						</li>
						<li>
							<a href="https://www.gob.mx/privacidadsimplificado" target="_blank">
								Aviso de privacidad simplificado
							</a>
						</li>
						<li>
							<a href="https://www.gob.mx/terminos" target="_blank">
								Términos y Condiciones
							</a>
						</li>
						<li>
							<a href="https://www.gob.mx/terminos#medidas-seguridad-informacion" target="_blank">
								Política de seguridad
							</a>
						</li>
						<li>
							<a href="https://www.gob.mx/sitemap" target="_blank">
								Mapa de sitio
							</a>
						</li>
					</ul>
				</div>

				<div class="col-11 col-sm-3">
					<h5>
						<a href="https://www.gob.mx/tramites/ficha/presentacion-de-quejas-y-denuncias-en-la-sfp/SFP54"
							target="_blank">
							Denuncia contra servidores públicos
						</a>
					</h5>
				</div>

			</div>

		</footer>
	</div>

	<!-- Menú Azul - Permite el desglose -->
	<script src="js/bootnavbar.js"></script>
	<script>
		$(function () {
			$('#main_navbar').bootnavbar({
				//option
				//animation: false
			});
		})
	</script>

</body>

</html>