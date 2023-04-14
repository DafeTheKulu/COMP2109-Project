<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<!-- Custom stylesheet -->
	<link rel="stylesheet" href="<?php echo esc_url( home_url('wp-content/themes/cmsproject/assets/css/custom-styles.css')); ?>">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Custom header code -->
<header>
			<div>
				<!-- Use the custom header image (old CTA from a design project) -->
				<a href="<?php echo esc_url( home_url() ); ?>">
					<img id="siteLogo" src="<?php echo esc_url( home_url( 'wp-content/uploads/2023/04/CallToAction.png' ) );?>" alt="header logo">
				</a>
			</div>
			<!-- Global Navigation -->
			<nav>
				<!-- Use the custom menu for this assignment while creating header nav -->
				<?php 
					wp_nav_menu( array(
						'menu' 				=> 'Nav',
						'theme_location' 	=> '',
						'depth' 			=> 2,
						'fallback_cb'		=> false
					));
				?>
			</nav>
		</header>
