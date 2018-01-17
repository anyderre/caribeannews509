<?php
/*
Plugin Name: Google Adsense Ads Manager  
Plugin URI: https://crunchify.com/google-adsense-ads-manager-wordpress-plugin/
Description: Fastest & Simplest Google Adsense WordPress Plugin with Customization Options
Version: 1.7
Author: Crunchify
Author URI: https://crunchify.com
Text Domain: simplest-adsense-ads-manager
*/

/*
    Copyright (C) 2017 Crunchify, LLC.

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function google_adsense_optimized_strikable(){
  add_submenu_page("options-general.php", "Google Adsense", "Google Adsense", "manage_options", "google-adsense-optimized-buttons-strikable", "google_adsense_optimized_striakble_page"); 
}

add_action("admin_menu", "google_adsense_optimized_strikable");

function google_adsense_optimized_striakble_page(){
   ?>
      <div class="wrap">
         <h1>Simplest Adsense Ads Manager - By <a href="https://crunchify.com/google-adsense-ads-manager-wordpress-plugin/" target="_blank">Crunchify</a></h1>
         <br>
         <form method="post" action="options.php">
            <?php
               settings_fields("google_adsense_optimized_strikable_config_section");
               do_settings_sections("google-adsense-optimized-buttons-strikable");
               submit_button(); 
            ?>
         </form>
         
        <div class="postbox" style="width: 65%; padding: 20px;">
        <h3>Follow us to get latest update. DM me on Twitter for quick reply.</h3>
        <a href="https://twitter.com/Crunchify" class="twitter-follow-button" data-show-count="false">Follow @Crunchify</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

         <div id="fb-root"></div>
				<script>(function(d, s, id) {
 				 var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
 				 fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			
		<div class="fb-like" data-href="https://www.facebook.com/Crunchify" data-width="50px" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
		</div>
      </div>
   <?php
}

function google_adsense_optimized_buttons_page_settings(){
    add_settings_section("google_adsense_optimized_strikable_config_section", "", null, "google-adsense-optimized-buttons-strikable");
 
    add_settings_field("google_adsense_optimized_show_before_content", "Before Content Ads Properties", "google_adsense_optimized_show_before_content_value", "google-adsense-optimized-buttons-strikable", "google_adsense_optimized_strikable_config_section");
    add_settings_field("google_adsense_optimized_show_mid_content", "Middle Content Ads Properties", "google_adsense_optimized_show_mid_content_value", "google-adsense-optimized-buttons-strikable", "google_adsense_optimized_strikable_config_section");
    add_settings_field("google_adsense_optimized_show_after_content", "After Content Ads Properites", "google_adsense_optimized_show_after_content_value", "google-adsense-optimized-buttons-strikable", "google_adsense_optimized_strikable_config_section");
 
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_show_before_content");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_show_mid_content");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_show_after_content");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_before_content_data");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_mid_content_data");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_after_content_data");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_before_content_align");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_mid_content_align");
    register_setting("google_adsense_optimized_strikable_config_section", "google_adsense_optimized_after_content_align");

    register_setting("google_adsense_optimized_strikable_config_section", "ga_strikable_before_myoption");
    register_setting("google_adsense_optimized_strikable_config_section", "ga_strikable_mid_myoption");
    register_setting("google_adsense_optimized_strikable_config_section", "ga_strikable_after_myoption");

    register_setting("google_adsense_optimized_strikable_config_section", "ga_strikable_mid_para_value");

}

function google_adsense_optimized_show_before_content_value(){  
   ?>
   <div class="postbox" style="width: 65%; padding: 30px;">
        <input type="checkbox" name="google_adsense_optimized_show_before_content" value="1" <?php checked(1, get_option('google_adsense_optimized_show_before_content'), true); ?> /> Check to Enable <i>top post</i> ads
        <br><br>
        <textarea name="google_adsense_optimized_before_content_data" cols="60" rows="6"><?php echo get_option('google_adsense_optimized_before_content_data'); ?></textarea>

	<br><br> CSS Float Property:
   	<?php $value = get_option(google_adsense_optimized_before_content_align); ?>
        <select name="google_adsense_optimized_before_content_align">
  			<option value="left" <?php if ( 'left' == $value ) echo 'selected'; ?>>Align Left</option>
 			<option value="center" <?php if ( 'center' == $value ) echo 'selected'; ?>>Align Center</option>
			<option value="right" <?php if ( 'right' == $value ) echo 'selected'; ?>>Align Right</option>
		</select>

		<br><br> Show on: 
		<?php $options = get_option(ga_strikable_before_myoption); ?>
			<input type="checkbox" name="ga_strikable_before_myoption[ga_strikable_before_home]" value="1"<?php checked( isset( $options['ga_strikable_before_home'] ) ); ?> />Home
			<input type="checkbox" name="ga_strikable_before_myoption[ga_strikable_before_page]" value="1"<?php checked( isset( $options['ga_strikable_before_page'] ) ); ?> />Page
			<input type="checkbox" name="ga_strikable_before_myoption[ga_strikable_before_post]" value="1"<?php checked( isset( $options['ga_strikable_before_post'] ) ); ?> />Post
	</div>		
   <?php
}

function google_adsense_optimized_show_mid_content_value(){  
   ?>
   <div class="postbox" style="width: 65%; padding: 30px;">
        <input type="checkbox" name="google_adsense_optimized_show_mid_content" value="1" <?php checked(1, get_option('google_adsense_optimized_show_mid_content'), true); ?> /> Check to Enable <i>middle post</i> ads
		<br><br>
        <textarea name="google_adsense_optimized_mid_content_data" cols="60" rows="6"><?php echo get_option('google_adsense_optimized_mid_content_data'); ?></textarea>
	
		<br><br>
        Add ads after which paragraph? <textarea name="ga_strikable_mid_para_value" cols="10" rows="1"><?php echo get_option('ga_strikable_mid_para_value'); ?></textarea> (Default value 3)

		<br><br> CSS Float Property:
   		<?php $value = get_option(google_adsense_optimized_mid_content_align); ?>
        <select name="google_adsense_optimized_mid_content_align">
  			<option value="left" <?php if ( 'left' == $value ) echo 'selected'; ?>>Align Left</option>
  			<option value="center" <?php if ( 'center' == $value ) echo 'selected'; ?>>Align Center</option>
  			<option value="right" <?php if ( 'right' == $value ) echo 'selected'; ?>>Align Right</option>
		</select>

		<br><br> Show on: 
		<?php $options = get_option(ga_strikable_mid_myoption); ?>
			<input type="checkbox" name="ga_strikable_mid_myoption[ga_strikable_mid_home]" value="1"<?php checked( isset( $options['ga_strikable_mid_home'] ) ); ?> />Home
			<input type="checkbox" name="ga_strikable_mid_myoption[ga_strikable_mid_page]" value="1"<?php checked( isset( $options['ga_strikable_mid_page'] ) ); ?> />Page
			<input type="checkbox" name="ga_strikable_mid_myoption[ga_strikable_mid_post]" value="1"<?php checked( isset( $options['ga_strikable_mid_post'] ) ); ?> />Post
	</div>
   <?php
}

function google_adsense_optimized_show_after_content_value(){  
   ?>
   <div class="postbox" style="width: 65%; padding: 30px;">
        <input type="checkbox" name="google_adsense_optimized_show_after_content" value="1" <?php checked(1, get_option('google_adsense_optimized_show_after_content'), true); ?> /> Check to Enable <i>bottom post</i> ads
        <br><br>
        <textarea name="google_adsense_optimized_after_content_data" cols="60" rows="6"><?php echo get_option('google_adsense_optimized_after_content_data'); ?></textarea>
   
   		<br><br> CSS Float Property:
   		<?php $value = get_option(google_adsense_optimized_after_content_align); ?>
        <select name="google_adsense_optimized_after_content_align">
 			 <option value="left" <?php if ( 'left' == $value ) echo 'selected'; ?>>Align Left</option>
 			 <option value="center" <?php if ( 'center' == $value ) echo 'selected'; ?>>Align Center</option>
 			 <option value="right" <?php if ( 'right' == $value ) echo 'selected'; ?>>Align Right</option>
		</select>

		<br><br> Show on: 
		<?php $options = get_option(ga_strikable_after_myoption); ?>
			<input type="checkbox" name="ga_strikable_after_myoption[ga_strikable_after_home]" value="1"<?php checked( isset( $options['ga_strikable_after_home'] ) ); ?> />Home
			<input type="checkbox" name="ga_strikable_after_myoption[ga_strikable_after_page]" value="1"<?php checked( isset( $options['ga_strikable_after_page'] ) ); ?> />Page
			<input type="checkbox" name="ga_strikable_after_myoption[ga_strikable_after_post]" value="1"<?php checked( isset( $options['ga_strikable_after_post'] ) ); ?> />Post
	</div>
  <?php
}

add_action("admin_init", "google_adsense_optimized_buttons_page_settings");

//Insert Adsense code in the middle of Single Post content
function ga_strikable_mid_ads( $content, $ga_mid_data, $ga_mid_align) {

      $my_mid_ads_label_start = '<!-- Google Adsense Ads Manager plugin by Crunchify.com - Middle post Ad START -->';
      $my_mid_ads_label_end = '<!-- Google Adsense Ads Manager plugin by Crunchify.com - Middle post Ad END -->';

 	  $single_post_ads = $my_mid_ads_label_start. '<div style="text-align:'.$ga_mid_align.';"><p>'.$ga_mid_data.'</p></div>'.$my_mid_ads_label_end;
      $ga_strikable_mid_paragraph_value = get_option(ga_strikable_mid_para_value);
      
      if (empty($ga_strikable_mid_paragraph_value)){
      		$ga_strikable_mid_paragraph_value = 3;
      }
      $ga_strikable_mid_options = get_option(ga_strikable_mid_myoption);
         	
         	if(is_home() && isset( $ga_strikable_mid_options['ga_strikable_mid_home'] )){
         		     return ga_strikable_insert_ads( $single_post_ads, $ga_strikable_mid_paragraph_value, $content ); 	 	
         	} if(is_page() && isset( $ga_strikable_mid_options['ga_strikable_mid_page']) ){
         	 	     return ga_strikable_insert_ads( $single_post_ads, $ga_strikable_mid_paragraph_value, $content );
         	} if(is_single() && isset( $ga_strikable_mid_options['ga_strikable_mid_post'])){
         	 	     return ga_strikable_insert_ads( $single_post_ads, $ga_strikable_mid_paragraph_value, $content );
         	} else {
         	         return $content;
         	}
}

// This function identifies after which paragraph we need to insert ads
function ga_strikable_insert_ads( $ads, $after_which_paragraph, $content ) {
    $identify_paragraph = '</p>';
    $strikableData = explode( $identify_paragraph, $content );
    foreach ($strikableData as $index => $paragraph) {
        if ( trim( $paragraph ) ) {
            $strikableData[$index] .= $identify_paragraph;
        }
        if ( $after_which_paragraph == $index + 1 ) {
            $strikableData[$index] .= $ads;
        }
    }
    return implode( '', $strikableData );
}

function ga_strikable_add_optimized_adsense_code($content) {

		$post = get_post();
		$post_id = get_the_ID();
		$strikable_ga_meta = get_post_meta($post_id, 'crunchify_adsense', true);
		
		// echo $strikable_ga_meta;
		if(!($strikable_ga_meta == "no")){
			if(get_option("google_adsense_optimized_show_before_content") == 1){

				$my_before_ads_label_start = '<!-- Google Adsense Ads Manager plugin by Crunchify.com - Top post Ad START -->';
				$my_before_ads_label_end = '<!-- Google Adsense Ads Manager plugin by Crunchify.com - Top post Ad END -->';         	
			
				$ga_before_data = get_option("google_adsense_optimized_before_content_data");
				$ga_before_align = get_option("google_adsense_optimized_before_content_align");
						
				$my_before_ads = $my_before_ads_label_start. '<div style="text-align:'.$ga_before_align.';"><p>'.$ga_before_data.'</p></div>' . $my_before_ads_label_end;         	
				$ga_strikable_before_options = get_option(ga_strikable_before_myoption);
			
				if(is_home() && isset( $ga_strikable_before_options['ga_strikable_before_home'] )){
						 $content = $my_before_ads.$content;
				} if(is_page() && isset( $ga_strikable_before_options['ga_strikable_before_page']) ){
						$content = $my_before_ads.$content;
				} if(is_single() && isset( $ga_strikable_before_options['ga_strikable_before_post'])){
						$content = $my_before_ads.$content;
				} else {
						$content = $content;
				}
			}
		
			if(get_option("google_adsense_optimized_show_mid_content") == 1){
		
				$ga_mid_data = get_option("google_adsense_optimized_mid_content_data");
				$ga_mid_align = get_option("google_adsense_optimized_mid_content_align");

				$content = ga_strikable_mid_ads($content, $ga_mid_data, $ga_mid_align );
			}
			if(get_option("google_adsense_optimized_show_after_content") == 1){
		
				$my_after_ads_label_start = '<!-- Google Adsense Ads Manager plugin by Crunchify.com - After post Ad START -->';
				$my_after_ads_label_end = '<!-- Google Adsense Ads Manager plugin by Crunchify.com - After post Ad END -->';

				$ga_after_data = get_option("google_adsense_optimized_after_content_data");
				$ga_after_align = get_option("google_adsense_optimized_after_content_align");

				$my_after_ads = $my_after_ads_label_start . '<div style="text-align:'.$ga_after_align.';"><p>'.$ga_after_data.'</p></div>'. $my_after_ads_label_end;
				$ga_strikable_after_options = get_option(ga_strikable_after_myoption);
			
				if(is_home() && isset( $ga_strikable_after_options['ga_strikable_after_home'] )){
						 $content = $content.$my_after_ads;
				} if(is_page() && isset( $ga_strikable_after_options['ga_strikable_after_page']) ){
						$content = $content.$my_after_ads;
				} if(is_single() && isset( $ga_strikable_after_options['ga_strikable_after_post'])){
						$content = $content.$my_after_ads;
				} else {
						$content = $content;
				} 
			}
        }else{
         	$content = $content;
        }
		return $content;
};

add_filter( 'the_content', 'ga_strikable_add_optimized_adsense_code');