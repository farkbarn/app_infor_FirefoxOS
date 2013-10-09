<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
	<head>
    <?php wp_head(); ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content="Diario el Informador - Frank Barrera (farkbarn)" >
		<meta name="classification" content="noticias, actualidad, Venezuela" >
		<meta name="keywords" content="elinformador, el informador, diario, periódico, Venezuela" >
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="periodico web - diario de barquisimeto - medio de comunicación ">
		<meta name="viewport" content="width=device-width">
		<?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
		<?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."responsive.css") ?>
		<?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."slider.css") ?>
		<!--<link rel="stylesheet" href="css/normalize.min.css">-->
		<!--<link rel="stylesheet" href="css/main.css">-->
		<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/modernizr-2.6.1.min.js") ?>
		<script type='text/javascript' src='http://www.elinformador.com.ve/openx/www/delivery/spcjs.php?id=1'></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
		<script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

		<!-- Wordpress Head Items -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<script src="wp-content/themes/nueva/js/plugins.js"></script>
		<script src="wp-content/themes/nueva/js/main.js"></script>
		<script type="text/javascript" src="wp-content/themes/nueva/js/jquery.cycle.all.js"></script>

		<link rel="icon" type="image/gif" href="wp-content/themes/nueva/img/favicon.gif" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name');?> EDICION</title>

<script type="text/javascript">//<![CDATA[
$(function(){
    $('#silueta article:gt(0)').hide();
    setInterval(function(){
      $('#silueta article:first-child').fadeOut(0)
         .next('article').fadeIn(1000)
         .end().appendTo('#silueta');}, 4000);
});
//]]></script>

<script type="text/javascript">//<![CDATA[
$(function(){
    $('#marq_tit article:gt(0)').hide();
    setInterval(function(){
      $('#marq_tit article:first-child').fadeOut(0)
         .next('article').fadeIn(1000)
         .end().appendTo('#marq_tit');}, 6000);
});
//]]></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40942673-1', 'elinformador.com.ve');
  ga('send', 'pageview');

</script>
		<!--[if lt IE 9]>
			<script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
		<![endif]-->
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

	</head>
	<body>
<!--INICIO CONTENEDOR PRINCIPAL -->
		<div id="contenedor">
<div class="espacio03"></div>
<div class="sep"></div>
<div class="espacio03"></div>
<!-- PUBLICIDAD -->
			<div class="zon_pub">
				<div id="zon_pub_A">
					<?php include("zon_pub/zon_sobre_A_988x150.html");?>
				</div>
			</div>
			<div class="zon_pub">
				<div id="zon_pub_A">
					<?php include("zon_pub/zon_A_Esp.html");?>
				</div>
			</div>
			<div class="zon_pub">
				<div id="zon_pub_A">
					<?php include("zon_pub/zon_A.html");?>
				</div>
			</div>
			<div class="zon_pub">
				<div id="zon_pub_A">
					<?php include("zon_pub/zon_A2.html");?>
				</div>
			</div>
			<div class="limpiar"></div>
			<div class="zon_pub">
				<div id="zon_pub_B">
					<?php include("zon_pub/zon_B.html");?>
				</div>
				<div id="zon_pub_B_2">
					<?php include("zon_pub/zon_B2.html");?>
				</div>
			</div>
			<div class="limpiar"></div>
			<div class="zon_pub">
				<div id="zon_pub_C">
					<?php include("zon_pub/zon_C.html");?>
				</div>
				<div id="zon_pub_C_2">
					<?php include("zon_pub/zon_C2.html");?>
				</div>
			</div>
			<div class="limpiar"></div>
			<div class="zon_pub">
				<div id="zon_pub_D">
					<?php include("zon_pub/zon_D.html");?>
				</div>
				<div id="zon_pub_D_2">
					<?php include("zon_pub/zon_D2.html");?>
				</div>
			</div>
			<div class="limpiar"></div>
<div class="espacio05"></div>
<div class="sep"></div>
<div class="espacio05"></div>
<!-- CABEZAL -->
			<div class="cabezal">
				<div class="logo">
					<div id="redes">
						<a href="https://twitter.com/elinformadorve" alt="twitter" ><div class="tw" ></div></a>
						<a href="http://www.facebook.com/el.informador.barquisimeto" alt="facebook" ><div class="fb" ></div></a>
						<a href="http://www.elinformador.com.ve/?feed=rss2" alt="rss" ><div class="rss" ></div></a>
						<a href="http://www.youtube.com/user/diarioelinformador" alt="youtube" ><div class="yt" ></div></a>
					</div>
					<div class="fecha">
						<script languaje="JavaScript"> 
							var mydate=new Date()
							var year=mydate.getYear()
							if (year < 1000) 
							year+=1900
							var day=mydate.getDay()
							var month=mydate.getMonth()
							var daym=mydate.getDate()
							if (daym<10)
								daym="0"+daym 
								var dayarray=new Array("Domingo,","Lunes,","Martes,","Miércoles,","Jueves,","Viernes,","Sábado,")
								var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
								document.write("<font color='white'>"+dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year+"</font>")
						</script></font>
					</div>
				</div>
<!-- -->
			<?php include("includes/silueta.php");?>
			</div><!-- FIN CABEZAL -->
<!-- MENU -->
			<div id="con_menu">
				<div class="" id="menu">
					<div id="men_izq">
					<div id="men_ini"><a href="<?php echo home_url(); ?>"><img id="ico_hom" src="<?php echo home_url(); ?>/wp-content/themes/nueva/img/btn_home.png" /></a></div>
					<div id="men_con">
						<div id="men_barq_reg"><a href="<?php echo home_url(); ?>/?cat=209">Barquisimeto + Regiones</a></div>
							<div id="con_3_4">
								<div id="men_dep"><a href="<?php echo home_url(); ?>/?cat=6">Deportes</a></div>
								<div id="men_zon_soc"><a href="<?php echo home_url(); ?>/?cat=7">Zona Libre + Sociales</a></div>
							</div>
						</div>
					</div>
				<div id="men_der">
					<div id="men_neg"><a class="men_link" href="<?php echo home_url(); ?>/?cat=19">Negocios</a></div>
						<div id="con_6_7">
							<div id="men_ven_mun"><a href="<?php echo home_url(); ?>/?cat=8">Venezuela + Mundo</a></div>
							<div id="men_suc"><a href="<?php echo home_url(); ?>/?cat=5">Sucesos</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="limpiar"></div>
			<div class="espacio03"></div>
			<div class="busqueda">
				<div id="cont_busc">
					<div class="buscador">
						<a class="noticia_linea" href="<?php echo home_url(); ?>">Noticias en Linea</a>
						<a class="label_buscador"><span>| </span>Buscador:</a>
					</div>
					<div class="buscador" id="buscadorinp">
						<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
						 <input type="text" value="<?php echo $search_text; ?>"
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
<div class="espacio05"></div>
<div class="sep"></div>
<div class="espacio05"></div>
			<div id="marquesina">
				<div id="rapida"> <p> + RÁPIDAS </p></div>
				<div id="marq_tit">
					<?php include("includes/marquesina.php");?>
				</div>
			</div>
			<div class="limpiar"></div>
				<div class="zon_pub">
					<div id="zon_pub_E">
						<?php include("zon_pub/zon_E.html");?>
					</div>
				</div>
			<div class="limpiar"></div>
