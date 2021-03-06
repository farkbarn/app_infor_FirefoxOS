<?php
the_post_thumbnail( $size, $attr );
add_theme_support( 'post-thumbnails' );
add_image_size( 'homepage-thumb', 450, 325, true );
add_image_size( 'homepage-thumb2', 200, 135, true );
add_image_size( 'slider-thumb', 153, 106, true );
add_image_size( 'slider_sup', 187, 166, true );
add_image_size( 'slider', 658, 350, true );
add_image_size( 'noticias_side', 285, 100, true );
add_image_size( 'depor_destacado', 988, 450, true );
add_image_size( 'galeria_deporte', 480, 335, true );
add_image_size( 'galeria_deporte_thum', 240, 155, true );
add_image_size( 'nota_deporte', 290, 120, true );
add_image_size( 'side_deporte_thum', 185, 140, true );
register_nav_menus( array(
	'menu-top' => 'Menu superior',
	'menu' => 'Menu principal',
	'menu-dep' => 'Menu deportes'
) 
);
/* Mi jQuery */
function my_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', '/wp-content/themes/elinformador/scripts/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }
}
add_action('init', 'my_init_method');

register_sidebar(array(
    'name' => 'Sidebar Home',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));

register_sidebar(array(
    'name' => 'Sidebar Home Dos',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',						
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));
register_sidebar(array(
    'name' => 'Sidebar Categoria',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));
register_sidebar(array(
    'name' => 'Sidebar Pagina',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));

register_sidebar(array(
    'name' => 'Sidebar Busqueda',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));


register_sidebar(array(
    'name' => 'Sidebar deporte',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '
                  ',
    'after_title' => '
                 
             
             ',
));

include(TEMPLATEPATH.'/includes/themeoptions.php');
include(TEMPLATEPATH.'/includes/images.php');
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
          <br />
       <?php endif; ?>
       <?php comment_text() ?>
       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
<?php
}
automatic_feed_links();
// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);
// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}
// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}
// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";
  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }
  return $relative_url.$file_version;
}
function exclude_categoria(){
 foreach((get_the_category()) as $category) 
  {
   if($category->cat_name!="IMPRESO" and $category->cat_name!="CLASIFICADOS" and $category->cat_name!="ASIVAN" and $category->cat_name!="SIN-CATEGORIA" and $category->cat_name!="IMPRESO" and $category->cat_name!="GUARITOS-PAPEL" and $category->cat_name!="GUAREANDO" and $category->cat_name!="ESTAMPAS" and $category->cat_name!="ESPECIALES" and $category->cat_name!="CLASIFICADOS" and $category->cat_name!="SILUETA" and $category->cat_name!="DESTACADA" and $category->cat_name!="COLUMNA1A" and $category->cat_name!="COLUMNA2A" and  $category->cat_name!="COLUMNA3A"  and $category->cat_name!="COLUMNA1B" and $category->cat_name!="COLUMNA2B" and  $category->cat_name!="COLUMNA3B" and $category->cat_name!="COLUMNA1B" and $category->cat_name!="COLUMNA2B" and  $category->cat_name!="COLUMNA3B" and  $category->cat_name!="DEPORTE COLUMNA1"  and  $category->cat_name!="DEPORTE COLUMNA2"  and  $category->cat_name!="DEPORTE DESTACADA"  and  $category->cat_name!="DEPORTE GALERIA" )  
     return  $category->cat_name . '  ';  
  } 
 }
 function exclude_categoria_single(){
	 $categorias="";
 foreach((get_the_category()) as $category) 
  {
   if($category->cat_name!="IMPRESO" and $category->cat_name!="CLASIFICADOS" and $category->cat_name!="ASIVAN" and $category->cat_name!="SIN-CATEGORIA" and $category->cat_name!="IMPRESO" and $category->cat_name!="GUARITOS-PAPEL" and $category->cat_name!="GUAREANDO" and $category->cat_name!="ESTAMPAS" and $category->cat_name!="ESPECIALES" and $category->cat_name!="CLASIFICADOS" and $category->cat_name!="SILUETA" and $category->cat_name!="DESTACADA" and $category->cat_name!="COLUMNA1A" and $category->cat_name!="COLUMNA2A" and  $category->cat_name!="COLUMNA3A"  and $category->cat_name!="COLUMNA1B" and $category->cat_name!="COLUMNA2B" and  $category->cat_name!="COLUMNA3B" and $category->cat_name!="COLUMNA1B" and $category->cat_name!="COLUMNA2B" and  $category->cat_name!="COLUMNA3B" and  $category->cat_name!="DEPORTE COLUMNA1"  and  $category->cat_name!="DEPORTE COLUMNA2"  and  $category->cat_name!="DEPORTE DESTACADA"  and  $category->cat_name!="DEPORTE GALERIA" )  
    $categorias.=$category->cat_name . ' | ';  
  } 
  return $categorias;
 }
 function id_categoria(){
 foreach((get_the_category()) as $category) 
  {
   if($category->cat_name!="IMPRESO" and $category->cat_name!="CLASIFICADOS" and $category->cat_name!="ASIVAN" and $category->cat_name!="SIN-CATEGORIA" and $category->cat_name!="IMPRESO" and $category->cat_name!="GUARITOS-PAPEL" and $category->cat_name!="GUAREANDO" and $category->cat_name!="ESTAMPAS" and $category->cat_name!="ESPECIALES" and $category->cat_name!="CLASIFICADOS" and $category->cat_name!="SILUETA" and $category->cat_name!="DESTACADA" and $category->cat_name!="COLUMNA1A" and $category->cat_name!="COLUMNA2A" and  $category->cat_name!="COLUMNA3A"  and $category->cat_name!="COLUMNA1B" and $category->cat_name!="COLUMNA2B" and  $category->cat_name!="COLUMNA3B" and  $category->cat_name!="DEPORTE COLUMNA1"  and  $category->cat_name!="DEPORTE COLUMNA2"  and  $category->cat_name!="DEPORTE DESTACADA"  and  $category->cat_name!="DEPORTE GALERIA" )  
    return $category->cat_ID;  
  } 
 }
