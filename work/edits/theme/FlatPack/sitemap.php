<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>

<div class="container">


<div id="inside">
<div id="content">

<h1 class="inttitle"><?php _e('Sitemap','themefurnace') ?></h1>


<?php
$debut = 0; //The first article to be displayed
?>
<?php //while(have_posts()) : the_post(); ?>
<h2>Posts</h2>
<ul>
<?php
$myposts = get_posts('numberposts=-1&offset='.$debut);
foreach($myposts as $post) :
?>
<li><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
<?php //endwhile; ?>

<h2>Pages</h2>

<ul>
<?php
$myposts = get_posts('numberposts=-1&post_type=page&offset='.$debut);
foreach($myposts as $post) :
?>
<li><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>

<h2>Portfolio</h2>

<ul>
<?php
$myposts = get_posts('numberposts=-1&post_type=portfolio&offset='.$debut);
foreach($myposts as $post) :
?>
<li><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>


<h2>Staff</h2>

<ul>
<?php
$myposts = get_posts('numberposts=-1&post_type=staff&offset='.$debut);
foreach($myposts as $post) :
?>
<li><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>




<?php themefurnace_pagination(); ?>
</div><!-- End Content -->

<?php get_sidebar('Page'); ?>
</div><!-- End Container -->
<?php get_footer(); ?>