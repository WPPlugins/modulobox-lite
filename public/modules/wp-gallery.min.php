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
var mobx_wp_gallery=function(){for(var d=document.querySelectorAll('.gallery[id*="gallery-"]'),b=0,k=d.length;b<k;b++){d[b].removeAttribute("data-carousel-extra");for(var g=d[b].querySelectorAll(".gallery-icon > a"),e=0,l=g.length;e<l;e++){var f=g[e],c=f.firstElementChild,h=(c.title||c.alt)&&mobx_options.autoCaption,a=f.parentElement.nextElementSibling,a=a&&-1<a.className.indexOf("wp-caption-text")?a.innerHTML:"";mobx.addAttr(f,{rel:"wp-gallery-"+(b+1),title:h?c.title||c.alt:a||"",desc:h?a:"",thumb:c.src})}}};mobx_wp_gallery();
SCRIPT;
