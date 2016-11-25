<?php
/**
 *  The template for displaying Header.
 *
 *  @package lawyeria-lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="<?php echo get_template_directory_uri();?>/content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta charset="UTF-8">
		<title><?php wp_title('|', true, 'right'); ?></title>

		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
		<![endif]-->

        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/tipped.css" type="text/css">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wide-menu">
                <div class="wrapper cf">
                    <div id="logoPlacement">
                        <a href="/podstawowa" target="_self"><img style="width: 30%; height: 30%;" src="<?php echo get_template_directory_uri().'/images/logo.png'; ?>" /></a>
                    </div>

                    <nav style="margin-left: 100px">
                        <div class="openresponsivemenu">
                            <?php _e('Otwórz menu','lawyeria-lite'); ?>
                        </div><!--/div .openresponsivemenu-->
                        <div class="container-menu cf">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header-menu',
                                )
                            );
                            ?>
                        </div><!--/div .container-menu .cf-->
                    </nav><!--/nav .navigation-->
                    <div class="header-search">
                        <?php get_search_form(); ?>

                    </div><!--/.header-contact-->
                </div>
            </div>

			<div class="wrapper">
			<?php 
					$has_header = get_header_image(); 
					if( $has_header ) :
					?>
						<img src="<?php header_image(); ?>" alt="" class="lawyeria-lite-header-image" />
				<?php endif; ?>

                <div><a href="/">Szkoła Podstawowa</a>
                    <?php



                    ?>


                </div>
            </div>
