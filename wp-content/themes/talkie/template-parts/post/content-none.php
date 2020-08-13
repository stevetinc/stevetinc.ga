<div class="no-results not-found">
	<div class="page-none">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( esc_html_e( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'talkie' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'talkie' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-none -->
</div><!-- .no-results -->
