<?php get_header(); ?>
<div id="main" role="main" class="deportes">
	<div class="noticia_principal">
		<!-- label -->
	      	<div class="label_container">
			<div class="label_categoria"> + Deportes</div>
			<div class="flecha"></div></div>
		<div class="clear"></div>
		<!-- fin label -->
		<div class="img_large">
			<img src="http://www.paginainteligente.com/elinformador/wp-content/themes/elinformador/images/img_large_deportes.jpg" alt="">
			<div class="caption">
				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. </h1>
		</div>
		</div>
		<div class="resumen_large">
			<p><span>Barquisimeto ||</span> consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<hr>
	</div>
    
  <div class="clear"></div> <!-- clear -->
  <div class="slider_deportes">
  		<!-- label -->
	      	<div class="label_container">
				<div class="label_categoria">EN IMÁGENES</div>
				<div class="flecha"></div>
			</div>
			<div class="clear"></div>
		<!-- fin label -->
	  	<a href="#" id="image"></a>
		<div id="carousel">

			<div id="buttons">
				<a href="#" id="prev"></a>
				<a href="#" id="next"></a>
			</div>

			<div id="slides"> 
				<ul>
					<li><a href="wp-content/themes/elinformador/images/img_large1.jpg"><img src="http://placehold.it/240x155&text=imagen_1" id="bullet-1"/></a></li>
					<li><a href="wp-content/themes/elinformador/images/img_large2.jpg"><img src="http://placehold.it/240x155&text=imagen_2" id="bullet-2"/></a></li>
					<li><a href="wp-content/themes/elinformador/images/img_large3.jpg"><img src="http://placehold.it/240x155&text=imagen_3" id="bullet-3"/></a></li>
					<li><a href="wp-content/themes/elinformador/images/img_large4.jpg"><img src="http://placehold.it/240x155&text=imagen_4" id="bullet-4"/></a></li>
					<li><a href="wp-content/themes/elinformador/images/img_large5.jpg"><img src="http://placehold.it/240x155&text=imagen_5" id="bullet-5" /></a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div> <!-- clear -->
		<div class="resumen"><span>Consectetur adipisicing elit,</span> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
  </div>	
  <div class="tabla_deportes">
  	<!-- label -->
	      	<div class="label_container">
				<div class="label_categoria">ASÍ VAN</div>
				<div class="flecha"></div>
			</div>
			<div class="clear"></div>
		<!-- fin label -->
  	<img src="wp-content/themes/elinformador/images/tabla_deportes.jpg" />
  </div>
   <div class="clear"></div> <!-- clear -->
   <hr>

   <div class="noticias_home">
   	<div class="publicidad_deportes770x90">
   		<img src="http://placehold.it/770x90&text=Publicidad_deportes770x90" alt="">
   	</div>
   		<!-- repetir noticia -->
   		<div class="noticia">
   			<div class="img">
   				<img src="http://placehold.it/290x120&text=Noticia_1" alt="">
   			</div>
   			<div class="texto">
   				<h1><a href="">Consectetur adipisicing elit, dipisicing elit dipisicing elit</a></h1>
   				<p><span>BARQUISIMETO || </span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quis ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo   exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat minim veniam</p>
   			</div>
   		</div>
   		<!-- fin repetir noticia -->

   		<!-- repetir noticia -->
   		<div class="noticia">
   			<div class="img">
   				<img src="http://placehold.it/290x120&text=Noticia_2" alt="">
   			</div>
   			<div class="texto">
   				<h1><a href="">Consectetur adipisicing elit, dipisicing elit dipisicing elit</a></h1>
   				<p><span>BARQUISIMETO || </span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quis ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo   exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat minim veniam</p>
   			</div>
   		</div>
   		<!-- fin repetir noticia -->
   		<!-- repetir noticia -->
   		<div class="noticia">
   			<div class="img">
   				<img src="http://placehold.it/290x120&text=Noticia_3" alt="">
   			</div>
   			<div class="texto">
   				<h1><a href="">Consectetur adipisicing elit, dipisicing elit dipisicing elit</a></h1>
   				<p><span>BARQUISIMETO || </span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quis ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo   exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat minim veniam</p>
   			</div>
   		</div>
   		<!-- fin repetir noticia -->
   </div>
   <div class="noticia_lateral">	
   		<div class="noticia">
   			<h1>Consectetur adipisicing elit, dipisicing elit</h1>
   		</div>
   </div>
   <div class="clear"></div> <!-- clear -->
</div>
<script>
$(document).ready(function() {
	var speed = 4000;
	var run = setInterval('rotate()', speed);	
	var item_height = $('#slides li').outerHeight(); 
	var top_value = item_height * (-1); 
    //muestro la ultima imagen
	var lastimg = $('#slides li:last a').attr('href');
		$('#image').html('<img src="'+ lastimg +'"/>').hide().fadeIn('slow');
    //move the last item before first item, just in case user click prev button
	$('#slides li:first').before($('#slides li:last'));
    //set the default item to the correct position 
	$('#slides ul').css({'top' : top_value});
	//esta la hice yoo wee, al elemento que le de click obtengo el href y se lo pongo a el div de la imagen
	$('#slides li a').click(function() {
		var enlace = $(this).attr('href');
		$('#image').html('<img src="'+ enlace +'"/>').hide().fadeIn('slow');
		return false;
	});
    //if user clicked on prev button
	$('#prev').click(function() {
		//get the right position            
		var top_indent = parseInt($('#slides ul').css('top')) + item_height;
		//slide the item            
		$('#slides ul:not(:animated)').animate({'top' : top_indent}, 200,function(){    
            //move the last item and put it as first item            	
			$('#slides li:first').before($('#slides li:last'));           
			//set the default item to correct position
			$('#slides ul').css({'top' : top_value});
		});
		//cancel the link behavior            
		return false;
	});
	//current bullets
	// $('ul#bullets li a').each(function() {
	// 	var id_bullet = $(this).attr("id");
	// 	var id_image = $('#image img').attr("id");;
	// if( id_bullet == id_image)
	// 	{alert("weeee");
	// });
    //if user clicked on next button
	$('#next').click(function() {
		//get the right position
		var top_indent = parseInt($('#slides ul').css('top')) - item_height;
		//slide the item
		$('#slides ul:not(:animated)').animate({'top' : top_indent}, 200, function () {
            //move the first item and put it as last item
			$('#slides li:last').after($('#slides li:first'));                 	
			//set the default item to correct position
			$('#slides ul').css({'top' : top_value});
			//aqui muestro la imagen del primer enlace
			//con el html(), creo el elemento en el dom, con el hide() lo escondo y con el fadein() lo muestro
			var current_img = $('#slides li:first a').attr('href');
		  	$('#image').html('<img src="'+ current_img +'"/>').hide().fadeIn('slow');
		   	return false;
		});
		//cancel the link behavior
		return false;	
	});
	//if mouse hover, pause the auto rotation, otherwise rotate it
	$('#slides').hover(
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	);
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin :)  
function rotate() {
	$('#next').click();
}
</script>
<?php get_footer(); ?>