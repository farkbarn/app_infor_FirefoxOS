<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main">
    <!-- col 1 -->
    <div class="columna1">
      <div class="noticias">
        <!-- inicio del repetir -->
        				<h2 class="page-title"><?php printf( __( 'Resultados de la Busqueda: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?>&raquo;</h2>
        <?php 
		//query_posts($query_string .'&showposts=30'); 
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="noticia">
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <p><span><?php  the_time('d M  h:i A'); ?> | <?=exclude_categoria(); ?> | </span><?php the_excerpt(); ?></p>
           
        </div>
        <?php endwhile; else: ?>
        
        <h2>No encontrado</h2>
<p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
<?php endif; ?>
      </div> <!-- fin noticias -->
  <center> <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></center>
    </div> 
    <!-- fin col 1 -->

    <div class="columna2">
      <div class="edicion_impresa">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/edicion_impresa.jpg" width="180" height="185" alt=""/></a>
      </div>
      <!-- label -->
        <div class="label_container">
      <div class="label_categoria"> + RECIENTES</div>
      <div class="flecha"></div>
    </div>
    <div class="clear"></div>
    <!-- fin label -->
    <div class="noticias">
    
        <!-- inicio del repetir -->
<?php    

	query_posts(array('category__not_in' => array( 12, 10, 20 ), 'post__not_in' => array($idpost), 'posts_per_page' => 3 )); 
	//query_posts('cat=-12,-10,-20&posts_per_page=5&p!=400');
	while ( have_posts() ) : the_post();
			
	 	?>  
        <div class="noticia">
        <?php the_post_thumbnail( 'homepage-thumb2' );?>
          <h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
          <p><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> | </span> <? the_excerpt();?> </p>
           
        </div>

       <?php   endwhile; ?>
       <?php wp_reset_query(); ?>
        <!-- fin del repetir -->

     
      </div> <!-- fin noticias -->
      
    </div>
    <!-- fin col 2 -->

    <div class="columna3">
      <div class="twitter">
      <script src="http://widgets.twimg.com/j/2/widget.js"></script><script>
      new TWTR.Widget({
        version: 2,
        type: 'profile',
        rpp: 4,
        interval: 6000,
        width: 300,
        height: 450,
        theme: {
          shell: {
            background: '#eeeeee',
            color: '#111'
          },
          tweets: {
            background: '#f5f5f5',
            color: '#666',
            links: '#f07e02'
          }
        },
        features: {
          scrollbar: false,
          loop: false,
          live: false,
          hashtags: true,
          timestamp: true,
          avatars: false,
          behavior: 'all'
        }
      }).render().setUser('elinformadorve').start();
      </script>
      </div>
      

    <div class="noticias">
      <!-- repetir noticia columna 3 -->

        </div>
               <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fel.informador.barquisimeto&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
 
  <?php

 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Busqueda') ) : endif;
 
 ?>
  </div>
  <div class="clear"></div> <!-- clear -->
</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
