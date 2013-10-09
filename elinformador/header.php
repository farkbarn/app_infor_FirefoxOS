<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <? // if (get_option('swt_INICIO') == 'No' || isset($_SESSION["inner"])) { ?>
    <?// { echo ''; } ?>
    <?// } elseif(get_option('swt_INICIO') == '400-400') { 
	//header('Location: http://www.paginainteligente.com/publicidad/inner1/index.php'); /* PUBLICIDAD SPLASH DE 400x400px*/
	//}elseif(get_option('swt_INICIO') == '800-600') { 
	//header('Location: http://www.paginainteligente.com/publicidad/inner2/index.php'); /* PUBLICIDAD SPLASH DE 800x600px*/
	//}?>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="periodico web - diario de barquisimeto - medio de comunicación ">
    <meta name="author" content="elinformador" >
    <meta name="classification" content="noticias, actualidad, Venezuela" >
    <meta name="keywords" content="elinformador, el informador, diario, periódico, Venezuela" >
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="icon" type="image/gif" href="wp-content/themes/elinformador/favicon.gif" />
   

    <script type='text/javascript' src='http://www.elinformador.com.ve/openx/www/delivery/spcjs.php?id=1'></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
	<script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/normalize.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/main.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
    
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/modernizr-2.6.1.min.js") ?>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
    <style type="text/css">
    .aviso_flotante {position: fixed; z-index: 999 !important; width: 400px; height: 400px; top: 50%; left: 50%; margin: -200px 0px 0px -200px;}
    .aviso_flotante iframe {position: absolute; z-index: 999 !important;}
    .aviso_flotante img {position: absolute; z-index: 999 !important;}
    .aviso_flotante>iframe>img{position: absolute; z-index: 99999 !important;}
    a.cerrar_flotante {display: block; padding: 2px 5px; background: #000; position: absolute; top: 5px; right: 70px; color: #fff; text-decoration: none; z-index: 1000;}
    a.cerrar_flotante:hover {background: #E01217}
    a.cerrar_flotante:active, a.cerrar_flotante:visited {color: #fff;}
    .publicidad_header{position: relative; z-index: -1000 !important;}   
    </style>

<!-- trafico -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40942673-1', 'elinformador.com.ve');
  ga('send', 'pageview');

</script>
</head>
<body>
<? //print "Session=".$_SESSION["inner"]; ?>
<? if (get_option('swt_FLOTANTE') == 'No') { ?>
    <? { echo ''; } ?>
    <? } else { include(TEMPLATEPATH . '/includes/flotante.php'); } ?> 
  <!--[if lt IE 7]>
    <p class="chromeframe">Usted esta usando un navegador desactualizado. <a href="http://browsehappy.com/">Actualize su navegador</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> para obtener una mejor experiencia de este sitio.</p>
  <![endif]-->
  <div id="container" class="sombra">
    <div class="publicidad_top">
	<div class="zona1>
		<div class="banner_988x150">
			<?php include("zon_pub/zon_sobre_A_988x150.html");?>
		</div>
      <div class="zona1">
		<div class="banner_988x90">
			<?php include("zon_pub/zon_A_Esp.html");?></div>
                </div>
      <div class="zona1">
		<div class="banner_988x60">
			<?php  include("zon_pub/zon_A.html");?></div>
                </div>
      
      <div class="zona1">
		<div class="banner_988x60">
			<?php include("zon_pub/zon_A2.html");?>
	        </div>
      </div>

      <div class="zona2">
        <div class="banner_778x60">
		<?php //include("zon_pub/zon_B.html");?></div>
       <div class="banner_200x60">
		<?php include("zon_pub/zon_B2.html");?></div> 
      </div>
      <div class="zona3">
        <div class="banner_490x60 mr8">
			<?php include("zon_pub/zon_C.html");?>
        </div>
        <div class="banner_490x60">
			<?php include("zon_pub/zon_C2.html");?>
        </div>
      </div>
      <div class="zona4">
        <div class="banner_778x90">
			<?php // include("zon_pub/zon_D.html");?>
        </div>
        <div class="banner_200x90">
			<?php // include("zon_pub/zon_D2.html");?>
        </div>
      </div>
    </div>
    <?php include("pub/separador_full.html");?>
    <br />
    <div class="clear"></div> <!-- clear -->
    <div class="clear"></div> <!-- clear -->
    <header role="banner">
      <div class="nav_container">
    <? if (get_option('swt_follow') == 'Hide') { ?>
    <? { echo ''; } ?>
    <? } else { include(TEMPLATEPATH . '/includes/social.php'); } ?> 
        <nav class="nav_top2">
          <a class="btn_home2" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/btn_home.png" width="" height=""  alt=""></a>
          <a class="btn_locales2" href="<?php echo home_url(); ?>/?cat=209">barquisimeto<br /><span>+</span> regiones</a>
          <a class="btn_deportes2" href="<?php echo home_url(); ?>/?cat=6">deportes</a>
          <a class="btn_libre2" href="<?php echo home_url(); ?>/?cat=7">zona libre<br /><span>+</span> sociales</a>
          <a class="btn_negocios2" href="<?php echo home_url(); ?>/?cat=19">negocios</a>
          <a class="btn_venezuela2" href="<?php echo home_url(); ?>/?cat=8">venezuela <br /><span>+</span> mundo</a>
          <a class="btn_sucesos2" href="<?php echo home_url(); ?>/?cat=5">sucesos</a>
        </nav>
      </div>
      <div class="clear"></div> <!-- clear -->
      <!-- cabecera -->
      <div class="cabecera">
      <a href="<?php echo home_url(); ?>">
        <div class="elinformador">
          <div class="date">
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
      </a>
        <!-- slider top -->
        <div class="slider_top">
           <!--  //flechas -->
           <div class="flechas">
             <a href="" class="next" title="Siguiente"></a>
             <a href="" class="prev" title="Anterior"></a>
           </div>
			<!-- INICIO SLIDER SUPERIOR SILUETAS --> 
            <div id="slider"> 
              <div class="slidesContainer">
              	<?php query_posts('category_name=SILUETA&posts_per_page=4' ); 
				while ( have_posts() ) : the_post(); 			
				?>
                  <div class="slide">
					  <div class="clear"></div> <!--AGREGADO ESPACIO-->
                    <div class="image_slide"><a href="<?php  the_permalink(); ?>"><?php the_post_thumbnail('slider_sup') ?></a></div>
					  <div class="text_slide">
						  <div class="clear"></div> <!--AGREGADO ESPACIO-->
                        <h1 class="titulo_slide"><a href="<?php  the_permalink(); ?>"><?php the_title();?></a></h1>
                        <p><?php remove_filter('the_excerpt', 'wpautop'); the_excerpt_max_charlength(75);?></P><!-- REEMPLAZO DE LA FUNCION PARA LIMITAR CARACTERES--> <!-- the_excerpt(); ?></p> -->
                      </div>     
                    </div>
                   <?php endwhile; ?>
                   <?php wp_reset_query(); ?>
				  </div> 
              </div>            
            </div>
            <!-- FIN SLIDER SUPERIOR SILUETAS --> 
      </div>
      <div class="clear"></div> <!-- clear -->
      <!-- link buscador -->
      <div class="links_top_container">
          <nav class="link_top">
            <a class="noticia_linea" href="<?php echo home_url(); ?>">Noticias en Linea</a>
            <a class="label_buscador"><span>| </span>Buscador:</a>
          </nav>
          <div class="buscador">
            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
                 <input type="text" value="<?php echo $search_text; ?>"
                     name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"
                     onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" placeholder="buscar aqui" />
                 <input type="submit" value="Buscar">
            </form>
          </div>
          <nav class="link_top2">
            <div><a href="http://www.elinformador.com.ve/?page_id=4512">Contáctenos <span>su opinion nos interesa</span></a></div>
            <div><a href="http://www.elinformador.com.ve/?page_id=4519">Quiénes Somos <span>El Informador C.A.</span></a></div>
          </nav>
      </div>
      <!-- marquesina -->
       <? if (get_option('swt_marquee') == 'Hide') { ?>
       <? { echo ''; } ?>
       <? } else { include(TEMPLATEPATH . '/includes/marquee.php'); } ?>  
      <div class="publicidad_header">
		<!-- banner_988x60_1-->
		<?php // include("zon_pub/zon_E.html");?>
		<?php include("zon_pub/zon_E_aux.html");?>
		<?php include("zon_pub/zon_E_aux_2.html");?>
      </div>
    <?php include("pub/separador_full.html");?>
    </header> 