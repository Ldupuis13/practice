<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
<div class="container">


<div id="inside">
<div id="content">

<?php the_post(); ?>

<?php wp_link_pages( $args ); ?>


<?php the_content(); ?>

<div class="postmeta">
<ul>
<li class="tagcloud posttag"><?php the_tags('','  ',''); ?></li>
</ul>
</div><!-- End Postmeta -->

<?php comments_template('', true); ?>

</div><!-- End Content -->

</div><!-- End Inside -->
</div><!-- End Container -->
<?php get_footer(); ?>