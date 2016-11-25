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
                <?php if(!is_front_page()){ ?>
                <div id="path_page"><a href="/podstawowa/">Szkoła Podstawowa</a><span style="color: black;"> > </span>
                <?php } ?>


                    <?php
                    global $post;

                    $parentID = get_root_parent_id(get_the_ID());

                    if(get_the_ID() == $parentID) {

                        echo '<a href="' . get_page_link() . '">' . get_the_title() . '</a>';

                    }else{


                        $parentURL = get_page_link($parentID);
                        $parentNAME = get_the_title($parentID);


                        echo '<a href="' . $parentURL . '">' . $parentNAME . '</a><span style="color: black;"> > </span>';


                        if(is_page() && $post->post_parent != $parentID){

                            $parentURL = get_page_link($post->post_parent);
                            $parentNAME = get_the_title($post->post_parent);

                            echo '<a href="' . $parentURL . '">' . $parentNAME . '</a><span style="color: black;"> > </span>';


                        }
                        echo '<a href="' . get_page_link() . '">' . get_the_title() . '</a>';


                    }


                    ?>


                </div>
            </div>
