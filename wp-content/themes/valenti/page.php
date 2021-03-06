<?php 
        get_header(); 
        $cb_breadcrumbs = ot_get_option('cb_breadcrumbs', 'on');
        $cb_global_color = ot_get_option('cb_base_color', '#eb9812'); 
        $cb_theme_style = ot_get_option('cb_theme_style', 'cb_boxed');
?>
                
                
                <div class="cb-cat-header<?php if ($cb_theme_style == 'cb_boxed') echo ' wrap'; ?>" style="border-bottom-color:<?php echo $cb_global_color;?>;">
                    
                        <h1 id="cb-cat-title" ><?php echo the_title(); ?></h1>
                        
                </div>
                
                <?php  if ($cb_breadcrumbs != 'off') {echo cb_breadcrumbs();} ?>
                                
				<div id="cb-content" class="wrap clearfix">
				    
						<div id="main" class="entry-content clearfix" role="main">

							<?php 
							         if (have_posts()) : while (have_posts()) : the_post(); 
                                     echo cb_featured_image( $post, 'page' ); 
							    ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
						     	</section> <!-- end article section -->

								<footer class="article-footer">
								    
                                     <?php the_tags('<p class="cb-tags"><span class="tags-title">' . __('Tags:', 'cubell') . '</span> ', '', '</p>'); ?>

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

							<?php endwhile; endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

				</div> <!-- end #cb-content -->

<?php get_footer(); ?>