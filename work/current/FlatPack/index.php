<?php get_header(); ?>

<?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'homepage'); ?>

<div id="features">
<div class="containerblank">

<?php 
if ( is_active_widget( false, false, 'feature_widget', true ) ): ?>

<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Front Page Feature 1') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Front Page Feature 2') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Front Page Feature 3') ) ?>

<?php
endif; // is_active_widget
?>

</div><!-- End Container -->
</div><!-- End Features -->


<div class="container">
<div id="main">
<div class="introtext">
    <?php echo get_theme_mod( 'intro_text' ); ?>
</div><!-- End Main -->

<div id="portfolio">

<div class="heading">
	 <h2><?php _e('Portfolio','themefurnace') ?></h2>
</div><!-- div heading -->


<?php query_posts('post_type=portfolio&posts_per_page='.get_theme_mod('fp_portfolio_items', 4)); ?>
<?php while ( have_posts() ) : the_post() ?>
<div class="portfolioitem" id="post-<?php the_ID(); ?>">
<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portfolio-thumb', array('class' => 'portfolioimage')); ?></a></p>
<div class="portfoliooverlay"><a href="<?php the_permalink(); ?>"><span>+</span></a></div>
<h2 class="porttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="portcat"><?php 	$tmp_cat = wp_get_object_terms( $post->ID, 'portfolio_category' ) ; 	$terms = array();	if(!empty($tmp_cat)):		foreach ($tmp_cat as $t) {			$terms[] = '<a href="'.home_url().'/portfolio_category/'.$t->slug.'">'.$t->name.'</a>';		}	endif;?>
<?php echo implode(', ', $terms);  ?></p>
</div><!-- End Portfolio Item -->

<?php endwhile; ?>
<?php wp_reset_query(); ?>

</div><!-- End Portfolio -->

<div id="smallfeatures">
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Front Page Small Features 1') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Front Page Small Features 2') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Front Page Small Features 3') ) ?>

</div><!-- End Small Features -->

<div id="blog">
<div class="headingwhite">
	 <h2><?php _e('Latest News','themefurnace') ?></h2>
</div><!-- div heading -->


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

</div><!-- End Blog -->


</div><!-- End Container -->

</div>

<div id="clients">
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Clients') ) ?>
</div><!-- End Clients -->


<?php get_footer(); ?>