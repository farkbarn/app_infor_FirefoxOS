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
							<?php query_posts(array('category__not_in' => array( $cat_id,12, 10, 20, 405, 406, 407, 530, 420, 373, 19 ), 'post__not_in' => array($idpost), 'posts_per_page' => $max ));
							$i=1;
							while ($i <= $max):the_post();
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
									<img class="fot_not" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" />
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
