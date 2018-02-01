<div id="sidebar">
<?php 
	$tmp_cat = wp_get_object_terms( $post->ID, 'portfolio_category' ) ; 
	$terms = array();
	if(!empty($tmp_cat)):
		foreach ($tmp_cat as $t) {
			$terms[] = '<a href="'.home_url().'/portfolio_category/'.$t->slug.'">'.$t->name.'</a>';
		}
	endif;
	
	$tmp_tag = wp_get_object_terms( $post->ID, 'portfolio_tag' ) ; 
	$tags = array();
	if(!empty($tmp_tag)):
		foreach ($tmp_tag as $t) {
			$tags[] = '<a href="'.home_url().'/portfolio_tag/'.$t->slug.'">'.$t->name.'</a>';
		}
	endif;
?>
<div class="sidebarwidget">
<h3 class="sidebartitle">Details</h3>
<div class="postmeta">
<ul>
<li class="author"><?php _e('Posted By','themefurnace') ?> <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
<li class="date"><?php _e('Posted on:','themefurnace') ?> <?php the_time('F j, Y') ?></li>
<li class="category"><?php _e('Posted in:','themefurnace') ?> <?php echo implode(', ', $terms);  ?></li>
<li class="tags"><?php echo 'Tags: '.implode(', ', $tags); ?></li>
</ul>
</div>
</div>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Portfolio') ) ?>

</div><!--End Sidebar-->
</div><!-- End Inside -->
</div><!-- End Container -->