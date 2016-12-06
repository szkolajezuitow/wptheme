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
				<div class="wide-nav"></div>
				<div id="subheader">

					<div class="subheader-color cf">
						<div class="wrapper cf">
							<div class="motto"><h3>Szkoła Podstawowa Jezuitów</h3></div>
							<div class="full-header-content full-header-content-no-sidebar">


                                <div class="baner">   <?php masterslider(1); ?> </div>
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
            <div style="position: relative; margin-bottom: 10px; font-size: x-large; padding-top: 20px;"><a href="http://jezuici.edu.pl/podstawowa/?page_id=108">Aktualności</a></div>
						<?php
						$cat = get_cat_ID('wazne');
						query_posts('cat='.$cat);
						query_posts('showposts=4');
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         ?>

							<a href="<?php the_permalink(); ?>"><div id="message_box" class="tipped box backg"  style="background-image: url(<?php echo $feat_image[0]; ?>)">


                                    <div id="titleCube"><?php the_title(); ?></div>
                                </div></a>

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

                            echo '<h4><a href="http://jezuici.edu.pl">';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' );

                            echo '</a></h4>';
                        }

                        if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' ) ) {

                            echo '<p>';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' );

                            echo '</p>';
                        }
                        ?>

                        </a>
                    </div><!--/div .features-box-->
                    <div class="features-box">

                        <?php
                        if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon', get_template_directory_uri().'/images/features-box-icon-two.png' ) ) {

                            echo '<div class="features-box-icon">';

                            echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon',get_template_directory_uri().'/images/features-box-icon-two.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" />';

                            echo '</div>';
                        }
                        if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ) ) {

                            echo '<h4><a href="https://plus.google.com/u/0/100352471742716402166">';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' );

                            echo '</a></h4>';
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

                            echo '<h4><a href="https://www.facebook.com/szkolajezuitow">';

                            echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' );

                            echo '</a></h4>';
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
