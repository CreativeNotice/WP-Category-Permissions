<?php
/**
 * functions for this plugin
 * 
 * Place all functions that may be usable in the controller.
 * 
 * @package cn_CatPerms
 * 
 * @author CreativeNotice
 * @version 0.1
 * @since 0,1
 */

/**
 * cn_Walker_Category_Input_Hierarchy
 * Extends WP's Walker_Category class for a custom hierarchial list of categories
 */
Class cn_Walker_Category_Input_Hierarchy Extends Walker_Category {

	function start_el(&$output, $category, $depth, $args) {

 		extract($args);
 		$cat_name = esc_attr( $category->name);
 		$cat_name = apply_filters( 'list_cats', $cat_name, $category );
 		$input = '<label><input type="checkbox" value="' . $category->term_id . '"> ' . $cat_name . '</label>';
 		// Wrap input in list element
 		$output .= "\t<li>" . $input . "\n";

 	}

}