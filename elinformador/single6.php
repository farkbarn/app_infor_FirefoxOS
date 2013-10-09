<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

 ?>

<div id="main" role="main" class="deportes">  
<?php if (have_posts()) : while (have_posts()) : the_post(); 
	    $cat_name=exclude_categoria();
	    $idpost=$post->ID;	
	    $id_cat = id_categoria();?>
	<div class="noticia_principal">
		<!-- label -->
        
	      	<div class="label_container">
				<div class="label_categoria">Deportes</div>
				<div class="flecha"></div>
			</div>
			<div class="clear"></div>
		<!-- fin label -->
		<div class="img_large">
						<?php the_post_thumbnail('depor_destacado');  ?>
			<div class="caption">
				<h1><a href="#"><?php the_title(); ?></a></h1>
		</div>
		</div>
		<div class="resumen_large">
			<p><span><? the_time('h:i A') ?> | <? print exclude_categoria(); ?> | </span><?php the_excerpt();?></p>
            <p class="txt_not_col1"><?php the_content('Read the rest of this entry &raquo;'); ?></p>
		</div>
		<hr>
	</div>
           <?php 

	    endwhile; endif;?>
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


