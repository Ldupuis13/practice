<?php
/*
Template Name: Book Page with Portfolio
*/
?>

<?php get_header(); ?>
<div class="container-fluid">
<?php the_post_thumbnail(); ?>
</div>
<div class="container">
<div id="main">
<div class="introtext">
    <?php echo get_theme_mod( 'intro_text' ); ?>
</div><!-- End Main -->

<div id="portfolio">

<div class="heading">
	 <h2><?php _e('Books','themefurnace') ?></h2>
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
<div id="inside">
<div id="content">

<?php the_post(); ?>

<?php wp_link_pages( $args ); ?>


<?php //the_content(); ?>
<!--Style to override the !important styling inserted by the gallery plug-in-->
<style type="text/css">
.portelement_2 div.left-block_2 .main-image-block_2 img {
    margin: 0px !important;
    padding: 0px !important;
    width: 140px !important;
    height: auto;
}
</style>
<div class="postmeta">
<ul>
<li class="tagcloud posttag"><?php the_tags('','  ',''); ?></li>
</ul>
</div><!-- End Postmeta -->

<?php //comments_template('', false); ?>

</div><!-- End Content -->

</div><!-- End Inside -->
</div><!-- End Container -->
<?php get_footer('inside'); ?>