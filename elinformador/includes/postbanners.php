<div class="advert">
<h3></h3>
<? if(strpos(get_option('swt_banner2'), ".jpg") || strpos(get_option('swt_banner2'), ".gif") ) { ?>
<a href="<?php $link1 = get_option('swt_link2'); echo $link2; ?>"><img src="<?php $banner2 = get_option('swt_banner2'); echo $banner2; ?>" class="add" alt="advertisement" width="293px" /></a>
<? }elseif(strpos(get_option('swt_banner2'), ".swf") || strpos(get_option('swt_banner2'), ".SWF") ){?>
[kml_flashembed movie="<?=get_option('swt_banner2')?>" height="70" width="960" /]

<? }?>
       
</div>