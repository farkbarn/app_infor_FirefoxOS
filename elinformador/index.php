<?php
 get_header(); 
?>
<div id="main" role="main">

    <div class="columnas_top">
      <div class="silder_noticias">
        <? if (get_option('swt_slider') == 'Hide') { ?>
        <? { echo ''; } ?>
        <? } else { include(TEMPLATEPATH . '/includes/slide.php'); } ?> 
      </div>
      <div class="columna3" id="col3top">
      	<!-- label -->
      	<div class="label_container">
			<div class="label_categoria"> + Actual</div>
			<div class="flecha"></div>
		</div>
		<div class="clear"></div>
		<!-- fin label -->
		<div class="noticias">
		   <!-- repetir noticia columna 3 -->
           <?PHP $count_SLIDER = get_option('swt_COLUMNASLIDER'); 
			     query_posts('category_name='.$slidecat.'&posts_per_page='.$count_SLIDER.'&offset=4' ); 
			     $i=1;
				 while ( have_posts() ) : the_post(); 			
			?>
			<div class="noticia">
				<h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
				<?php the_post_thumbnail('noticias_side');  ?><!-- 285x106 -->
				<p class="txt_not_col2"><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> |</span> <?php the_excerpt_max_charlength(100);?></p>
			</div>
            <?php $i+=1; endwhile; ?>
            <?php wp_reset_query(); ?>  
			<!-- fin repetir -->
        </div>
      </div>
    </div>
    
    <div class="clear"></div>
    <div class="publicidad_cuerpo_full">
		<?php include("zon_pub/zon_F.html");?>
		<?php include("pub/separador_full.html");?>
    </div>
    
    <!-- col 1 -->
    <div class="columna1">
    	<div class="noticias">
			<div class="banner_468x60">
				<?php include("zon_pub/zon_G.html");?>
			</div>
		
			<div class="banner_468x250">
				<?php //include("zon_pub/zon_H.html");?>
			</div>
    		<!-- inicio del repetir -->
             <?php $count1A = get_option('swt_COLUMNA1A');
			       query_posts('cat=13&posts_per_page='.$count1A.'' ); 
				   while ( have_posts() ) : the_post(); 		
				?>
	    	<div class="noticia">
			<br />
	    		<h2 class="tit_not"><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
	    		<?php
					if(get_post_meta(get_the_ID(), "_related-video", true) != ''){
					 echo get_post_meta(get_the_ID(), "_related-video", true);
					}else{
					 the_post_thumbnail( 'homepage-thumb' );
					} ?>
	    		<p class="txt_not_col1"><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> | </span> <? the_excerpt();?></p>
	    		 <div class="comentar">
	    		 	<a href="<?php  the_permalink(); ?>" class="puntuar">COMENTAR + PUNTUAR + VOTAR</a>
	    		 	<a href="<?php  the_permalink(); ?>" class="compartir">FACEBOOK + TWITTER</a>
	    		 </div>
	    	</div>
	    	<div class="espacio15"></div>
             <?php endwhile; ?>
            <?php wp_reset_query(); ?>
	    	<!-- fin del repetir -->
    	</div> <!-- fin noticias -->
    </div> 
    <!-- fin col 1 -->

    <div class="columna2">
		<div class="banner_200x200"><?php include("zon_pub/zon_I.html");?></div>
		<div class="espacio10"></div>
		<!-- label -->
		<div class="label_container">
			<div class="label_categoria"> + Destacadas</div>
			<div class="flecha"></div>
		</div>
		<div class="clear"></div>
		<!-- fin label -->
		<div class="noticias">
    		<!-- inicio del repetir -->
    		<div class="espacio10"></div>
              <?php 
			   $count2A = get_option('swt_COLUMNA2A');
			  query_posts('cat=14&posts_per_page='.$count2A.'' ); 
				   while ( have_posts() ) : the_post(); 		
				?>
	    	<div class="noticia">
	    		<?php the_post_thumbnail( 'homepage-thumb2' );?>
	    		<h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
	    		<p class="txt_not_col2"><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> |</span> <?php the_excerpt_max_charlength(100);?> </p> 
	    	</div>
               <?php endwhile; ?>
            <?php wp_reset_query(); ?>
	    	<!-- fin del repetir -->
    	</div> <!-- fin noticias -->
    </div>
    <!-- fin col 2 -->
    
    <div class="columna3">
		<div class="banner_300x250"><?php //include("zon_pub/zon_J.html");?></div>
		<div class="banner_300x300"><?php include("zon_pub/zon_K.html");?></div>
		<div class="banner_300x600"><?php //include("zon_pub/zon_L.html");?></div>
		<div class="noticias">
          <? get_sidebar();?>
      	</div>
	</div>
	<div class="clear"></div> <!-- clear -->
    
