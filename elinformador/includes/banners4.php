<? if(strpos(get_option('swt_banner4'), ".jpg") || strpos(get_option('swt_banner4'), ".gif")  || strpos(get_option('swt_banner4'), ".png") ) { ?>
  <a href="<?php $link1 = get_option('swt_link1'); echo $link1; ?>"><img src="<?php $banner4 = get_option('swt_banner4'); echo $banner4; ?>" class="add" alt="advertisement" width="214px" /></a>
<? }elseif(strpos(get_option('swt_banner4'), ".swf") || strpos(get_option('swt_banner4'), ".SWF") ){?>
[kml_flashembed movie="<?=get_option('swt_banner4')?>" height="70" width="1024" /]
<? }?>
