<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => 'Get help here'
    ),
    'sections'        => array( 
      array(
        'id'          => 'ot_general',
        'title'       => 'General'
      ),
      array(
        'id'          => 'cb_homepage',
        'title'       => 'Homepage'
      ),
      array(
        'id'          => 'cb_menus',
        'title'       => 'Navigation Menus'
      ),
      array(
        'id'          => 'cb_post_settings',
        'title'       => 'Posts'
      ),
      array(
        'id'          => 'ot_styling',
        'title'       => 'Global Styling'
      ),
      array(
        'id'          => 'ot_typography',
        'title'       => 'Typography'
      ),
      array(
        'id'          => 'ot_footer',
        'title'       => 'Footer'
      ),
      array(
        'id'          => 'ot_advertising',
        'title'       => 'Advertisement'
      ),
      array(
        'id'          => 'ot_custom_code',
        'title'       => 'Custom Code'
      ),
      array(
        'id'          => 'cb_theme_help',
        'title'       => 'Theme Help'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'cb_logo_url',
        'label'       => 'Logo',
        'desc'        => 'Upload your logo (Recommended size: 260px x 70px). Automatically loads Retina version if available. See documentation for more details.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'ot_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_favicon_url',
        'label'       => 'Favicon',
        'desc'        => 'Upload your favicon.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'ot_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_theme_style',
        'label'       => 'Theme Style',
        'desc'        => '',
        'std'         => 'cb_boxed',
        'type'        => 'radio-image',
        'section'     => 'ot_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb_boxed',
            'label'       => 'Boxed',
            'src'         => '/theme_style_b.png'
          ),
          array(
            'value'       => 'cb_full',
            'label'       => 'Full-Width Layout',
            'src'         => '/theme_style_a.png'
          )
        ),
      ),
      array(
        'id'          => 'cb_to_top',
        'label'       => 'To Top Button',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'ot_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_meta_onoff',
        'label'       => 'Show "By line" (By x on 01/01/01 in category)',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'ot_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_lightbox_onoff',
        'label'       => 'Lightbox',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'ot_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_breadcrumbs',
        'label'       => 'Breadcrumbs',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'ot_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_blog_style',
        'label'       => 'Blog Style',
        'desc'        => '',
        'std'         => 'style-a',
        'type'        => 'radio-image',
        'section'     => 'cb_homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'style-a',
            'label'       => 'Style A',
            'src'         => '/blog_style_a.png'
          ),
          array(
            'value'       => 'style-b',
            'label'       => 'Style B',
            'src'         => '/blog_style_b.png'
          ),
          array(
            'value'       => 'style-c',
            'label'       => 'Style C',
            'src'         => '/blog_style_c.png'
          ),
          array(
            'value'       => 'style-d',
            'label'       => 'Style D',
            'src'         => '/blog_style_d.png'
          )
        ),
      ),
      array(
        'id'          => 'cb_hp_gridslider',
        'label'       => 'Featured Posts',
        'desc'        => 'Show a grid or slider above your homepage\'s "Latest Posts" content.',
        'std'         => 'cb_full_off',
        'type'        => 'radio-image',
        'section'     => 'cb_homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
            array(
                'value'       => 'cb_full_off',
                'label'       => 'Off',
                'src'         => '/off.png'
              ),
            array(
                'value'       => 'grid-4',
                'label'       => 'Grid 4',
                'src'         => '/grid_4.png'
              ),
              array(
                'value'       => 'grid-5',
                'label'       => 'Grid 5',
                'src'         => '/grid_5.png'
              ),
              array(
                'value'       => 'grid-6',
                'label'       => 'Grid 6',
                'src'         => '/grid_6.png'
              ),
              array(
                'value'       => 'full-slider',
                'label'       => 'Slider',
                'src'         => '/module_slider_hp.png'
              )
        ),
      ),
      array(
        'id'          => 'cb_gridslider_category',
        'label'       => 'Grid/Slider Category Filter',
        'desc'        => 'Optional category filter for featured posts Grid/Slider (if no categories are checked, featured will show all categories)',
        'std'         => '',
        'type'        => 'category-checkbox',
        'section'     => 'cb_homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_sticky_nav',
        'label'       => 'Sticky Main Navigation Bar',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_menus',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_main_nav_icons',
        'label'       => 'Show Search And/Or Login Icons In Main Menu',
        'desc'        => '<strong>Note:</strong> Login option requires "Login With Ajax" plugin to be installed and active',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_menus',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'both',
            'label'       => 'Show Search + Login',
            'src'         => ''
          ),
          array(
            'value'       => 'search',
            'label'       => 'Only Show Search',
            'src'         => ''
          ),
          array(
            'value'       => 'login',
            'label'       => 'Only Show Login',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_menu_style',
        'label'       => 'Main Navigation Style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_menus',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb_dark',
            'label'       => 'Dark',
            'src'         => ''
          ),
           array(
            'value'       => 'cb_light',
            'label'       => 'Light',
            'src'         => ''
          )
        ),
      ),
        array(
        'id'          => 'cb_breaking_news',
        'label'       => 'Breaking News Under Navigation Menu',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_menus',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
       array(
        'id'          => 'cb_breaking_news_filter',
        'label'       => 'Breaking News Filter',
        'desc'        => 'Optional category filter for breaking news (if no categories are checked - all categories will be shown)',
        'std'         => '',
        'type'        => 'category-checkbox',
        'section'     => 'cb_menus',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_social_sharing',
        'label'       => 'Social Sharing',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_comments_onoff',
        'label'       => 'Comments',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb_comments_on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'cb_comments_off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_author_box_onoff',
        'label'       => 'Show author box in articles',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb_author_box_on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'cb_author_box_off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_previous_next_onoff',
        'label'       => 'Show Next/Previous in articles',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb_previous_next_on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'cb_previous_next_off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_related_onoff',
        'label'       => 'Show related posts',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'cb_post_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb_related_on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'cb_related_off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_base_color',
        'label'       => 'Global Color',
        'desc'        => 'Color to show on menu, hovers, borders, etc if a page, post, category, etc doesn\'t have their own specific color set.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'ot_styling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_background_image',
        'label'       => 'Global Background Image',
        'desc'        => 'Upload a background image. Can be overriden by category/post/page background settings',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'ot_styling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_bg_image_setting',
        'label'       => 'Background Image Setting',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'ot_styling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Full-width stretch',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Repeat',
            'src'         => ''
          ),
          array(
            'value'       => '3',
            'label'       => 'No-repeat',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'cb_background_colour',
        'label'       => 'Global Background Colour',
        'desc'        => 'Overall background color. Can be overriden by category/post/page background settings',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'ot_styling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_link_color',
        'label'       => 'Hyperlink text Color',
        'desc'        => 'Overrides the default color for text links within posts/page body text.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'ot_styling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_header_font',
        'label'       => 'Recommended Header Fonts',
        'desc'        => 'Select the font of the Headers and important titles.',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'ot_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
        array(
            'value'       => "'Oswald', sans-serif;",
            'label'       => 'Oswald (Very Recommended)',
            'src'         => ''
          ),
          array(
            'value'       => "'Arvo', serif;",
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => "'Gudea', sans-serif;",
            'label'       => 'Gudea',
            'src'         => ''
          ),

          array(
            'value'       => "'Open Sans', sans-serif;",
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          
          array(
            'value'       => "'PT Sans', sans-serif;",
            'label'       => 'PT Sans',
            'src'         => ''
          ),

          array(
            'value'       => "'Titillium Web', sans-serif;",
            'label'       => 'Titillium Web',
            'src'         => ''
          ),
           array(
            'value'       => "'Ubuntu', sans-serif;",
            'label'       => 'Ubuntu',
            'src'         => ''
          ),

        ),
      ),
      array(
        'id'          => 'cb_user_header_font',
        'label'       => 'Override Header Font',
        'desc'        => 'Overrides Recommended Header Font. Enter any Google Font from http://www.google.com/fonts. Example of use: \'Playfair Display SC\', serif;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'ot_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_body_font',
        'label'       => 'Recommended Body Font',
        'desc'        => 'Select the font of the body text.',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'ot_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
         array(
            'value'       => "'Open Sans', sans-serif;",
            'label'       => 'Open Sans (Very Recommended)',
            'src'         => ''
          ),
          array(
            'value'       => "'Arimo', sans-serif;",
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => "'Droid Sans', sans-serif;",
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => "'Istok Web', sans-serif;",
            'label'       => 'Istok Web',
            'src'         => ''
          ),
          array(
            'value'       => "'PT Sans', sans-serif;",
            'label'       => 'PT Sans',
            'src'         => ''
          ),
           array(
            'value'       => "'Quattrocento Sans', sans-serif;",
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => "'Raleway', sans-serif;",
            'label'       => 'Raleway',
            'src'         => ''
          ),
        ),
      ),
      array(
        'id'          => 'cb_user_body_font',
        'label'       => 'Override Body Font',
        'desc'        => 'Overrides Recommended Body Font. Enter any Google Font from http://www.google.com/fonts. Example: \'Noto Sans\', sans-serif;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'ot_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_footer_copyright',
        'label'       => 'Footer Copyright',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ot_footer',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_footer_layout',
        'label'       => 'Footer Layout',
        'desc'        => '',
        'std'         => 'cb-footer-a',
        'type'        => 'radio-image',
        'section'     => 'ot_footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb-footer-a',
            'label'       => 'Layout A',
            'src'         => '/footer_style_a.png'
          ),
          array(
            'value'       => 'cb-footer-b',
            'label'       => 'Layout B',
            'src'         => '/footer_style_b.png'
          ),
          array(
            'value'       => 'cb-footer-c',
            'label'       => 'Layout C',
            'src'         => '/footer_style_c.png'
          ),
          array(
            'value'       => 'cb-footer-d',
            'label'       => 'Layout D',
            'src'         => '/footer_style_d.png'
          )
        ),
      ),
      array(
        'id'          => 'cb_banner_selection',
        'label'       => 'Banner Selection',
        'desc'        => 'Type of ad to appear in the site\'s header (Next to the logo)',
        'std'         => 'cb_banner_off',
        'type'        => 'radio-image',
        'section'     => 'ot_advertising',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb_banner_off',
            'label'       => 'Off',
            'src'         => '/off.png'
          ),
          array(
            'value'       => 'cb_banner_468',
            'label'       => 'Banner 468x60',
            'src'         => '/ada.png'
          ),
          array(
            'value'       => 'cb_banner_728',
            'label'       => 'Banner 728x90',
            'src'         => '/adb.png'
          )
        ),
      ),
      array(
        'id'          => 'cb_banner_code',
        'label'       => 'Banner Code',
        'desc'        => 'Enter your ad code.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ot_advertising',
        'rows'        => '4',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_custom_css',
        'label'       => 'Custom CSS',
        'desc'        => 'No need to hard-edit style.css anymore. All your CSS modifications can be done here so you do not lose them in future theme updates. (It is still recommended to save a backup of this custom CSS to a separate .txt file)',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'ot_custom_code',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_custom_head',
        'label'       => 'Code For &lt;head&gt; section',
        'desc'        => 'No need to hard-edit files anymore to add custom Javascript/code to your head. Code in this box will appear before the closing head tag.',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'ot_custom_code',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_custom_footer',
        'label'       => 'Code For &lt;footer&gt; section',
        'desc'        => 'No need to hard-edit files anymore to add custom Javascript/code to your footer. Code in this box will appear right before the closing body tag.',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'ot_custom_code',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cb_how_to_get_support',
        'label'       => 'Having trouble with Valenti?',
        'desc'        => '',
        'std'         => '',
        'type'        => 'radio-image',
        'section'     => 'cb_theme_help',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'cb-doc',
            'label'       => 'Documentation',
            'src'         => '/help_doc.png'
          ),
          array(
            'value'       => 'cb_help_forum',
            'label'       => 'Support Forum',
            'src'         => '/help_forum.png'
          )
        ),
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}