<?php get_header(); ?>
<div class="container">



<div id="portfolio">
<div class="heading">
	 <h2><?php _e('Staff','themefurnace') ?></h2>
</div><!-- div heading -->

<?php while ( have_posts() ) : the_post() ?>

<div class="portfolioitem all <?php echo implode(' ', $classnames);?>" id="post-<?php the_ID(); ?>" style="clear:none !important;">

<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portfolio-thumb', array('class' => 'portfolioimage')); ?></a></p>
<h2 class="porttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="portcat"><?php echo get_the_term_list( $post->ID, 'department', 'Department: ', ', ', '' ); ?></p>

</div>
<?php endwhile; ?>

</div><!-- End Portfolio -->


<?php themefurnace_pagination(); ?>
</div><!-- End Container -->

<?php get_footer(); ?>