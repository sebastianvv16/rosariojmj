<?php if ( post_password_required() ) {
	return;
} ?>
	<div id="comments" class="comments-area">
		<?php if ( have_comments() ) : ?>
			<h3 class="comments-title">
				<?php
				printf( _n( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'rosariojmj'),
					number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h3>
			<ul class="comment-list">
				<?php
				wp_list_comments( array(
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
				<?php paginate_comments_links(); ?>
				?>
			</ul>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' , 'rosariojmj' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form(); ?>
	</div>
