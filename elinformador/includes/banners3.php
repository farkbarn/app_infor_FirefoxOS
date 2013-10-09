<? if(strpos(get_option('swt_banner3'), ".jpg") || strpos(get_option('swt_banner3'), ".gif")  || strpos(get_option('swt_banner3'), ".png") ) { ?>
  <a href="<?php $link1 = get_option('swt_link3'); echo $link1; ?>"><img src="<?php $banner1 = get_option('swt_banner3'); echo $banner1; ?>" class="add" alt="advertisement" width="1024px" /></a>
<? }elseif(strpos(get_option('swt_banner3'), ".swf") || strpos(get_option('swt_banner3'), ".SWF") ){?>
[kml_flashembed movie="<?=get_option('swt_banner3')?>" height="70" width="1024" /]

<? }?>