<div class="publicidad_cuerpo_full">
	<!-- banner_pub_full -->
	<?php //include("zon_pub/zon_F2.html");?>
</div>
<?php include("pub/separador_full.html");?>
<div class="espacio15"></div>
    <!-- col 1B -->
    <div class="columna1">
    	<div class="noticias"><!-- inicio noticia -->
         <div class="banner_468x60"><?php include("zon_pub/zon_G2.html");?></div>
         <div class="banner_468x250"><?php //include("zon_pub/zon_H2.html");?></div>
    		<!-- inicio del repetir -->
             <?php  $count1B = get_option('swt_COLUMNA1B');
			       query_posts('cat=22&posts_per_page='.$count1B.'' ); 
				   while ( have_posts() ) : the_post(); 		
				?>
	    	<div class="noticia">
	    		<h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
	    		<?php
					if(get_post_meta(get_the_ID(), "_related-video", true) != ''){
					 echo get_post_meta(get_the_ID(), "_related-video", true);
					}else{
					 the_post_thumbnail( 'homepage-thumb' );
					} ?>
	    		<p class="txt_not_col1" ><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> |</span> <? the_excerpt();?></p>
	    		 <div class="comentar">
	    		 	<a href="<?php  the_permalink(); ?>" class="puntuar">COMENTAR + PUNTUAR + VOTAR</a>
	    		 	<a href="<?php  the_permalink(); ?>" class="compartir">FACEBOOK + TWITTER</a>
	    		 </div>
	    	</div>
	    	<div class="espacio15"></div>
             <?php endwhile; ?>
            <?php wp_reset_query(); ?>
	    	<!-- fin del repetir -->
    	</div> <!-- fin noticias -->
    </div> 
    <!-- fin col 1 -->

    <div class="columna2">
          <div class="banner_200x200">
			  <?php //include("zon_pub/zon_I2.html");?>
          </div>
    	<!-- label -->
      	<div class="label_container">
			<div class="label_categoria"> + Destacadas</div>
			<div class="flecha"></div>
		</div>
		<div class="clear"></div>
		<!-- fin label -->
		<div class="noticias">
			<div class="espacio10"></div>
    		<!-- inicio del repetir -->
              <?php  $count2B = get_option('swt_COLUMNA2B'); 
			       query_posts('cat=23&posts_per_page='.$count2B.'' ); 
				   while ( have_posts() ) : the_post(); 		
				?>
	    	<div class="noticia">
	    		<?php the_post_thumbnail( 'homepage-thumb2' );?>
	    		<h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
	    		<p class="txt_not_col2"><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> | </span> <?php the_excerpt_max_charlength(100);?></p>
	    		 
	    	</div>
	    	<div class="espacio05"></div>
               <?php endwhile; ?>
            <?php wp_reset_query(); ?>
	    	<!-- fin del repetir -->
    	</div> <!-- fin noticias -->   		
    </div>
    <!-- fin col 2 -->
    <div class="columna3">
     <div class="banner_300x250"><?php //include("zon_pub/zon_J2.html");?></div>
     <div class="banner_300x300"><?php //include("zon_pub/zon_K2.html");?></div>
     <div class="banner_300x600"><?php //include("zon_pub/zon_L2.html");?></div>
     

<div id="pdfs">
	<?php include("includes/edicion_impresa.html");?><br /><!-- edicion impresa-->
	<?php include("includes/imp_clasificados.html");?><br /><!-- clasificados -->
	<?php include("includes/imp_estampas.html");?><br /><!-- impresos estampas -->
	<?php include("includes/imp_especiales.html");?><br /><!-- impresos especiales -->
	<?php include("includes/imp_guaritos_papel.html");?><br /><!-- impresos guaritos -->
