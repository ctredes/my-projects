<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package screengraphics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="<?php echo is_front_page() ? 'header-home' : '' ?>">
		<div class="container">
			<div class="header-intro">
				
				<div class="menu-header">
					<?php
						wp_nav_menu( array(
							'menu' => 'Main Menu Left',
							'menu_class'        => 'rst-main-menu',
							'container' => false,
						) );
					?>
					<div class="logo">
						<a class="logo_white" href="<?php echo home_url(); ?>"><img src="<?php echo get_field('logo', 'option') ?>" alt="" /></a>
						<a class="logo_black" href="<?php echo home_url(); ?>"><img src="<?php echo get_field('logo_black', 'option') ?>" alt="" /></a>
					</div>
					<?php
						wp_nav_menu( array(
							'menu' => 'Main Menu Right',
							'menu_class'        => 'rst-main-menu',
							'container' => false,
						) );
					?>
					<?php
						$phone = get_field('phone', 'option');
						if($phone){
					?>
					<a class="btn-phone" href="tel:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $phone; ?></a>
					<?php
					}
					?>
					<div class="header-social">
									<?php
										$em =	get_field('email','option');
										if($em['content'] != ''){
									?>
									<a href="<?php echo $em['content']; ?>"  target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
									<?php
										}
									?>
						<?php 
								$socials = get_field('social', 'option');
								if(is_array($socials)){
							?>
									<?php
										if($socials['facebook'] != ''){
									?>
									<a href="<?php echo esc_url($socials['facebook']); ?>"  target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<?php
										}
									?>
									<?php
										if($socials['linkedin'] != ''){
									?>
									<a href="<?php echo esc_url($socials['linkedin']); ?>"  target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									<?php
										}
									?>
									<?php
										if($socials['instagram'] != ''){
									?>
									<a href="<?php echo esc_url($socials['instagram']); ?>"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									<?php
										}
									?>
							<?php
							}
							?>
					</div>
				</div>
				<div class="clear"></div>
				<button class="rst-menu-trigger">
					<span>Toggle navigation</span>
				</button>
			</div>
		</div>
	</header>
