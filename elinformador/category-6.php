<?php get_header(); ?>
<div id="main" role="main" class="deportes">
	<div class="noticia_principal">
		<!-- label -->
	      	<div class="label_container">
				<div class="label_categoria"> + Deportes</div>
				<div class="flecha"></div>
			</div>
			<div class="clear"></div>
		<!-- fin label -->
		           <?PHP 
			     query_posts('cat=25&posts_per_page=1' ); 
			     while ( have_posts() ) : the_post(); 			
                           ?>
				<div class="img_large">
			<?php the_post_thumbnail('depor_destacado');  ?>
			<div class="caption">
				<h1><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h1>
		   </div>
		</div>
		<div class="resumen_large">
			 <p class="txt_not_col1" ><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria();?> |</span> <? the_excerpt();?></p>
		</div>
                <?php  endwhile; ?>
            <?php wp_reset_query(); ?>   
		<hr class="hr">
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
		<div id="image"></div>
	  	<!--<a href="#" id="image"></a>-->
		<div id="carousel">
              <?PHP 
			     query_posts('cat=26&posts_per_page=1' ); 
			     while ( have_posts() ) : the_post();
			  ?>
			<div id="buttons">
				<a href="#" id="prev"></a>
				<a href="#" id="next"></a>
			</div>
			<div id="slides"> 
				<ul>
                  <?php
				   $id=get_the_ID();
					$args = array(
						'post_type' => 'attachment',
						'numberposts' => 6,
						'post_parent' =>$id,
						'post_mime_type' => 'image',
					);
					$attachments = get_posts($args);
					$i=0;
					if ($attachments) {
						foreach ($attachments as $attachment) { 
						$image_atts = wp_get_attachment_image_src( $attachment->ID, 'galeria_deporte' );
						$image_atts2 = wp_get_attachment_image_src( $attachment->ID, 'galeria_deporte_thum' );
						$i+=1
					?>
					<li><a href="<?php echo $image_atts[0]; ?>"><img src="<?php echo $image_atts2[0]; ?>" id="bullet-<?=$i;?>"/></a></li>
                      <?php
                          }
                     }
					  ?>
				</ul>
		</div>
		</div>
		<div class="clear"></div> <!-- clear -->
		<div class="resumen"><p class="txt_not_col1"><span><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></span><? the_excerpt();?></p></div>
               <?php  endwhile; ?>
            <?php wp_reset_query(); ?>    
      </div>

<!-- QUITANDO TABLA DEPORTES -->
<!-- QUITANDO TABLA DEPORTES -->
   <div class="clear"></div> <!-- clear -->
   <div class="espacio15"></div>

   <div class="noticias_home">
   	<div class="publicidad_deportes770x90">
		<?php //include("pub/banner_deportes_770x90.html");?>
   	</div>
   		<!-- repetir noticia -->
           <?PHP 
			     query_posts('category_name=DEPORTE COLUMNA1&posts_per_page=3' ); 
			     while ( have_posts() ) : the_post(); 			
			?>
   		<div class="noticia">
   			<div class="img">
   				<?php the_post_thumbnail('nota_deporte');  ?>
   			</div>
   			<div class="texto">
   				<h1><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h1>
   				<p class="txt_not_col1" ><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria();?> |</span> <? the_excerpt();?></p>
   			</div>
   		</div>
            <?php  endwhile; ?>
            <?php wp_reset_query(); ?>   
   		<!-- fin repetir noticia -->
   </div>
   <div class="contenedor_lateral">
   		<div class="publicidad_deportes205x90">
			<?php //include("pub/banner_deportes_205x90.html");?>
			</div>
			<?php 
			     query_posts('category_name=DEPORTE COLUMNA2&posts_per_page=2' ); 
			     while ( have_posts() ) : the_post(); 			
				?>
		<div class="noticia_lateral">	
		   	<div class="noticia">
		   		<h1><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h1>
		   		<div class="img">
		   			<?php the_post_thumbnail('side_deporte_thum');  ?>
		   		</div>
		   	</div>
		</div>
        <?php  endwhile; ?>
        <?php wp_reset_query(); ?>   
		<div class="publicidad_deportes205x60">
			<?php //include("pub/banner_deportes_205x250.html");?>
   		</div>
   		<div class="publicidad_deportes205x60">
			<!-- AREA NO USADA -->
   		</div>
   </div>
   <div class="clear"></div> <!-- clear -->
</div>
<script>
$(document).ready(function() {
	//paginador
	// var num_bullets = $('#slides li').length;
	//   for (var i=1;i<=num_bullets;i++)
	// 	  {
	// 	   var enlace = $("#slides li:nth-child("+i+") a").attr('href');
	// 	   $('ul#bullets').append('<li><a href="'+enlace+'" id="bullet-'+i+'"></a></li>');
	// 	  }
	//click a los bullets
 	// $('ul#bullets li a').click(function() {	
 	//   var enlace = $(this).attr('href');
	// 	$('#image').html('<img src="'+ enlace +'"/>').hide().fadeIn('slow');
	// 	return false;
	// });
	//rotation speed and timer
	var speed = 4000;
	var run = setInterval('rotate()', speed);	
	//grab the width and calculate left value
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
	// 	{alert("weeee");}	
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