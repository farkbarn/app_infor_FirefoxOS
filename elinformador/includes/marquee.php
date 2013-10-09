<?php
	$slidecat = get_option('swt_marquee_category');
	$slidecount = get_option('swt_marquee_count');
?>
  
      <div id="marquesina_container">
        <h2 class="h2_marquesina">+ Rápidas</h2>
        <div class="flecha_derecha"></div>
          <ul id="ticker">
              <!--repetir-->
              <?php
 	            $my_query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.'');
                while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
              ?>
              <li><a href="<?php the_permalink() ?>"><span><? the_time('h:i A') ?></span><?php the_title(); ?></a></li>
           <?php endwhile; ?>
         </ul>
      </div>

