<?php get_header();?>
<?php $nom_wid='Sidebar Categoria';?>
<?php $max=14;?>
<!-- NOTICIAS PRIMERA MITAD -->
					<div class="noticias_sup not_post">
					<div class="espacio03"></div>
						<div class="not_col_1"><!--abre columna 1 -->
						<!-- inicio de nota -->   
						<?php while (have_posts()) : the_post();
						$nom_cat=exclude_categoria();// obtengo nombre de cat
						$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
						$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
						$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
						?>
						<div class="nota_col1">
							<!--<div class="lin_nar"></div>-->
							<h2 class="tit_not"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2>
							<div class="con_fot_not_col1" >
							<?php if(has_post_thumbnail()): // si tiene imagen 
								$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false );
							?>
								<img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" />
							<?php endif ?>
							</div>
								<p class="txt_not"> <span><?php the_time('h:i A');?> | <a href="<?php echo $cat_link;?>"><? echo $nom_cat;?> </a> | </span><?php the_excerpt_max_charlength(180);?></p>
								<div class="redes">
									<div class="puntuar"><a href="<?php echo $link;?>"><?php ?>COMENTAR + PUNTUAR + VOTAR</a></div>
									<div class="compartir"><a href="<?php echo $link; ?>">FACEBOOK + TWITTER</a></div>
								</div>
						</div>
						<div class="espacio05"></div>
						<div class="sep"></div>
						<div class="espacio05"></div>
						<?php
							$id_cat=id_categoria();
							endwhile;
						?>
						<?php wp_reset_query(); ?>
						<center> <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></center>
						</div> <!--cierra columna 1 -->
						<?php include("col2.php");?>
					</div><!-- FIN NOTICIA -->
						<?php include("widget.php");?>
<!-- NOTICIAS SEGUNDA MITAD -->
<?php get_footer(); ?>
