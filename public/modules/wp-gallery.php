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

var mobx_wp_gallery = function() {

	var wp_galleries = document.querySelectorAll( '.gallery[id*="gallery-"]' );

	for ( var g = 0, gl = wp_galleries.length; g < gl; g++ ) {
	
		// Remove data carousel attr to prevent opening lightbox (jetPack)
		wp_galleries[g].removeAttribute( 'data-carousel-extra' );

		var wp_images = wp_galleries[g].querySelectorAll( '.gallery-icon > a' );

		for ( var i = 0, il = wp_images.length; i < il; i++ ) {

			var wp_link  = wp_images[i],
				wp_image = wp_link.firstElementChild,
				isAuto   = ( wp_image.title || wp_image.alt ) && mobx_options.autoCaption,
				caption  = wp_link.parentElement.nextElementSibling;
				caption  = caption && caption.className.indexOf( 'wp-caption-text' ) > -1 ? caption.innerHTML : '';

			mobx.addAttr( wp_link, {
				rel    : 'wp-gallery-' + ( g + 1),
				title  : isAuto ? wp_image.title || wp_image.alt  : caption || '',
				desc   : isAuto ? caption : '',
				thumb  : wp_image.src
			});

		}

	}

};

mobx_wp_gallery();

SCRIPT;