</div>

	<div class="noticias">
	<!-- label -->
      <div class="clear"></div>
       <? 
      /* 	$categories = get_categories();
	$fecha_ant= date('d-m-Y', strtotime('-1 days'));
    list($dia, $mes, $year) = split('[/.-]', $fecha_ant);	 
	foreach ($categories as $cat) {     		 
	 if($cat->cat_name!="GUARITOS" and $cat->cat_name!="ESPECIALES" and $cat->cat_name!="DESTACADA" and $cat->cat_name!="IMPRESO" and $cat->cat_name!="DESTACADA" and $cat->cat_name!="COLUMNA1A" and $cat->cat_name!="COLUMNA2A" and  $cat->cat_name!="COLUMNA3A"  and $cat->cat_name!="COLUMNA1B" and $cat->cat_name!="COLUMNA2B" and  $cat->cat_name!="COLUMNA3B" and  $cat->cat_name!="EVENTOS" and  $cat->cat_name!="OPINIÓN" and  $cat->cat_name!="Sin categoría" and  $cat->cat_name!="ULTIMA HORA" and   $cat->cat_name!="SOCIALES")  
     {   query_posts('cat=-3');
     query_posts( 'year='.$year.'&monthnum='.$mes.'&day='.$dia.'&cat='.$cat->term_id.'&posts_per_page=1' );
  		 $i=0;
		while ( have_posts() ) : the_post();
		 $i++;
	     endwhile;
		 wp_reset_query(); 
	 }
	}
         if($i>0){*/
	   ?>
      	<div class="label_container">
			<!--<div class="label_categoria"> Noticias en línea | Archivo </div>-->
			<!--<div class="flecha"></div>-->
		</div>
        <div class="clear"></div>
		<? //}?>
        <!-- fin label -->
    	<div class="archivo_container">

<!-- inicio repetir -->
<?php   
	$categories = get_categories();
	$fecha_ant= date('d-m-Y', strtotime('-1 days'));
    list($dia, $mes, $year) = split('[/.-]', $fecha_ant);	 
	foreach ($categories as $cat) {     		 
	 if($cat->cat_name!="GUARITOS" and $cat->cat_name!="ESPECIALES" and $cat->cat_name!="DEPORTE COLUMNA2" and $cat->cat_name!="DEPORTE COLUMNA1" and $cat->cat_name!="ESTAMPAS" and $cat->cat_name!="CLASIFICADOS" and $cat->cat_name!="SILUETA" and $cat->cat_name!="IMPRESO" and $cat->cat_name!="DESTACADA" and $cat->cat_name!="COLUMNA1A" and $cat->cat_name!="COLUMNA2A" and  $cat->cat_name!="COLUMNA3A"  and $cat->cat_name!="COLUMNA1B" and $cat->cat_name!="COLUMNA2B" and  $cat->cat_name!="COLUMNA3B" and  $cat->cat_name!="EVENTOS" and  $cat->cat_name!="OPINIÓN" and  $cat->cat_name!="Sin categoría" and  $cat->cat_name!="ULTIMA HORA" and   $cat->cat_name!="SOCIALES")  
     {   
     query_posts( 'year='.$year.'&monthnum='.$mes.'&day='.$dia.'&cat='.$cat->term_id.'&posts_per_page=1' );
  		 $i=0;
		while ( have_posts() ) : the_post();
		 $i++;
	     endwhile;
		 wp_reset_query(); 	
         if($i<0){
			query_posts('year='.$year.'&monthnum='.$mes.'&day='.$dia.'&cat='.$cat->term_id.'&posts_per_page=2');		   
		    while ( have_posts() ) : the_post();       	
	 	 ?>  
	        <div class="archivo">
	          <h2> <?=$cat->cat_name?> </h2>
	          <h3>
	            <span class="fecha"> <?php  the_time('d-m-Y'); ?></span>
	            <span class="hora"><?php  the_time('h:i A'); ?></span>
	            <a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a>
	          </h3>
	        </div>
         <?  endwhile;
		     wp_reset_query(); 
		  }
		 ?>    

<?  }
 }
?>
        </div> <!-- archivo_container -->
        <div class="clear"></div>
<?php
 if (is_home()) {
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Home dos') ) : endif;
 }
 ?>
      	</div>
	</div>
<div class="clear"></div> <!-- clear -->
</div>
<?php get_footer(); ?>