<?php
	$slidecat = get_option('swt_slide_category');
	$slidecount = get_option('swt_slide_count');
?>

    <div id="featured" >
		<!-- REPETIR / la primera tiene que tener solo la clase ui-tabs-panel -->
		    <!-- First Content -->
            <?php query_posts('category_name='.$slidecat.'&posts_per_page='.$slidecount ); 
				$i=1;
				while ( have_posts() ) : the_post(); 			
				?>
			    <div id="fragment-<?=$i?>" class="ui-tabs-panel" style="">
			    	<!-- label -->
			    	<div class="label_categoria"> Actual  |   <? print exclude_categoria(); ?> </div>
					<div class="flecha"></div>
					<div class="clear"></div>
					<!-- fin label -->
			    	<h2><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h2>
					<a href="<?php  the_permalink(); ?>"><?php the_post_thumbnail('slider');  ?></a>
					 <div class="info" >
						<p><span><?php the_time('d-m-Y'); ?> | </span><?php remove_filter('the_excerpt', 'wpautop'); the_excerpt(); ?><a href="<?php  the_permalink(); ?>" >Leer mas</a></p>
					 </div>
			    </div>
                <?php $i+=1; endwhile; ?>
                <?php wp_reset_query(); ?>  
			<!-- FIN REPETIR -->

			
			<!-- miniaturas -->
			    
			    <ul class="ui-tabs-nav">
               <?php query_posts('category_name='.$slidecat.'&posts_per_page='.$slidecount ); 
				$i=1;
				while ( have_posts() ) : the_post(); 			
				?>
		        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-<?=$i?>">
		        	<a href="#fragment-<?=$i?>" >
		        		<?php the_post_thumbnail('slider-thumb');  ?>
		        	</a>
		        </li>
		        <?php $i+=1; endwhile; ?>
                <?php wp_reset_query(); ?> 
		      </ul>
	       </div>
