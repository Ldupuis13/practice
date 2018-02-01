<?php get_header(); ?>
<div class="container">

<div id="inside">
<div id="content">


<h1 class="inttitle"><?php _e('Tag Archives:','themefurnace') ?> <?php single_tag_title() ?></h1>


<?php while ( have_posts() ) : the_post() ?>
<div <?php post_class( ''); ?> id="post-<?php the_ID(); ?>">

<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb', array('class' => 'featuredimage')); ?></a></p>

<div class="blogmetainside">
<ul>
<li class="date"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></li>
<li class="category"><?php the_category(', ') ?></li>
<li class="commentcount"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></li>
</ul>
</div>
<?php the_post(); ?>
<h1 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</div>

<p><?php echo wp_new_excerpt(''); ?></p>
<p><a href="<?php the_permalink(); ?>" class="bloghome">Read More &raquo;</a></p>
<?php endwhile; ?>



<?php themefurnace_pagination(); ?>

</div><!-- End Content -->
<?php get_sidebar('Blog'); ?>
</div><!-- End Container -->

<?php get_footer(); ?>