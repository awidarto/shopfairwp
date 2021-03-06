<?php 
        get_header();
        $cb_comments_onoff = ot_get_option('cb_comments_onoff', 'cb_comments_on'); 
        $cb_author_box_onoff = ot_get_option('cb_author_box_onoff', 'on'); 
        $cb_related_onoff = ot_get_option('cb_related_onoff', 'on'); 
        $cb_previous_next_onoff = ot_get_option('cb_previous_next_onoff', 'on'); 
        $cb_social_sharing = ot_get_option('cb_social_sharing', 'on'); 
        $cb_breadcrumbs = ot_get_option('cb_breadcrumbs', 'on');
        $cb_post_format = get_post_format();
        $cb_post_id = $post->ID;
        $cb_full_width_post = get_post_meta( $cb_post_id, 'cb_full_width_post', true );
        $cb_featured_image_style = get_post_meta( $cb_post_id, 'cb_featured_image_style', true );
        $cb_review_checkbox = get_post_meta($cb_post_id, 'cb_review_checkbox', true );
        if ( $cb_featured_image_style == NULL ) { $cb_featured_image_style = 'standard'; }

        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            
            if ( ( $cb_featured_image_style == 'full-width' ) && ( $cb_breadcrumbs != 'off' ) ) { echo cb_breadcrumbs(); } 
            if ( ( $cb_featured_image_style != 'standard' ) && ( $cb_featured_image_style != 'off' ) && ( $cb_post_format != 'gallery' ) ) {
                 echo cb_featured_image( $post, $cb_featured_image_style ) ; 
            }
            
            if ( $cb_post_format == 'gallery' ) {
                echo cb_gallery_post( $cb_post_id );
            }               
?>
            <div id="cb-content" class="wrap clearfix">
				    
				   <?php if ( ( $cb_featured_image_style == 'standard' ) && ( $cb_breadcrumbs != 'off' ) ) { echo cb_breadcrumbs(); } ?>
				    				    
					<div id="main" class="<?php if ( $cb_full_width_post == 'nosidebar' ) { echo 'cb-full-width '; } ?>clearfix" role="main">
					    
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" <?php if ( $cb_review_checkbox != '1' ) { echo 'itemscope itemtype="http://schema.org/BlogPosting"'; } ?>>
                                  
                                 <?php 
                                            if ( ( $cb_featured_image_style == 'off' ) &&  ( $cb_breadcrumbs != 'off' ) ) { echo cb_breadcrumbs( 'padding-off' ); } 
                                            if ( ( $cb_featured_image_style == 'standard' ) && ( $cb_post_format != 'gallery' ) ) { echo cb_featured_image( $post, 'standard' ); }
                                            if ( ( $cb_featured_image_style == 'off' ) || ( $cb_post_format == 'gallery' ) ) { echo cb_featured_image( $post, 'off' ); }
                                 ?>

								<section class="entry-content clearfix" <?php if ( $cb_review_checkbox == '1' ) { echo 'itemprop="reviewBody"'; } else { echo 'itemprop="articleBody"'; } ?>>
								    
									<?php  the_content(); ?>
									
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php  
                                           wp_link_pages('before=<div class="cb-wp-link-pages clearfix"><p><span class="wp-link-pages-title">'. __('Pages', 'cubell').':</span>&after=</p></div>&next_or_number=number&pagelink=<span class="wp-link-pages-number">%</span>');  
                                           the_tags('<p class="cb-tags"> ', '', '</p>');
                                           if ( $cb_social_sharing != 'off' ) { echo cb_social_sharing($post); }
                                           if ( ( $cb_previous_next_onoff != 'cb_previous_next_off' ) && ( $post->post_type != 'attachment' ) ) { cb_previous_next_links(); }
                                           if ( $cb_author_box_onoff != 'cb_author_box_off' ) { echo cb_author_box($post); }
                                           if ( $cb_related_onoff != 'cb_related_off' ) { cb_related_posts(); } 
                                     ?>

								</footer> <!-- end article footer -->

								<?php if ( $cb_comments_onoff == 'cb_comments_on' ) { comments_template(); } ?>

							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php endif; ?>

					</div> <!-- end #main -->

					<?php if ( $cb_full_width_post != 'nosidebar' ) { get_sidebar(); } ?>

			</div> <!-- end #cb-content -->

<?php get_footer(); ?>