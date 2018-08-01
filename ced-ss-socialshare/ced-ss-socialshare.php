<?php
/*
* Plugin Name: CED SocialShare plugin
* Description: Plugin to add social icons
* Version: 1.0.0
* Author: CedCoss
* Author URI: https://cedcoss.com
* Text-domain: ced-ss-socialshare
*/
// Resctrict Direct Access
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
add_action( 'admin_menu', 'ced_ss_socialshare_menu_page' );
function ced_ss_socialshare_menu_page()
{
    add_menu_page('My Page Title', 'Add Social Icon', 'manage_options', 'my-menu', 'ced_ss_socialshare_menu_output' );
} 
function ced_ss_socialshare_menu_output()
{
	include 'admin/ced-ss-admin-setting.php';
}
include 'includes/ced-ss-includes.php';
/*Add the scripts*/
add_action("wp_enqueue_scripts", "ced_ss_socialshare_addscriptfunction");
function ced_ss_socialshare_addscriptfunction()
{
  wp_enqueue_script( "ced-mwb-bootstrap-js", plugin_dir_url( __FILE__ ) . '/assets/ced-ss-assets-mwb.js' );
}
function ced_ss_socialshare_the_icon($ced_ss_socialshare_text)
{	
	$ced_ss_socialshare_insta=get_option("instagram", false);
	$ced_ss_socialshare_google=get_option("google", false);
	$ced_ss_socialshare_twitter=get_option("twitter",false);
	$ced_ss_socialshare_enableinsta=get_option("checkinsta", false);
	$ced_ss_socialshare_enabletwitter=get_option("checktwitter", false);
	$ced_ss_socialshare_enablegoogle=get_option("checkgoogle", false);
    $ced_ss_socialshare_text2="";
	if($ced_ss_socialshare_enablegoogle=="on")
	{
	    $ced_ss_socialshare_link=add_query_arg( 'post_link', get_the_CONTENT(), 'https://www.google.com' );
	    $ced_ss_socialshare_img="";
	    $ced_ss_socialshare_img.="<a href='".$ced_ss_socialshare_link."'>".$ced_ss_socialshare_google."</a>";
		$ced_ss_socialshare_text2.=" ".$ced_ss_socialshare_img;
	}
	if($ced_ss_socialshare_enabletwitter=="on")
	{
		$ced_ss_socialshare_link=add_query_arg( 'post_link', get_the_CONTENT(), 'https://www.twitter.com' );
	    $ced_ss_socialshare_img="";
	    $ced_ss_socialshare_img.="<a href='".$ced_ss_socialshare_link."'>".$ced_ss_socialshare_twitter."</a>";
		$ced_ss_socialshare_text2.=" ".$ced_ss_socialshare_img;
	}
	if($ced_ss_socialshare_enableinsta=="on")
	{
		$ced_ss_socialshare_link=add_query_arg( 'post_link', get_the_CONTENT(), 'https://www.instagram.com' );
	    $ced_ss_socialshare_img="";
	    $ced_ss_socialshare_img.="<a href='".$ced_ss_socialshare_link."'>".$ced_ss_socialshare_insta."</a>";
		$ced_ss_socialshare_text2.=" ".$ced_ss_socialshare_img;		
	}
	return $ced_ss_socialshare_text.$ced_ss_socialshare_text2.'<div class="fb-share-button" data-href="'.get_permalink().'" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php" class="fb-xfbml-parse-ignore">Share</a></div>';	
}
add_filter( 'the_excerpt', 'ced_ss_socialshare_the_icon' );
add_filter( 'the_content', 'ced_ss_socialshare_the_icon' );
?>
