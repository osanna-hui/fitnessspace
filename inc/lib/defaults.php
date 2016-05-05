<?php
function fitnessspace_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'center_width' => 85,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '1',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('<a href="https://fitnessspacewp.com" target="_blank">fitnessspace WordPress Theme</a>', 'fitnessspace'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'slider_type_id' => 'static',
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',
		'static_img_text_id' => '<p><img class="size-full" src="'. get_template_directory_uri().'/assets/images/slide_icon.png" alt="slide_icon" width="100" height="100" /></p><p><span style="font-size: 36pt;">'.__('ADVANCED','fitnessspace').' . <strong>'.__('STRONG', 'fitnessspace').'</strong> . '.__('RELIABLE', 'fitnessspace').'</span></p><p>'.__('The fitnessspace, an easy to customizable multi-purpose theme with lots of powerful features.', 'fitnessspace').'</p>',
		'static_cta1_text' => __('DEMO', 'fitnessspace'),
		'static_cta1_link' => '#',
		'static_cta1_bg_color' => '#36abfc',
		'static_cta1_txt_color' => '#ffffff',
		'static_cta1_txt_style' => 'hollow',
		/*'static_cta2_text' => __('DOWNLOAD', 'fitnessspace'),
		'static_cta2_link' => '#',
		'static_cta2_bg_color' => '#36abfc',
		'static_cta2_txt_color' => '#ffffff',
		'static_cta2_txt_style' => 'flat',*/
		'static_textbox_width' => '85',
		'static_textbox_bottom' => '15',
		'slider_image_id' => array(  'url'=>''.get_template_directory_uri().'/img/unsplash_slider04.jpeg'),
		'slider_txt_color' => '#ffffff',
		'static_textbox_width' => '85',
		'static_textbox_bottom' => '15',
		'slider_content_align' =>'center',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#EEEFF5',
		'page_header_txtcolor' => '#555555',

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '1',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#36abfc',
		'sectxt_color_id' => '#FFFFFF',
		'content_font_id' =>  array('font-family' => 'Open Sans', 'font-size' => '16px'),
		'primtxt_color_id' => '#999999',
		'logo_font_id' => array('font-family' => 'Open Sans', 'font-size' => '36px'),
		'logo_color_id' => '#555555',
		'sec_color_id' => '#36abfc',
		'head_color_id' => '#f5f5f5',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#888888',
		'menutxt_color_hover' => '#ffffff',
		'menutxt_color_active' => '#3590ea',
		'menu_size_id' => '14px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'wgttitle_size_id' => '16px',
		'footer_color_id' => '#222222',
		'footwdgtxt_color_id' => '#666666',
		'footer_title_color' => '#ffffff',
		'ptitle_font_id' =>  array('font-family' => 'Open Sans', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '1',
		'copyright_bg_color' => '#333333',
		'copyright_txt_color' => '#999999',
		
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '1',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => '',
	);
	
      $options = get_option('fitnessspace',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>