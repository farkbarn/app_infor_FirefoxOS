<? if(strpos(get_option('swt_hbanner'), ".jpg") || strpos(get_option('swt_hbanner'), ".gif") ) { ?>
<a href="<?php $hlink = get_option('swt_hlink'); echo $hlink; ?>"><img src="<?php $hbanner = get_option('swt_hbanner'); echo $hbanner; ?>" class="adv" alt="advertisement" /></a>  
<? }elseif(strpos(get_option('swt_hbanner'), ".swf") || strpos(get_option('swt_hbanner'), ".SWF") ){?>
[kml_flashembed movie="<?=get_option('swt_hbanner')?>" height="70" width="960" /]

<? }?>