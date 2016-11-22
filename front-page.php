		<?php
		/**
		 *  The template for displaying Front Page.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		if ( get_option( 'show_on_front' ) == 'page' ){?>
			<section class="wide-nav" xmlns="http://www.w3.org/1999/html">
				<div class="wrapper">
					<h3>
						<?php the_title(); ?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header><!--/header-->

<?php } else { ?>
			<div class="wide-header">
				<div class="wide-nav">

				</div>
				<div id="subheader" style="background-image: url('<?php
				if ( get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg', get_template_directory_uri() . "/images/full-header.jpg" ) ) {
					echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg',get_template_directory_uri() . "/images/full-header.jpg" );
				}
				?>');">

					<div class="subheader-color cf">
						<div class="wrapper cf">
							<div class="motto"><h3>Ludzie dla innych</h3></div>
							<div class="full-header-content full-header-content-no-sidebar" style="padding-top: 100px">

								<?php
								if ( get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' ) ) {
									echo '<h3>';
									echo get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' );
									echo '</h3>';
								}
								?>

								<?php
								if ( get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' )) {
									echo '<p>';
									echo get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' );
									echo '</p>';
								}
								?>
							</div><!--/div .header-content-->
						</div><!--/div .wrapper-->
					</div><!--/div .full-header-color-->
				</div><!--/div #subheader-->


			</div><!--/div .wide-header-->


			</header><!--/header-->

			<section id="content">
				<div class="wrapper cf">
					<div id="posts" style="width: 962px">
						<div id="postSpace">
						<?php
						$cat = get_cat_ID('wazne');
						query_posts('cat='.$cat);
						query_posts('showposts=4');
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         ?>

							<a href="<?php the_permalink(); ?>"><div id="message_box" class="tipped box backg" title="<?php the_title(); ?>" style="background-image: url(<?php echo $feat_image[0]; ?>)"></div></a>

						<?php endwhile; else: ?>
							<p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
						<?php endif; ?>
						</div>
					</div><!--/div #posts-->
					<?php //get_sidebar(); ?>
				</div><!--/div .wrapper-->
			</section><!--/section #content-->
            <section id="features">
                <div class="wrapper cf">
                    <div class="features-box">

                        <?php
                        if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon',get_template_directory_uri().'/images/features-box-icon-one.png' ) ) {

                            echo '<div class="features-box-icon">';

                            echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon', get_template_directory_uri().'/images/features-box-icon-one.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" />';

                            echo '</div>';
                        }

                        if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' ) ) {

                            echo '<h4>';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' );

                            echo '</h4>';
                        }

                        if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' ) ) {

                            echo '<p>';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' );

                            echo '</p>';
                        }
                        ?>
                    </div><!--/div .features-box-->
                    <div class="features-box">

                        <?php
                        if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon', get_template_directory_uri().'/images/features-box-icon-two.png' ) ) {

                            echo '<div class="features-box-icon">';

                            echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon',get_template_directory_uri().'/images/features-box-icon-two.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" />';

                            echo '</div>';
                        }
                        if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ) ) {

                            echo '<h4>';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' );

                            echo '</h4>';
                        }

                        if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' ) ) {

                            echo '<p>';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' );

                            echo '</p>';
                        }
                        ?>

                    </div><!--/div .features-box-->
                    <div class="features-box">

                        <?php
                        if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon',get_template_directory_uri().'/images/features-box-three.png' ) ) {

                            echo '<div class="features-box-icon">';

                            echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon', get_template_directory_uri().'/images/features-box-three.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" />';

                            echo '</div>';

                        }

                        if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ) ) {

                            echo '<h4>';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' );

                            echo '</h4>';
                        }

                        if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' ) ) {

                            echo '<p>';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' );

                            echo '</p>';
                        }
                        ?>

                    </div><!--/div .features-box-->
                </div><!--/div .wrapper-->
            </section><!--/section #features-->


		<?php } get_footer(); ?>