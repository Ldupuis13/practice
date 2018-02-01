<?php get_header(); ?>

<div class="container">

<ul id="portfolio-filter">
		<li class="all"><?php _e('Filter Portfolio: ','themefurnace') ?></li>
		<li class="cat"><a href="#all" rel="all">All</a>
		<?php 
		$terms = get_terms('portfolio_category');
		foreach ($terms as $term) {
		    echo '<li class="cat"><a rel="'.$term->slug.'" href="#'.$term->slug.'">'.$term->name.'</a></li>';
		}
		?>
	</ul>


<div id="portfolio">
<div class="heading">
	 <h2><?php _e('Portfolio','themefurnace') ?></h2>
</div><!-- div heading -->

<?php while ( have_posts() ) : the_post() ?>
<?php 	
    $tmp_cat = wp_get_object_terms( $post->ID, 'portfolio_category' ) ; 	
    $terms = array();
    $classnames = array();
    if(!empty($tmp_cat)):		
        foreach ($tmp_cat as $t) {
            $classnames[] = $t->slug;
            $terms[] = '<a href="'.home_url().'/portfolio_category/'.$t->slug.'">'.$t->name.'</a>';		
        }
    endif;
?>
<div class="portfolioitem all <?php echo implode(' ', $classnames);?>" id="post-<?php the_ID(); ?>" style="clear:none !important;">

<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portfolio-thumb', array('class' => 'portfolioimage')); ?></a></p>
<div class="portfoliooverlay"><a href="<?php the_permalink(); ?>"><span>+</span></a></div>
<h2 class="porttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="portcat"><?php 	$tmp_cat = wp_get_object_terms( $post->ID, 'portfolio_category' ) ; 	$terms = array();	if(!empty($tmp_cat)):		foreach ($tmp_cat as $t) {			$terms[] = '<a href="'.home_url().'/portfolio_category/'.$t->slug.'">'.$t->name.'</a>';		}	endif;?>
  
      <?php echo implode(', ', $terms);  ?></p>

</div><!-- End Portfolio Item -->

<?php endwhile; ?>
<?php wp_reset_query(); ?> 
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/filterable.js' ?>"></script>

<script type="text/javascript">
jQuery(document).ready(function() {	
    jQuery("#portfolio").filterable();
});
</script>
</div><!-- End Portfolio -->


<?php themefurnace_pagination(); ?>
</div><!-- End Container -->

<?php get_footer(); ?>