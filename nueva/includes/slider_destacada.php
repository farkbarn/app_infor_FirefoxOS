			<div class="destacada">
<!-- SLIDER -->
				<div class="slider">
					<div id="content-slider">
							<div id="slider">
								<div id="mask">
								<ul>
									<?php
										$clases=["firstanimation","secondanimation","thirdanimation","fourthanimation","fifthanimation"];
										$ides=["first","second","third","fourth","fifth"];
										$slidecat = get_option("sucesos");
										$slidecount = get_option("5");
									?>
									<?php query_posts('cat=16&posts_per_page=8'); 
									$i=1;
									while ($i <= 5):the_post(); /*( have_posts() ) : the_post();*/
									?>
									<li id="<?php echo $ides[$i-1]; ?>" class="<?php echo $clases[$i-1]; ?>">
										<a href="<?php  the_permalink(); ?>">
										<?php if(has_post_thumbnail()): // si tiene imagen 
											$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' , false );  // capturando arreglo url, ancho, alto
										?>
											<img align="center" src="<?php echo $pimagen[0];?>" alt="<?php the_title(); ?>" width="100%" height="100%" />
										<?php endif ?>
										</a>
										<div class="tooltip">
										<h1><?php the_title();?></h1>
										<p><span><?php the_time('d-m-Y'); ?> | <?=exclude_categoria(); ?> |</span> <?php the_excerpt_max_charlength(100);?></p>
										</div>
									</li>
									<?php $i++; endwhile; ?>
								</ul>
								</div>
								<div class="progress-bar"></div>
							</div>
					</div>
				</div>
<!-- FIN SLIDER -->
			</div>
<!-- INICIO POST SLIDER -->
				<div class="post_slider">
					<?php
					$i=6;
					while ($i <= 8):the_post(); /*( have_posts() ) : the_post();*/
					$tit=get_the_title();
					?>
					<div class="post_not">		
						<?php if(has_post_thumbnail()): // si tiene imagen 
							$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' , false );  // capturando arreglo url, ancho, alto
						?>
						<img class="post_not_fot" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit; ?>" width="100%" height="100%" />
						<?php endif ?>
						<div class="post_not_txt"><a href="<?php the_permalink(); ?>"><?php echo substr($tit,0,45)?><span> [...]</span></a></div>
					</div>
					<?php $i++; endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
<!--FIN POST SLIDER -->
