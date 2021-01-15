<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name">
				<?php if ( is_front_page() && is_home() ) : ?>
                    <h1>
                        <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
				<?php else : ?>
                    <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
                    </a>
				<?php endif; ?>
                <p class="description"><?php bloginfo( 'description' ); ?></p>
            </div>
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
                <div>
					<?php wp_nav_menu( array(
						'theme_location'  => 'primary',
						'container'       => 'nav',
						'container_class' => 'clearfix',
						'container_id'    => 'nav-menu',
					) ); ?>
                </div>
			<?php endif; ?>
        </div>
    </div>
</header>

<div id="body">
    <div class="container">
        <div class="col-group">
