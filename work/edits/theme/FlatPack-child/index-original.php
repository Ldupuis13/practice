<?php get_header(); ?>
<div class="container-fluid">
	<?php
	$mg_site_url = get_site_url();
	echo "<img src='$mg_site_url/wp-content/uploads/2015/03/Axiom-On-Value.jpg'>";
	
  ?>
</div><!-- div heading -->		
<div class="container">
	<div id="inside">
		<div id="content">	
	 <h2 style="text-align: center;"><?php _e('Axiom On Value','themefurnace') ?></h2>
			<?php query_posts('posts_per_page='.get_theme_mod('fp_blog_items', 4)); ?>
			<?php while ( have_posts() ) : the_post() ?>
			<div <?php post_class( 'blogitem'); ?> id="post-<?php the_ID(); ?>">
			<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumb', array('class' => 'blogimage')); ?></a></p>
			<div class="blogmeta">
			<ul>
			<li class="date"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></li>
			<li class="commentcount"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></li>
			</ul>
			</div>
			<h3 class="blogtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php echo wp_new_excerpt('', 15); ?>
			<br />
			<a href="<?php the_permalink(); ?>" class="bloghome">Read More &raquo;</a>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?> 
		</div>
	</div>
</div><!-- End Blog -->



<?php get_footer(); ?>