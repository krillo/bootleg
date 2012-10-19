<?php

add_theme_support('post-thumbnails');
register_nav_menu('primary', __('Primary Menu', 'bootleg'));


register_sidebar( array(
		'name' => __( 'Kontakt', 'bootleg' ),
	) );
