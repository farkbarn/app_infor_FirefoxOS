	<div class="slider_deportes">
		<div class="label_container">
			<div class="label_categoria">EN IMÁGENES</div>
			<div class="flecha"></div>
		</div>

		<div class="clear"></div>

		<div id="image"></div>
		<div id="carousel">
		<?php
		query_posts('cat=26&posts_per_page=1' ); 
		while ( have_posts() ) : the_post(); ?>
		<div id="buttons">
			<a href="#" id="prev"></a>
			<a href="#" id="next"></a>
		</div>
			<div id="slides"> 
				<ul>
					<?php
					$id=get_the_ID();
					$args = array('post_type' => 'attachment','numberposts' => 6,'post_parent' =>$id,'post_mime_type' => 'image',);
					$attachments = get_posts($args);
					$i=0;
					if ($attachments) {
						foreach ($attachments as $attachment) { 
						$image_atts = wp_get_attachment_image_src( $attachment->ID, 'galeria_deporte' );
						$image_atts2 = wp_get_attachment_image_src( $attachment->ID, 'galeria_deporte_thum' );
						$i+=1
					?>
					<li><a href="<?php echo $image_atts[0]; ?>"><img src="<?php echo $image_atts2[0]; ?>" id="bullet-<?=$i;?>"/></a></li>
					<?php } } ?>
				</ul>
			</div>

		<div class="clear"></div>
		<div class="resumen"><p class="txt_not_col1"><span><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></span><? the_excerpt();?></p></div>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>    
		</div>

	<div class="noticias_home">
   	<div class="publicidad_deportes770x90"></div>
   		<!-- repetir noticia -->
	<?php 
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
		</div>
		<?php 
		query_posts('category_name=DEPORTE COLUMNA2&posts_per_page=1' ); 
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
	   	</div>
	   	<div class="publicidad_deportes205x60">
	   	</div>
	</div>
