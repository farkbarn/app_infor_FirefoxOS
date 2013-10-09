					<?php query_posts('cat=21&posts_per_page=6'); 
					while (have_posts()):the_post();
					?>
					<article>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</article>
					<?php endwhile;
					wp_reset_query();?>
