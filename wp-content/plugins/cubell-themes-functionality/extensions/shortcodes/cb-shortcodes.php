<?php	
	// Video Gallery Shortcode
	function videogallery_shortcode( $atts, $content = NULL )
	{
		extract( shortcode_atts( array(

		  'video1' => '',
		  'url1' => '',
		  'image1' => '',
		  'caption1' => '',
		  'video2' => '',
		  'url2' => '',
		  'image2' => '',
		  'caption2' => '',
		  'video3' => '',
		  'url3' => '',
		  'image3' => '',
		  'caption3' => '',
		  'video4' => '',
		  'url4' => '',
		  'image4' => '',
		  'caption4' => '',		  		  		  
		  ), $atts ) );
          
        $size = 1;

        if ( $video2 != NULL) { $size++; }
        if ( $video3 != NULL) { $size++; }
        if ( $video4 != NULL) { $size++; }

		if ($video1 == 'youtube') { $finalurl1 = 'http://www.youtube.com/embed/'.$url1; }	
		if ($video1 == 'vimeo') {	$finalurl1 = 'http://player.vimeo.com/video/'.$url1; }
		
		if ($video2 == 'youtube') { $finalurl2 = 'http://www.youtube.com/embed/'.$url2;	}
		if ($video2 == 'vimeo')	{ $finalurl2 = 'http://player.vimeo.com/video/'.$url2; }
				
		
		if ( $size == 2 ) {
		  return '<div class="cb-video-gallery">'.do_shortcode('[column size=one_half position=first ]<a class="cb-lightbox" title="'.$caption1.'" href="'.$finalurl1.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'.$image1.'" alt="video gallery"></a>[/column][column size=one_half position=last ]<a class="cb-lightbox" title="'.$caption2.'" href="'.$finalurl2.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'.$image2.'" alt="video gallery"/></a>[/column]').'</div>'; 
		} elseif ( $size == 3 ) {
    		if ( $video3 == 'youtube' ) { $finalurl3 = 'http://www.youtube.com/embed/'.$url3; }
            if ( $video3 == 'vimeo' ) { $finalurl3 = 'http://player.vimeo.com/video/'.$url3; }
    					
    		 return '<div class="cb-video-gallery">'. do_shortcode('[column size=one_third position=first ]<a class="cb-lightbox" title="'.$caption1.'" href="'.$finalurl1.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'. $image1 .'" alt="video gallery"></a>[/column][column size=one_third position=middle]<a class="cb-lightbox" title="'. $caption2 .'" href="'. $finalurl2 .'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'.$image2.'" alt="video gallery"></a>[/column][column size=one_third position=last ]<a class="cb-lightbox" title="'.$caption3.'" href="'.$finalurl3.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'. $image3 .'" alt="video gallery"></a>[/column]') .'</div>'; 
		} elseif ( $size == 4 ) {
			
    		if ($video3 == 'youtube') { $finalurl3 = 'http://www.youtube.com/embed/'.$url3; }
    		if ($video3 == 'vimeo')	{ $finalurl3 = 'http://player.vimeo.com/video/'.$url3; }
    		if ($video4 == 'youtube') {	$finalurl4 = 'http://www.youtube.com/embed/'.$url4; }	
    		if ($video4 == 'vimeo')	{ $finalurl4 = 'http://player.vimeo.com/video/'.$url4; }
    		
    		return '<div class="cb-video-gallery">'.do_shortcode('[column size=one_quarter position=first ]<a class="cb-lightbox" title="'.$caption1.'" href="'.$finalurl1.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'.$image1.'" alt="video gallery"></a>[/column][column size=one_quarter position=middle ]<a class="cb-lightbox" title="'.$caption2.'" href="'.$finalurl2.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'.$image2.'" alt=video gallery"></a>[/column][column size=one_quarter position=middle ]<a class="cb-lightbox" title="'.$caption3.'" href="'.$finalurl3.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'.$image3.'" /></a>[/column][column size=one_quarter position=last ]<a class="cb-lightbox" title="'.$caption4.'" href="'.$finalurl4.'" rel="video_gallery"><div class="cb-media-icon"><i class="icon-play"></i></div><img class="alignnone size-medium" src="'.$image4.'" alt="video gallery"></a>[/column]').'</div>'; 
		} 
	}
	add_shortcode('videogallery', 'videogallery_shortcode');
	
	// Columns Shortcode
	function column_shortcode( $atts, $content = NULL )
	{
		extract( shortcode_atts( array(
		  'size' => 'normal',
		  'position' => 'first',
		  ), $atts ) );
		  
		$clearfix = NULL;
		if ($position == 'middle') { $position = '';}
		if ($position == 'first') { $position = ' first';}
		if ($position == 'last') { $position = ' last'; $clearfix = '<div class="clearfix"></div>';}
		if ($size == 'one_half') { $size = 'sixcol';}
		if ($size == 'one_third') { $size = 'fourcol';}
		if ($size == 'two_third') { $size = 'eightcol';}
		if ($size == 'one_quarter') { $size = 'threecol';}
		if ($size == 'three_quarter') { $size = 'ninecol';}

        return '<div class="' . $size . $position.'">'. do_shortcode( $content ) .'</div>'. $clearfix;

	}
	add_shortcode('column', 'column_shortcode');
	
	// Dropcap Shortcode
	function dropcap_shortcode( $atts, $content = NULL ) {
		extract( shortcode_atts( array(
		  'size' => 'small',
		  'text' => '',
		  ), $atts ) );
		  
		return '<span class="cb-dropcap-'.$size.'">' .  $content  . '</span>';
	}
	add_shortcode('dropcap', 'dropcap_shortcode');
	
	// Video Embed Shortcode
	function embedvideo_shortcode( $atts, $content = NULL ) {
		extract( shortcode_atts( array(
		  'id' => '',
		  'website' => '',
		  ), $atts ) );
		 if ($website == 'youtube'){ 
			return '<div class="cb-video-frame"><iframe width="600" height="330" src="http://www.youtube.com/embed/'.$id.'" frameborder="0" allowfullscreen></iframe></div>';
		 } else{
		 	return '<div class="cb-video-frame"><iframe src="http://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
		 }
	}
	add_shortcode('embedvideo', 'embedvideo_shortcode');
	
	// Alert Shortcode
	function alert_shortcode( $atts, $content = NULL ) {
		extract( shortcode_atts( array(
		  'type' => '',
		  ), $atts ) );
		
		return '<div class="cb-alert cb-' . $type . '">' . $content . '</div>';
	}
	add_shortcode('alert', 'alert_shortcode');
	
	// Buttons Shortcode
    function cb_shortcode_buttons( $atts, $content = NULL ) {
        
        extract( shortcode_atts( array(
          'color' => 'white',
          'size' => 'normal',
          'text' => '',
          'rel' => 'follow',
          'alignment' => 'none',
          'openin' => 'samewindow',
          'url' => '',
          ), $atts ) );
                
        if ( $openin == 'samewindow' ) { $cb_target = 'target="_self"'; } else { $cb_target = 'target="_blank"'; }
        
        if ($url != NULL) {
                return '<span class="cb-button cb-'. $color . ' cb-' . $size .' cb-'. $alignment .'"><a href="' . $url . '" '. $cb_target .' rel="'. $rel .'">' . $content . '</a></span>';
        } else {
                return '<span class="cb-button cb-'. $color . ' cb-' . $size .' cb-'. $alignment .' cb-no-url">' . $content . '</span>';
       }
    }
    
    add_shortcode('button', 'cb_shortcode_buttons');
    
	// Highlight Shortcode
	function highlight_shortcode( $atts, $content = NULL ) {
		
		  extract( shortcode_atts( array(
		  'color' => '',
		  'text' => '',
		  ), $atts ) );
		  
		if ($color){
			return '<span class="cb-highlight" style="background-color:'.$color.'">' .  $content . '</span>';
		}else{
			return '<span class="cb-highlight user-bg">' . $content  .'</span>';
		}
	}
	add_shortcode('highlight', 'highlight_shortcode');
	
	// Divider Shortcode
	function divider_shortcode( $atts, $content = NULL ) {
		
		  extract( shortcode_atts( array(
		  'text' => '',
		  ), $atts ) );
		  
			return '<div class="cb-divider clearfix"><span class="cb-title">' .  $content . '</span></div>';
	}
	add_shortcode('divider', 'divider_shortcode');	
	
	// Toggler Shortcode
	function cb_shortcode_toggler( $atts, $content = NULL ) {
	 extract( shortcode_atts( array(
		  'title' => 'Secret Text',
		  'text' => '',
		  ), $atts ) );
		return '<div class="cb-toggler"><i class="icon-plus"></i><i class="icon-minus"></i><a href="#" class="cb-toggle">'.$title.'</a><div class="cb-toggle-content">'. do_shortcode( $content ).'</div></div>';
	 }
	 add_shortcode('toggler', 'cb_shortcode_toggler');
	
	// Tabs Shortcode
	function cb_tabs( $atts, $content ){
	    
        extract( shortcode_atts( array(
          'title1' => '',
          'title2' => '',
          'title3' => '',
          'title4' => '',
          'text1' => '',
          'text2' => '',
          'text3' => '',
          'text4' => '',
          ), $atts ) );
          
          $cb_arr = array();
          $i = 1;
          $cb_output = NULL;
          
          if ($title1 != NULL) {
                   $cb_1 = array($title1, $text1);
                    array_push($cb_arr, $cb_1 );
          }
          if ($title2 != NULL) {
                   $cb_2 = array($title2, $text2);
                    array_push($cb_arr, $cb_2 );         
          }
          if ($title3 != NULL) {
                   $cb_3 = array($title3, $text3);
                    array_push($cb_arr, $cb_3 );         
          }
          if ($title4 != NULL) {
                   $cb_4 = array($title4, $text4);
                    array_push($cb_arr, $cb_4 );         
          }
          
         $cb_output .= '<div class="cb-tabs"><ul>';
         foreach ($cb_arr as $tab) {
              $cb_output .= '<li><a href="#">'. $tab[0] .'</a></li>';
         } 
 
         $cb_output .= '</ul><div class="cb-panes">';
         
          foreach ($cb_arr as $tab) {
               $cb_output .= '<div class="cb-tab-content">'. $tab[1] .'</div>';
         }
         
         $cb_output .= '</div></div>';
          
		
		return $cb_output;
	}
	add_shortcode( 'tabs', 'cb_tabs' );
	
	// registers the buttons for use
	function register_shortcodes($buttons) {
		array_push($buttons, "button",  "toggler", "dropcap", "alert", "highlight", "tabs", "column", "embedvideo", "divider", "videogallery");
		return $buttons;
	}
	
	// filters the tinyMCE buttons and adds our custom buttons
	function shortcode_filter() {
		// Don't bother doing this stuff if the current user lacks permissions
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
		 
		// Add only in Rich Editor mode
		if ( get_user_option('rich_editing') == 'true') {
			// filter the tinyMCE buttons and add our own
			add_filter("mce_external_plugins", "add_shortcodes");
			add_filter('mce_buttons_3', 'register_shortcodes');
		}
	}
	// init process for button control
	add_action('init', 'shortcode_filter');
	
	// add the button to the tinyMCE bar
	function add_shortcodes($plugin_array) {
	
		$plugin_array['alert'] =  plugins_url( '/alert-shortcode.js', __FILE__ ) ;
		$plugin_array['button'] =  plugins_url( '/buttons-shortcode.js', __FILE__ ) ;
		$plugin_array['column'] = plugins_url( '/column-shortcode.js', __FILE__ );
		$plugin_array['divider'] = plugins_url( '/divider-shortcode.js', __FILE__ );
		$plugin_array['dropcap'] = plugins_url( '/dropcap-shortcode.js', __FILE__ );
		$plugin_array['embedvideo'] = plugins_url( '/video-shortcode.js', __FILE__ );
		$plugin_array['highlight'] = plugins_url( '/highlight-shortcode.js', __FILE__ );
		$plugin_array['tabs'] = plugins_url( '/tab-shortcode.js', __FILE__ );
		$plugin_array['toggler'] =  plugins_url( '/toggler-shortcode.js', __FILE__ );
		$plugin_array['videogallery'] = plugins_url( '/videogallery-shortcode.js', __FILE__ );
		
		return $plugin_array;
	}
?>