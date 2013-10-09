<div id="main" role="main">
<!-- col 1 -->
    <div class="columna1">
      <div class="noticias">
        <!-- inicio del repetir -->   
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="noticia" id="post-<?php the_ID(); ?>">
          <header>
          <h2><a href="#"><?php the_title(); ?></a></h2>
          </header>
           <p><span><? the_time('h:i A') ?> | <? print exclude_categoria_single() ?>  </span><?php the_excerpt();?></p>          
            <p><?php the_content('Read the rest of this entry &raquo;'); ?></p>
        </article> 
        
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="<?php  the_permalink(); ?>" data-num-posts="10" data-width="465"></div>
        <!-- fin del repetir -->
       <?php 
	    $cat_name=exclude_categoria();
	    $idpost=$post->ID;	
	    $id_cat = id_categoria();
	    endwhile; endif;?>

      </div> <!-- fin noticias -->

    </div> 
    <!-- fin col 1 -->

    <div class="columna2">
<!--      <div class="edicion_impresa">
        <a href="#"><img src="<?php //bloginfo('template_url'); ?>/images/edicion_impresa.jpg" width="180" height="185" alt=""/></a>
      </div>-->
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
			 query_posts(array('category__not_in' => array( 12, 10, 20, 405, 406, 407, 530, 420, 373, 19 ), 'post__not_in' => array($idpost), 'posts_per_page' => 5 )); 
			 //query_posts('cat=-12,-10,-20&posts_per_page=5&p!=400');
			 while ( have_posts() ) : the_post();
	 	?>  
        <div class="noticia">
        <?php the_post_thumbnail( 'homepage-thumb2' );?>
          <h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
          <p class="txt_not_col2" ><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> | </span> <? the_excerpt_max_charlength(100);?> </p>

        </div>

       <?php   endwhile; ?>
       <?php wp_reset_query(); ?>
        <!-- fin del repetir -->

        <?php //comments_template(); ?>
      </div> <!-- fin noticias -->
      
    </div>
    <!-- fin col 2 -->

    <div class="columna3">
    <div class="noticias">
      <!-- repetir noticia columna 3 -->
                   <div class="label_container mb-10">
                 <div class="label_categoria"> 
                 + Titulos de esta Sección
                 </div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>
     <?php    
			 query_posts(array('post__not_in' => array($idpost), 'cat'=>$id_cat, 'posts_per_page' => 5)); 
			 while ( have_posts() ) : the_post();
	 	?> 
      <div class="noticia">
        <h2><a href="<?php  the_permalink(); ?>" ><?php the_title();   ?></a></h2>
        
        <p class="txt_not_col2" ><span><?php  the_time('h:i A'); ?> | <?=exclude_categoria(); ?> | </span> <? the_excerpt_max_charlength(130);?> </p>
      </div>
       <?php   endwhile; ?>
       <?php wp_reset_query(); ?>
      <!-- fin repetir -->
    </div>
   <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fel.informador.barquisimeto&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
  <?php
 if (is_single()) {
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Pagina') ) : endif;
 }
 ?>
  </div>
<div class="clear"></div> <!-- clear -->
</div> <!-- fin main -->