<?php

function w_w_ordering($order){
	return array(
		'menu_order' => __( 'Default sorting', 'woocommerce' ),
		'popularity' => __( 'Sort by popularity', 'woocommerce' ),
		'rating'     => __( 'Sort by average rating', 'woocommerce' ),
		'date'       => __( 'Sort by latest', 'woocommerce' ),
	);
}
add_filter(	'woocommerce_catalog_orderby', 'w_w_ordering', 10, 1);



function ts_get_subcategory_terms( $terms, $taxonomies, $args ) {
	$new_terms = array();
// if it is a product category and on the shop page


	if ( in_array( 'product_cat', $taxonomies ) && ! is_admin()  ) {

		foreach( $terms as $key => $term ) {
			if ( !in_array( $term->slug, array( 'signature-sauces' ) ) ) { //pass the slug name here
				$new_terms[] = $term;
			}}
		$terms = $new_terms;
	}
	return $terms;
}


add_filter( 'get_terms', 'ts_get_subcategory_terms', 10, 3 );


function blossom_shop_pro_customize_register_general_shop_1( $wp_customize ) {

    /** Shop Settings */

	    $wp_customize->add_setting( 'shop_header_image',
        array(
            'default'           => '',
            'sanitize_callback' => 'blossom_shop_pro_sanitize_image',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize, 'shop_header_image',
            array(
                'label'         => esc_html__( 'Shop Header Image', 'blossom-shop-pro' ),
                'description'   => esc_html__( 'Choose Image of your choice. Recommended size for this image is 1920px by 550px.', 'blossom-shop-pro' ),
                'section'       => 'shop_settings',
                'type'          => 'image',
            )
        )
    );





}
add_action( 'customize_register', 'blossom_shop_pro_customize_register_general_shop_1', 1, 999 );



function blossom_shop_pro_content_start_child(){


    $home_sections      = blossom_shop_pro_get_home_sections();

	$shop_header_image   = get_theme_mod( 'shop_header_image', false );
    $add_style_one = '';
	$add_style_one_header = '';


    if( is_woocommerce_activated() && is_shop() && $shop_header_image ) {
        $add_style_one_header  = 'style="background-image: url(\'' . esc_url( $shop_header_image ) . '\')"' ;
    }
    if ( ! is_home() && ! is_front_page() ) blossom_shop_pro_breadcrumb();

    if( ! ( is_front_page() && ! is_home() && $home_sections ) ){ ?>
        <div class="site-content">
        <?php if( ! is_home() && !( is_woocommerce_activated() && is_product() ) ) : ?>
		  <?php if($add_style_one_header) echo '<div class="page-header has-bgimg lms-image"'.  $add_style_one_header.'> </div>'; ?>

              <?php
         endif;

     ?>
	     </div>
    <?php
    }
}

add_action( 'blossom_shop_pro_content', 'blossom_shop_pro_content_start_child' );

