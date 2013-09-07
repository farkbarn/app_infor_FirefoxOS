<?php get_header();?>
<?php $nom_wid='Sidebar Pagina';?>
<?php $max=5;?>
<!-- NOTICIAS PRIMERA MITAD -->
					<div class="noticias_sup not_post">
					<div class="espacio03"></div>
						<div class="not_col_1"><!--abre columna 1 -->
						<!-- inicio de nota -->   
						<?php if (have_posts()) : while (have_posts()) : the_post();
						$nom_cat=exclude_categoria();// obtengo nombre de cat
						$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
						$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
						$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
						?>
						<article class="nota_col1" >
							<header><h2 class="tit_not tit_post"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2></header>
<p class="txt_not"><span><?php the_time('h:i A');?> | <a href="<?php echo $cat_link;?>"><? echo $nom_cat;?></a> | </span><?php the_excerpt_max_charlength();?></br> </br><?php the_content('Read the rest of this entry &raquo;'); ?></p>
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
						<!-- fin de nota -->
<!-- ---- -->
						<div class="espacio05"></div>
						<div class="sep"></div>
						<div class="espacio05"></div>
						<?php endwhile; endif;?>
						<?php wp_reset_query(); ?>
						</div> <!--cierra columna 1 -->
						<?php include("col2.php");?>
					</div><!-- FIN NOTICIA -->
						<?php include("widget.php");?>
<!-- NOTICIAS SEGUNDA MITAD -->
<?php get_footer(); ?>
