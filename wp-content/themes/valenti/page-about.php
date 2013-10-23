<?php /* Template Name: Meet The Team */

	  get_header(); 
      $cb_global_color = ot_get_option('cb_base_color', '#eb9812'); 
      $cb_theme_style = ot_get_option('cb_theme_style', 'cb_boxed');
?>
    <div class="cb-cat-header<?php if ($cb_theme_style == 'cb_boxed') echo ' wrap'; ?>" style="border-bottom-color:<?php echo $cb_global_color;?>;">
            <h1 id="cb-cat-title"><?php echo the_title(); ?></h1>
    </div>
        
	<div id="cb-content" class="wrap clearfix">
  
	    <div id="main" class="entry-content cb-about-page clearfix" role="main">
      
<?php 				
		while (have_posts()) : the_post(); the_content(); endwhile; 
		echo cb_author_list(); 
?>
	    </div> <!-- end #main -->

	    <?php get_sidebar(); ?>
	    
	</div> <!-- end #cb-inner-content -->
            
<?php get_footer(); ?>
