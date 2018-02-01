<?php get_header(); ?>

<div class="container">

<div id="inside">
<div id="content">

<?php the_post_thumbnail('portfolio-full', array('class' => 'featuredportfolioimage')); ?>
<?php the_post(); ?>
<h1 class="posttitle"><?php the_title(); ?></h1>
<?php wp_link_pages( $args ); ?>


<?php the_content(); ?>

<div class="postmeta">
<ul>
<li class="tagcloud posttag"><?php the_tags('','  ',''); ?></li>
</ul>
</div><!-- End Postmeta -->



</div><!-- End Content -->

<?php get_sidebar('Portfolio'); ?>
</div><!-- End Container -->
<?php get_footer(); ?>