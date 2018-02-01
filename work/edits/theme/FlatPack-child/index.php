<?php get_header(); ?>
<div class="container-fluid">
	<?php
$mg_site_url = get_site_url();
echo "<img src='$mg_site_url/wp-content/uploads/2017/12/axiom.jpg'>";

?>
</div><!-- div heading -->
<div class="container">

<div id="primary" class="content-area" style="width:65%; float:left;">
		<main id="main" class="site-main" role="main" style="padding: 0 1.5rem; 0 1.5rem;">
<?php while ( have_posts() ) : the_post() ?>
<div <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">

<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumb', array( 'class' => 'featuredimage' ) ); ?></a></p>

<div class="blogmetainside" style="padding-left: 1rem;">
<ul>
<li class="date"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago'; ?></li>
<li class="category"><?php the_category( ', ' ) ?></li>
<li class="commentcount"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></li>
</ul>
</div>

<h1 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</div>

<p><?php echo wp_new_excerpt( '' ); ?></p>
<p><a href="<?php the_permalink(); ?>" class="bloghome">Read More &raquo;</a></p>
<?php endwhile; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar( 'Blog' ); ?>
</div><!-- End Container -->

<?php get_footer(); ?>