function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;
	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}
// AGREGADO POR INFORMADOR
//omitir info error login
add_filter('login_errors',create_function('$a', "return null;"));
//Contador de caracteres en extracto
function excerpt_count_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#postexcerpt .handlediv").after("<div style=\"position:absolute;top:0px;right:30px;color:#666;\"><small></small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"excerpt_counter\" readonly=\"\" style=\"background:#fff;\"> <small>caracter(es).</small></div>");
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
     jQuery("#excerpt").keyup( function() {
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
   });
});</script>';
}
add_action( 'admin_head-post.php', 'excerpt_count_js');
add_action( 'admin_head-post-new.php', 'excerpt_count_js');
//Contador de caracteres en extracto
function titulo_contador_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#titlewrap").after("<div style=\"position:absolute;top:-32px;right:0px;color:#666;\"><small></small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"tit_counter\" readonly=\"\" style=\"background:#fff;\"> <small>Máximo 90 caracter(es).</small></div>");
     jQuery("#tit_counter").val(jQuery("#title").val().length);
     jQuery("#title").keyup( function() {
     jQuery("#tit_counter").val(jQuery("#title").val().length);
   });
});</script>';
}
add_action( 'admin_head-post.php', 'titulo_contador_js');
add_action( 'admin_head-post-new.php', 'titulo_contador_js');
// funcion
function contador(){
$contador = '<script type="text/javascript" src="http://www.elinformador.com.ve/wp-admin/js/contador.js"></script>';
/*$contador = '<script type="text/javascript" src="http://www.paginainteligente.com/elinformador/wp-admin/js/contador.js"></script>';*/
echo $contador;
}
add_action("admin_head","contador");
function cont_tit(){
$contador = '
<script type="text/javascript" src="http://www.elinformador.com.ve/wp-admin/js/cont_tit.js"></script>';
/*$contador = '<script type="text/javascript" src="http://www.paginainteligente.com/elinformador/wp-admin/js/cont_tit.js"></script>';*/
echo $contador;
}
add_action("admin_head","cont_tit");
?>