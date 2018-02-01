<?php
/*
Template Name: Inside Pages
*/
?>

<?php get_header(); ?>
<div class="container-fluid">
<?php the_post_thumbnail(); ?>
</div>
<div = class="container">
<div id="inside">
<div id="content">

<?php the_post(); ?>
<div class="pagelink-top"><?php wp_link_pages('before=About Us: &pagelink= Page %'); ?></div>
<?php the_content(); ?>
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
<div class="pagelink"><?php wp_link_pages('before=About Us: &pagelink= Page %'); ?></div>

</div><!-- End Inside -->
</div><!-- End Container -->
<?php get_footer('inside'); ?>