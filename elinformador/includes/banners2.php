<div class="advert">
<h3></h3>

<? if(strpos(get_option('swt_banner2'), ".jpg") || strpos(get_option('swt_banner2'), ".gif")  || strpos(get_option('swt_banner2'), ".png") ) { ?>
  <a href="<?php $link1 = get_option('swt_link2'); echo $link1; ?>"><img src="<?php $banner1 = get_option('swt_banner2'); echo $banner1; ?>" class="add" alt="advertisement" width="1024px" /></a>
<? }elseif(strpos(get_option('swt_banner2'), ".swf") || strpos(get_option('swt_banner2'), ".SWF") ){?>
[kml_flashembed movie="<?=get_option('swt_banner2')?>" height="70" width="1024" /]

<? }?>
  </div>