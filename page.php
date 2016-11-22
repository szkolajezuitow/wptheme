		<?php
		/**
		 *  The template for displaying Page.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		?>
  			<section class="wide-nav">
				<div class="wrapper" style="padding-left: 220px;" >
					<h3 style="margin-top: 15px;">
						<?php the_title(); ?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header><!--/header-->
		<section id="">
			<div class="wrapper cf" style="padding-left: 220px;">
				<div id="posts" style="margin-top: 150px;">
					<?php

						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
					?>
					<div class="post">
						
						<div class="post-excerpt">
							<?php the_content(); ?>
						</div><!--/div .post-excerpt-->
												
						
					</div><!--/div .post-->
					<?php endwhile; else: ?>
                    	<p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
                	<?php endif; ?>
				</div><!--/div #posts-->

			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>