<?php
/**
 * Theme functions and definitions
 *
 * @package responsive_blogger
 */ 


if ( ! function_exists( 'responsive_blogger_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function responsive_blogger_enqueue_styles() {
		wp_enqueue_style( 'ovation-blog-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'responsive-blogger-style', get_stylesheet_directory_uri() . '/style.css', array( 'ovation-blog-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'responsive_blogger_enqueue_styles', 99 );

function responsive_blogger_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'ovation_blog_pro' );
}
add_action( 'customize_register', 'responsive_blogger_customize_register', 11 );

function responsive_blogger_customize( $wp_customize ) {
    // Horizontal Post Slider
    $wp_customize->add_section('responsive_blogger_horizontal_slider',array(
        'title' => esc_html__('Single Post Slider','responsive-blogger'),
        'description' => __( 'Image Dimension ( 600 x 300 ) px', 'responsive-blogger' ),
        'priority' => 7,
    ));

    $wp_customize->add_setting('responsive_blogger_horizontal_post_slider_arrows',array(
       'default' => true,
       'sanitize_callback'  => 'ovation_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('responsive_blogger_horizontal_post_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Horizontal Post Slider','responsive-blogger'),
       'section' => 'responsive_blogger_horizontal_slider',
    ));

    $args = array('numberposts' => -1);
    $post_list = get_posts($args);
    $i = 0; 
    $pst_sls[]= __('Select','responsive-blogger');
    foreach ($post_list as $key => $p_post) {
        $pst_sls[$p_post->ID]=$p_post->post_title;
    }
    for ( $s = 1; $s <= 4; $s++ ) {
        $wp_customize->add_setting('responsive_blogger_horizontal_post_setting'.$s,array(
            'sanitize_callback' => 'ovation_blog_sanitize_choices',
        ));
        $wp_customize->add_control('responsive_blogger_horizontal_post_setting'.$s,array(
            'type'    => 'select',
            'choices' => $pst_sls,
            'label' => __('Select post','responsive-blogger'),
            'section' => 'responsive_blogger_horizontal_slider',
        ));
    }
    wp_reset_postdata();
}
add_action( 'customize_register', 'responsive_blogger_customize' );

function responsive_blogger_header_style() {
    if ( get_header_image() ) :
    $custom_css = "
        .wrap_figure{
            background-image:url('".esc_url(get_header_image())."');
            background-position: center top;
        }";
        wp_add_inline_style( 'ovation-blog-style', $custom_css );
    endif;
}
add_action( 'wp_enqueue_scripts', 'responsive_blogger_header_style' );