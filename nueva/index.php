<?php get_header(); ?>
<!-- DESTACADA -->
		<?php include("includes/slider_destacada.php");?>	
<!-- FIN DESTACADA -->
				<div class="limpiar"></div>
					<div class="zon_pub">
						<div id="zon_pub_F">
							<?php include("zon_pub/zon_F.html");?>
						</div>
					</div>
				<div class="limpiar"></div>
<!-- INICIO SUPERIOR -->
<!-- NOTICIA -->
					<div class="espacio05"></div>
					<div class="sep"></div>
					<div class="espacio05"></div>
<!-- NOTICIAS PRIMERA MITAD -->
					<div class="noticias_sup">
						<div class="not_col_1"><!--abre columna 1 -->
							<div class="zon_pub">
								<div id="zon_pub_G">
									<?php include("zon_pub/zon_G.html");?>
								</div>
							</div>
							<div class="zon_pub">
								<div id="zon_pub_H">
									<?php include("zon_pub/zon_H.html");?>
								</div>
							</div>
						<?php query_posts('cat=13&posts_per_page=5'); 
						$i=1;
						while ($i <= 5):the_post();
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
								<a href="<?php echo $link;?>"> <img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
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
						<?php $i++; endwhile; ?>
						<?php wp_reset_query(); ?>
						</div> <!--cierra columna 1 -->
						<div class="not_col_2"> <!--abre columna 2 -->
							<div class="zon_pub">
								<div id="zon_pub_I">
									<?php include("zon_pub/zon_I.html");?>
								</div>
							</div>
							<div class="label_container">
								<div class="label_categoria"> + Destacadas</div>
								<div class="flecha"></div>
							</div>
							<div class="clear"></div>
							<?php query_posts('cat=14&posts_per_page=8'); 
							$i=1;
							while ($i <= 8):the_post();
							$nom_cat=exclude_categoria();// obtengo nombre de cat
							$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
							$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
							$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
							?>
							<div class="nota_col2">
								<div class="con_fot_not_col2" >
								<?php if(has_post_thumbnail()): // si tiene imagen 
									$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false );
								?>
									<a href="<?php echo $link;?>"><img class="fot_not" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
								<?php endif ?>
								</div>
								<h2 class="tit_not"><a href="<?php echo $link;?>"><?php echo substr($tit,0,45)?><span> [...]</span></a></h2>
								<p class="txt_not"> <span><?php the_time('h:i A');?> | <a href="<?php echo $cat_link;?>"><? echo $nom_cat;?> </a> | </span><?php the_excerpt_max_charlength(80);?></p>
							</div>
							<div class="espacio05"></div>
							<div class="sep"></div>
							<div class="espacio05"></div>
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
						</div> <!--cierra columna 2 -->
					</div><!-- FIN NOTICIA -->
<!--widget-->
					<div class="lateral">
						<div class="zon_pub">
							<div id="zon_pub_J">
								<?php include("zon_pub/zon_J.html");?>
							</div>
						</div>

						<div class="zon_pub">
							<div id="zon_pub_K">
								<?php include("zon_pub/zon_K.html");?>
							</div>
						</div>

						<div class="zon_pub">
							<div id="zon_pub_L">
								<?php include("zon_pub/zon_L.html");?>
							</div>
						</div>
						<div class="side">
							<?php if (!dynamic_sidebar('Sidebar Home'));?>
						</div>
					</div>
<!-- fin widget-->
					<div class="limpiar"></div>
						<div class="zon_pub">
							<div id="zon_pub_E">
								<?php include("zon_pub/zon_E.html");?>
							</div>
						</div>
					<div class="limpiar"></div>
					<div class="espacio05"></div>
					<div class="sep"></div>
					<div class="espacio05"></div>
<!-- NOTICIAS SEGUNDA MITAD -->
					<div class="noticias_inf">
						<div class="not_col_1">
							<div class="zon_pub">
								<div id="zon_pub_G2">
									<?php include("zon_pub/zon_G2.html");?>
								</div>
							</div>
							<div class="zon_pub">
								<div id="zon_pub_H2">
									<?php include("zon_pub/zon_H2.html");?>
								</div>
							</div>
							<?php query_posts('cat=22&posts_per_page=5'); 
							$i=1;
							while ($i <= 5):the_post();
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
									<a href="<?php echo $link;?>"><img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
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
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
							</div> <!--cierra columna 1 -->
						<div class="not_col_2">
							<div class="zon_pub">
								<div id="zon_pub_I2">
									<?php include("zon_pub/zon_I2.html");?>
								</div>
							</div>
							<div class="label_container">
								<div class="label_categoria"> + Destacadas</div>
								<div class="flecha"></div>
							</div>
							<div class="clear"></div>
							<?php query_posts('cat=23&posts_per_page=8'); 
							$i=1;
							while ($i <= 8):the_post();
							$nom_cat=exclude_categoria();// obtengo nombre de cat
							$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
							$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
							$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
							?>
							<div class="nota_col2">
								<div class="con_fot_not_col2" >
								<?php if(has_post_thumbnail()): // si tiene imagen 
									$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false );
								?>
									<a href="<?php echo $link;?>"><img class="fot_not" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
								<?php endif ?>
								</div>
								<h2 class="tit_not"><a href="<?php echo $link;?>"><?php echo substr($tit,0,45)?><span> [...]</span></a></h2>
								<p class="txt_not"> <span><?php the_time('h:i A');?> | <a href="<?php echo $cat_link;?>"><? echo $nom_cat;?> </a> | </span><?php the_excerpt_max_charlength(80);?></p>
							</div>
							<div class="espacio05"></div>
							<div class="sep"></div>
							<div class="espacio05"></div>
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
						</div><!--FIN NOTA COL2-->
					</div><!-- FIN NOTICIA -->
					<div class="lateral">
						<div class="zon_pub">
							<div id="zon_pub_J2">
								<?php include("zon_pub/zon_J2.html");?>
							</div>
						</div>
						<div class="zon_pub">
							<div id="zon_pub_K2">
								<?php include("zon_pub/zon_K2.html");?>
							</div>
						</div>
						<div class="zon_pub">
							<div id="zon_pub_L2">
								<?php include("zon_pub/zon_L2.html");?>
							</div>
						</div>
						<div id="pdfs">
								<?php include("includes/imp_diario.html");?><br /><!-- edicion impresa-->
								<?php include("includes/imp_clasificados.html");?><br /><!-- clasificados -->
								<?php include("includes/imp_estampas.html");?><br /><!-- impresos estampas -->
								<?php include("includes/imp_especiales.html");?><br /><!-- impresos especiales -->
								<?php include("includes/imp_guaritos_papel.html");?><br /><!-- impresos guaritos -->
						</div>
						<div class="limpiar"></div>
						<div class="side">
							<?php if (!dynamic_sidebar('Sidebar Home Dos'));?>
						</div>

					</div>
					<div class="limpiar"></div>
					<div class="espacio05"></div>
<?php get_footer(); ?>
