<div id="comments">
<span class="yours"><a href="#leaveyourcomment">Leave Yours +</a></span><p class="commentstop"><?php comments_number( '' . __('No Comments', 'themefurnace') . '', '' . __('One Comment', 'themefurnace') . '', '' . __('% Comments', 'themefurnace') . '' ); ?>
</p>

<?php if ( post_password_required() ) : ?>
<p><?php _e('This post is password protected. Enter the password to view any comments.','themefurnace') ?></p>
<?php
return;
endif;
?>

<?php if ( have_comments() ) : ?>         


<ol>
<?php wp_list_comments( array( 'callback' => 'themefurnace_comment' ) ); ?>
</ol>

<?php else : if ( ! comments_open() ) : ?>
<p><?php _e( 'Comments are closed.', 'themefurnace' ); ?></p>
<?php endif; // end ! comments_open() ?>
<?php endif; // end have_comments() ?>


<a name="leaveyourcomment"></a>
<?php if ( comments_open() ) : ?>
    

  
<p class="commentstop"><?php _e('Leave a Reply','themefurnace') ?></p>

<div id="respond">

<div class="cancelcomment">
<p><?php cancel_comment_reply_link(); ?><p>
</div>
	
<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be %1$slogged in%2$s to post a comment.', 'themefurnace'), '<a href="'.get_option('siteurl').'/wp-login.php?redirect_to='.urlencode(get_permalink()).'">', '</a>') ?></p>

<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentsform">

<?php if ( is_user_logged_in() ) : ?>
<p class="loggedinauthor"><?php _e('Logged in as','themefurnace') ?> <?php global $current_user; get_currentuserinfo(); echo '' . $current_user->user_login . "\n";?> - <a href="<?php echo wp_logout_url(); ?>" title="Logout"><?php _e('Logout','themefurnace') ?></a></p>
		
<?php else : ?>	
<div class="inputBox">
<input type="text" name="author" id="author" value="<?php _e('Your Name *','themefurnace') ?>" onblur="if (this.value == '')  {this.value = '<?php _e('Your Name *','themefurnace') ?>';}"  onfocus="if (this.value == '<?php _e('Your Name *','themefurnace') ?>') {this.value = '';}"  tabindex="1" class="commentinput"/>
<input type="text" name="email" id="email" value="<?php _e('Your Email *','themefurnace') ?>" onblur="if (this.value == '')  {this.value = '<?php _e('Your Email *','themefurnace') ?>';}"  onfocus="if (this.value == '<?php _e('Your Email *','themefurnace') ?>') {this.value = '';}"  tabindex="2" class="commentinput"/>
<input type="text" name="url" id="url" value="<?php _e('Your Website','themefurnace') ?>" onblur="if (this.value == '')  {this.value = '<?php _e('Your Website','themefurnace') ?>';}"  onfocus="if (this.value == '<?php _e('Your Website','themefurnace') ?>') {this.value = '';}" tabindex="3" class="commentinput"/>
</div>
		
<?php endif; ?>
<textarea name="comment" class="commentbox" id="comment" tabindex="4"></textarea>
<input name="submit" type="submit" id="submit" tabindex="5" class="commentsubmit" value="<?php _e('Submit', 'themefurnace') ?>" />
<p class="commentinfo">
<?php _e('* Required Fields.','themefurnace') ?> <br />
<?php _e('Your email will not be published.','themefurnace') ?></p>
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
	
</form>

<?php endif; ?>

</div>

	
<?php else: ?>

<ul class="commentsbot">
<li><?php _e('Comments are Closed','themefurnace') ?></li>
</ul>
		
<?php endif; ?>
<?php paginate_comments_links(); ?> 
</div><!--End Comments-->