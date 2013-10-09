<?php get_header();?>
<div id="main" role="main">
    <!-- col 1 -->
    <div class="columna1">
      <div class="noticias">
        <!-- inicio del repetir -->
        <?php   //query_posts($query_string .'&showposts=10'); 
		while ( have_posts() ) : the_post(); ?>
        <div class="noticia">
          <h2><a href="<?php  the_permalink(); ?>"><?php the_title();?></a></h2>
         	    		<?php
					if(get_post_meta(get_the_ID(), "_related-video", true) != ''){
					 echo get_post_meta(get_the_ID(), "_related-video", true);
					}else{
					 the_post_thumbnail( 'homepage-thumb' );
				} ?>
          <p class="txt_not_col1"><span><?php  the_time('d M  h:i A'); ?> | <?=exclude_categoria(); ?> |</span> <? the_excerpt();?></p>
           <div class="comentar">
            <a href="<?php  the_permalink(); ?>" class="puntuar">COMENTAR + PUNTUAR + VOTAR</a>
            <a href="<?php  the_permalink(); ?>" class="compartir">FACEBOOK + TWITTER</a>
           </div>
        </div>
        <?php 
		 $id_cat = id_categoria();
		endwhile; ?>
          <center> <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></center>
      </div> <!-- fin noticias -->
    </div> 
    <!-- fin col 1 -->
    <div class="columna2">
    <?php include("includes/edicion_impresa.html");?>
    <div class="label_container">
    <div class="label_categoria"> + Recientes</div>
    <div class="flecha"></div></div>
    <div class="clear"></div>
    <div class="clear"></div>
    <!-- fin label -->
    <div class="noticias">
        <!-- inicio del repetir -->
<?php
	//query_posts(array('category__in' => array($id_cat), 'post__not_in' => array($idpost), 'posts_per_page' => 12, 'offset' => 10 )); 
	//query_posts('cat=-12,-10,-20&posts_per_page=5&p!=400');
		query_posts(array('category__not_in' => array( 12, 10, 20 ), 'post__not_in' => array($idpost), 'posts_per_page' => 12 )); 
	while ( have_posts() ) : the_post();?>  
        <div class="noticia">
        <?php the_post_thumbnail( 'homepage-thumb2' );?>
          <h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
          <p class="txt_not_col2"><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> | </span> <? the_excerpt_max_charlength(100);?> </p>
        </div>
       <?php endwhile; ?>
       <?php wp_reset_query(); ?>
        <!-- fin del repetir -->
        <?php //comments_template(); ?>
      </div> <!-- fin noticias -->
    </div>
    <!-- fin col 2 -->
    <div class="columna3">
    <div class="noticias">
      <!-- repetir noticia columna 3 -->
      <!-- fin repetir -->
    </div>
       <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fel.informador.barquisimeto&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
  <?php
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Categoria') ) : endif;
 ?>
  </div>
  <div class="clear"></div> <!-- clear -->
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>