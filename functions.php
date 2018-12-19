<?php

add_action('woocommerce_after_shop_loop_item', 'get_star_rating' );
function get_star_rating()
{
    global $woocommerce, $product;
    $average = $product->get_average_rating();

    echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
}


//fontawsome script lisamine
//jquery script lisamine

function myScripts() {
wp_enqueue_style ("fontawsome11",get_stylesheet_directory_uri() . "/css/fonts/fonts.css");
wp_enqueue_script ("jquery1",get_stylesheet_directory_uri() . "/jquery/jquery.min.js");
wp_enqueue_script ("mousewheel",get_stylesheet_directory_uri() . "/Script/jquery/mousewheel.js", array(), "3.1.1", true);
}

add_action("wp_enqueue_scripts", "myScripts");


//menüüde registreerimine wp-s

//function myMenu() {
//	wp_nav_menu(
//		array (
//			"Menu" => "Konto menüü", 
//			"Menu_class"=>"main-navigation"
//		)
//	);}

//
//add_filter("menuuImply", "myMenu");


function register_menu() {
	register_nav_menus(
		array(
			'account-menu'=>__('Account Menu')
		)
		
		);
	
}

add_action ("init", "register_menu");

function change_default_galleria_header() {
remove_action( 'storefront_header', 'storefront_header_cart', 4 );
remove_action( 'storefront_header', 'storefront_product_search', 3 );
remove_action( 'storefront_header', 'storefront_secondary_navigation', 6 );
remove_action( 'storefront_header', 'storefront_site_branding', 5 );
remove_action( 'storefront_header', array( 'Galleria_Structure', 'galleria_primary_navigation_wrapper' ), 49 );
remove_action( 'storefront_header', array( 'Galleria_Structure', 'galleria_primary_navigation_wrapper_close' ), 61 );
remove_action( 'storefront_header', array( 'Galleria_Structure', 'galleria_top_bar_wrapper' ), 1 );
remove_action( 'storefront_header', array( 'Galleria_Structure', 'galleria_top_bar_wrapper_close' ), 6 );

}
add_action( 'wp_head', 'change_default_galleria_header' );



//Teeme ühe widgeti juurde 

function productCategoryRegister() {
	register_sidebar(
	array(
		"name"=> __("Sale discount for computers"),
		"description"=> __("Sale discount for computers no1"),
		"before_widget"=> '<div class="Sale account">',
		"after_widget"=>'</div>'
		)
	);
	
}
//add_action( unikaalne nimi, funktsiooni nimi);

add_action("productCategoryTest","productCategoryRegister");

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

?>