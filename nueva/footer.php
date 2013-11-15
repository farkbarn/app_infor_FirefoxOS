
					<footer>
						<div class="pie" align="center">
							<div class="pie_int">
								<div class="pie_enl" align="center">
									<a href="<?php echo home_url(); ?>">inicio</a>&nbsp;&nbsp;|&nbsp;
									<a href="<?php echo home_url(); ?>/?cat=209">barquisimeto + regiones </a>&nbsp;&nbsp;|&nbsp;
									<a href="<?php echo home_url(); ?>/?cat=6">deportes </a>&nbsp;&nbsp;|&nbsp;
									<a href="<?php echo home_url(); ?>/?cat=7">zona libre + sociales </a>&nbsp;&nbsp;|&nbsp;
									<a href="<?php echo home_url(); ?>/?cat=19">negocios </a>&nbsp;&nbsp;|&nbsp;
									<a href="<?php echo home_url(); ?>/?cat=8">venezuela + mundo </a>&nbsp;&nbsp;|&nbsp;
									<a href="<?php echo home_url(); ?>/?cat=5">sucesos </a>
								</div>
								<div class="busqueda">
									<div id="cont_busc">
										<div class="buscador">
											<a class="noticia_linea" href="<?php echo home_url(); ?>">Noticias en Linea</a>
											<a class="label_buscador"><span>| </span>Buscador:</a>
										</div>
										<div class="buscador" id="buscadorinp">
											<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
											 <input class="caja" type="text" value="<?php echo $search_text; ?>"
												 name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"
												 onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" placeholder="buscar aqui" />
											 <input class="boton" id="bot_bus" type="submit" value="Buscar">
											</form>
										</div>
									</div>
										<div class="contacto">
											<div id="contacto1"><a href="http://www.elinformador.com.ve/?page_id=4512">Contáctenos <span>su opinión nos interesa</span></a></div>
											<div id="contacto2"><a href="http://www.elinformador.com.ve/?page_id=4519">Quiénes Somos <span>El Informador C.A.</span></a></div>
										</div>
								</div>
								<!--<div class="limpiar"></div>
								<div class="pie_anuncio" >Anuncie con nosotros | Condiciones de Publicación | Servicio FTP | Términos de uso y privacidad | Mapa del sitio | HMTL5 + CSS3</div>
								<div class="limpiar"></div>-->
								<p class="creditos">© Copyright 2012 por EL INFORMADOR "El Diario de Barquisimeto" RIF.-J08500641-9. Todos los derechos reservados. </p>
							</div>
						</div>
					</footer>
			<div class="espacio10"></div>
	</body>


<script type="text/javascript">
jQuery.preloadImages = function(){
  for(var i = 0; i<arguments.length; i++){
    jQuery("<img>").attr("src", arguments[i]);
}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-40942673-1', 'elinformador.com.ve');
  ga('send', 'pageview');
</script>


</html>
