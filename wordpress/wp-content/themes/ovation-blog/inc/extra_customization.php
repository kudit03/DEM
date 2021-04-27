<?php 

	$ovation_blog_sticky_header = get_theme_mod('ovation_blog_sticky_header');

	$ovation_blog_custom_style= "";

	if($ovation_blog_sticky_header != true){

		$ovation_blog_custom_style .='.wrap_figure.fixed{';

			$ovation_blog_custom_style .='position: static;';
			
		$ovation_blog_custom_style .='}';
	}