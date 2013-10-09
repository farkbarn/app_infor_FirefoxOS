<div class="side-widgetf">
<h3>Featured Posts</h3>
<?php $featured_category1 = get_option('swt_featured_category1'); $featured_number1 = get_option('swt_featured_number1pet'); ?>

<?php if(($featured_category1 == "Choose a category:") || ($featured_number1 == '')) { ?>

<?php { /* nothing */ } ?>

<?php } else { ?>

<ul class="feat-cat-meta2">
<?php
//insert your category name
$my_query = new WP_Query('category_name='. $featured_category1 . '&' . 'offset=' . '&' . 'showposts='. $featured_number1);
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID();?>
<li>
<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(66,56), array("class" => "alignleft")); } ?>
<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
<div class="meta">
    <?php the_time('F d, Y'); ?> |
    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'comm'); ?>
</div>
</li>
<?php endwhile;?>
</ul><!-- FEAT META -->
</div><!-- FEAT CAT ENTRY END -->


<?php } ?>
