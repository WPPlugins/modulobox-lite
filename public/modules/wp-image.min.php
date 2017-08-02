<?php
/**
 * @package   ModuloBox
 * @author    Themeone <themeone.master@gmail.com>
 * @copyright 2017 Themeone
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return <<<'SCRIPT'
var mobx_wp_images=function(){for(var d=document.querySelectorAll('a > img[class*="wp-image-"]'),c=0,g=d.length;c<g;c++){var a=d[c],e=a.parentElement,f=(a.title||a.alt)&&mobx_options.autoCaption,b=e.nextElementSibling,b=b&&-1<b.className.indexOf("wp-caption-text")?b.innerHTML:"";a.setAttribute("data-src",e.href);mobx.addAttr(a,{title:f?a.title||a.alt:b||"",desc:f?b:""})}};jQuery(document).ready(function(){jQuery(".single-image-gallery").removeData("carousel-extra");mobx_wp_images()});
SCRIPT;
