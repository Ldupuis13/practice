<?php get_header(); ?>



<div class="container">


<div id="inside">
<div id="content">

<h1 class="posttitle"><?php the_title(); ?></h1>

<?php the_post(); ?>

<?php wp_link_pages( $args ); ?>


<p><?php the_post_thumbnail('staff-thumb', array('class' => 'staffimage')); ?></p>
<p><?php echo get_the_term_list( $post->ID, 'department', 'Department: ', ', ', '' ); ?></p>
<?php the_content(); ?>

<div class="postmeta">
<ul>
<li class="tagcloud posttag"><?php the_tags('','  ',''); ?></li>
</ul>
</div><!-- End Postmeta -->

</div><!-- End Content -->
<?php get_sidebar('Staff'); ?>
</div><!-- End Container -->
<?php get_footer(); ?>
