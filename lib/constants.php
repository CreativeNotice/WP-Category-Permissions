<?php
/**
 * Constants used by this plugin
 * 
 * @package cn_CatPerms
 * 
 * @author CreativeNotice
 * @version 0.1
 * @since 0.1
 */

// The current version of this plugin
if( !defined( 'CN_CATPERMS_VERSION' ) ) define( 'CN_CATPERMS_VERSION', '1.0.0' );

// The directory the plugin resides in
if( !defined( 'CN_CATPERMS_DIRNAME' ) ) define( 'CN_CATPERMS_DIRNAME', dirname( dirname( __FILE__ ) ) );

// The URL path of this plugin
if( !defined( 'CN_CATPERMS_URLPATH' ) ) define( 'CN_CATPERMS_URLPATH', WP_PLUGIN_URL . "/" . plugin_basename( CN_CATPERMS_DIRNAME ) );

if( !defined( 'IS_AJAX_REQUEST' ) ) define( 'IS_AJAX_REQUEST', ( !empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest' ) );