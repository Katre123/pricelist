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

?>