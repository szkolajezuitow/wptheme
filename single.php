				<?php
		/**
		 *  The template for displaying Single.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		?>
			<section class="wide-nav">
				<div class="wrapper" style="padding-left: 220px">
					<h3 style="margin-top: 20px;">
						<?php the_title(); ?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header>
		<section id="content">
			<div class="wrapper cf" style="padding-left: 220px">
				<div id="posts" style="margin-top: 90px;">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					?>
					<div class="post">

						<?php
							if ( $feat_image != NULL ) { ?>
								<div class="post-image">
									<img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
								</div><!--/div .post-image-->
							<?php } ?>
						<div class="post-excerpt">
							<?php the_content(); ?>
						</div><!--/div .post-excerpt-->
						<?php
							wp_link_pages( array(
								'before'      => '<div class="post-links"><span class="post-links-title">' . __( 'Pages:', 'lawyeria-lite' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );
						?>
						<div class="post-tags">
							<?php the_tags('<span>Tags:</span> '); ?>
						</div><!--/div .post-tags-->
						<div class="post-meta">
							<span>
								<b><?php echo get_the_date(); ?> - <?php _e('Posted by:','lawyeria-lite'); ?> <?php the_author_posts_link(); ?><b/>
							</span><!--/span-->
						</div><!--/div .post-meta-->
					</div><!--/div .post-->
					<?php endwhile; else: ?>
                    	<p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
                	<?php endif; ?>
				</div><!--/div #posts-->
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>