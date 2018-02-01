<?php
/*
Template Name: Inside Pages Home Button
*/
?>

<?php get_header(); ?>
<div class="container-fluid">
<?php the_post_thumbnail(); ?>
</div>
<div = class="container">
<div id="inside">
<div id="content">
 	  <div class="back_page"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="font-size:45px; color: #a9a9a9; padding-right: 10px"></i>
 		<?php $mg_site_url = get_site_url(); echo"<p><a href='$mg_site_url'>Take Me Home</a></p>"; ?>
  <hr>
  </div>

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