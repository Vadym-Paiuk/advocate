<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta http-equiv="Content-Type"
	      content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible"
	      content="IE=edge">
	<meta name="viewport"
	      content="width=device-width, initial-scale=1.0">
	
	<link rel="alternate"
	      type="application/rdf+xml"
	      title="RDF mapping"
	      href="<?php bloginfo( 'rdf_url' ); ?>"/>
	<link rel="alternate"
	      type="application/rss+xml"
	      title="RSS"
	      href="<?php bloginfo( 'rss_url' ); ?>"/>
	<link rel="alternate"
	      type="application/rss+xml"
	      title="Comments RSS"
	      href="<?php bloginfo( 'comments_rss2_url' ); ?>"/>
	<link rel="pingback"
	      href="<?php bloginfo( 'pingback_url' ); ?>"/>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php $header = get_field( 'header', 'options' ); ?>
<header class="header">
	<div class="start">
		<?php the_custom_logo(); ?>
	</div>
	<div class="middle">
		<?php if ( has_nav_menu( 'header-menu' ) ): ?>
			<nav class="header-nav">
				<?php
				wp_nav_menu( [
						'theme_location' => 'header-menu',
						'container'      => false,
					]
				);
				?>
			</nav>
		<?php endif; ?>
	</div>
	<div class="end">
		<?php get_search_form(); ?>
		<div class="header-hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<?php if ( ! empty( $header['button'] ) ): ?>
			<a class="btn btn-white"
			   href="<?php echo $header['button']['url']; ?>"
			   target="<?php echo $header['button']['target']; ?>">
				<?php echo $header['button']['title']; ?>
			</a>
		<?php endif; ?>
		<?php if ( function_exists( 'pll_current_language' ) ): ?>
			<div class="languages">
				<div class="current-value toggle-dropdown">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/src/images/icons/arrow-white.svg"
					     class="arrow"
					     alt="arrow">
					<span>
						<?php echo pll_current_language(); ?>
					</span>
				</div>
				<div class="dropdown">
					<ul class="language-switcher ">
						<?php
						$args = [
							'display_names_as' => 'slug'
						];
						pll_the_languages( $args );
						?>
					</ul>
				</div>
			</div>
		<?php endif; ?>
	</div>
</header>
<div class="header-mobile-menu">
	<?php
	$menu_name = 'header-menu';
	if ( has_nav_menu( 'header-menu' ) ) {
		wp_nav_menu( [
			'theme_location'  => $menu_name,
			'menu'            => '',
			'menu_class'      => 'menu-header-links mobile',
			'menu_id'         => '',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'echo'            => true,
			'depth'           => 0,
			'walker'          => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'item_spacing'    => 'preserve',
		] );
	}
	?>
	
	<?php if ( ! empty( $header['button'] ) ): ?>
		<a class="btn btn-white"
		   href="<?php echo $header['button']['url']; ?>"
		   target="<?php echo $header['button']['target']; ?>">
			<?php echo $header['button']['title']; ?>
		</a>
	<?php endif; ?>
	
	<?php if ( function_exists( 'pll_current_language' ) ): ?>
		<div class="languages">
			<div class="current-value toggle-dropdown">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/src/images/icons/arrow-white.svg"
				     class="arrow"
				     alt="arrow">
				<span>
						<?php echo pll_current_language(); ?>
					</span>
			</div>
			<div class="dropdown">
				<ul class="language-switcher ">
					<?php
					$args = [
						'display_names_as' => 'slug'
					];
					pll_the_languages( $args );
					?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
</div>

<main>