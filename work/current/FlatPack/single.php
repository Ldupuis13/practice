<?php get_header(); ?>

<div class="container">


<div id="inside">
<div id="content">

<p><?php the_post_thumbnail('post-thumb', array('class' => 'featuredimage')); ?></p>
<div class="blogmetainside">
<ul>
<li class="date"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></li>
<li class="category"><?php the_category(', ') ?></li>
<li class="commentcount"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></li>
</ul>
</div>
<?php the_post(); ?>
<h1 class="posttitle"><?php the_title(); ?></h1>



<?php wp_link_pages( $args ); ?>


<?php the_content(); ?>

<h2><?php _e('Tags','themefurnace') ?></h2>
<ul class="tagged">
<li class="tagcloud posttag"><?php the_tags('','  ',''); ?></li>
</ul>


<?php comments_template('', true); ?>

</div><!-- End Content -->

<?php get_sidebar(); ?>

</div><!-- End Container -->




<?php get_footer(); ?>