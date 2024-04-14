<?php
$footer = get_field( 'footer', 'options' );
?>
</main>

<footer class="footer">
	<div class="container footer-top">
		<div class="footer-top-info">
			<div class="footer-top-logo">
				<?php the_custom_logo(); ?>
				<?php if ( ! empty( $footer['description'] ) ): ?>
					<p class="footer-top-logo-description">
						<?php echo $footer['description']; ?>
					</p>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $footer['subscribe_form_shortcode'] ) ): ?>
				<div class="footer-top-subscribe">
					<?php echo do_shortcode( $footer['subscribe_form_shortcode'] ); ?>
				</div>
			<?php endif; ?>
			<?php if ( ! empty( $footer['socials'] ) ): ?>
				<div class="footer-top-socials">
					<?php if ( ! empty( $footer['socials_title'] ) ): ?>
						<h4 class="footer-top-socials-title">
							<?php echo $footer['socials_title']; ?>
						</h4>
					<?php endif; ?>
					<div class="footer-top-socials-list">
						<?php foreach ( $footer['socials'] as $social ): ?>
							<a href="<?php echo $social['url']; ?>"
							   target="_blank">
								<?php echo wp_get_attachment_image( $social['image'], 'full' ); ?>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="footer-top-menu-list">
			<div class="footer-top-menu">
				<?php
				$menu_name = 'footer-menu-1';
				
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-top-menu">
				<?php
				$menu_name = 'footer-menu-2';
				
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-top-menu">
				<?php
				$menu_name = 'footer-menu-3';
				
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-top-menu">
				<?php
				$menu_name = 'footer-menu-4';
				
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-start">
				<?php
				$menu_name = 'footer-develop-menu';
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-bottom-end">
				<?php
				$menu_name = 'footer-privacy-menu';
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>