<?php function true_custom_fields() {
	add_post_type_support( 'page', 'custom-fields'); 
}
 
add_action('init', 'true_custom_fields'); ?>