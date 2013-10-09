<div class="advert">
<h3></h3>

<? if(strpos(get_option('swt_banner1'), ".jpg") || strpos(get_option('swt_banner1'), ".gif")  || strpos(get_option('swt_banner1'), ".png") ) { ?>
  <a href="<?php $link1 = get_option('swt_link1'); echo $link1; ?>"><img src="<?php $banner1 = get_option('swt_banner1'); echo $banner1; ?>" class="add" alt="advertisement" width="1024px" /></a>
<? }elseif(strpos(get_option('swt_banner1'), ".swf") || strpos(get_option('swt_banner1'), ".SWF") ){?>
[kml_flashembed movie="<?=get_option('swt_banner1')?>" height="70" width="1024" /]

<? }?>
  </div>