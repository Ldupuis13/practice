<?php
/**
 * Template Name: Contact Us Template
 *
 */

get_header(); ?>
<div class="container-fluid">
<section id="canvas1" class="map">
	<iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11762.640817234558!2d-71.04347569999999!3d42.5200285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e30d220360bf5b%3A0x2bf6a722d105474c!2s201+Edgewater+Dr+%23255%2C+Wakefield%2C+MA+01880!5e0!3m2!1sen!2sus!4v1429570535170" width="100%" height="280" frameborder="0" style="border:0"></iframe>	
</section>

<div id="inside">
<div id="content" class="contact">

<?php the_post(); ?>

<?php wp_link_pages( $args ); ?>


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

</div><!-- End Inside -->
</div><!-- End Container -->
<?php get_footer('inside'); ?>
?>