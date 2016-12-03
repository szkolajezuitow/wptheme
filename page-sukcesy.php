<?php
/**
 *
 *
 * @package lawyeria-lite
 * Template Name: Sukcesy
 */

get_header();
?>
<section class="wide-nav">
    <div class="wrapper" style="padding-left: 220px">
        <h3>
            <?php the_title(); ?>
        </h3><!--/h3-->
    </div><!--/div .wrapper-->
</section><!--/section .wide-nav-->
</header><!--/header-->
<section id="content">
    <div class="wrapper cf padleft">
        <div id="posts">
            <?php
            $args = array (
                'category_name'          => 'sukcesy',
                'post_type'              => 'post',
                'ignore_sticky_posts'    => true,
                'paged'					 => $paged,
            );

            $blog = new WP_Query( $args );

            if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post();
                $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a><!--/a-->
                    </h3><!--/h3-->
                    <div class="post-meta">
							<span>
								<?php echo get_the_date(); ?> - <?php _e('Posted by:','lawyeria-lite'); ?> <?php the_author_posts_link(); ?>
                            </span>
                    </div><!--/div .post-meta-->
                    <?php
                    if ( $feat_image != NULL ) { ?>
                        <div class="post-image">
                            <img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                        </div><!--/.post-image-->
                    <?php } ?>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div><!--/div .post-excerpt-->
                    <a href="<?php the_permalink(); ?>" title="<?php _e( 'Read More', 'lawyeria-lite' ); ?>" class="read-more">
                        <span><?php _e( 'Read More', 'lawyeria-lite' ); ?></span>
                    </a><!--/a .read-more-->
                </div><!--/div .post-->
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <div class="posts-navigation">
                <?php next_posts_link( 'Prev', $blog->max_num_pages ); ?>
                <?php previous_posts_link(esc_attr__( 'Next', 'lawyeria-lite' )); ?>
            </div><!--/div .posts-navigation-->
        </div><!--/div #posts-->

    </div><!--/div .wrapper-->
</section><!--/section #content-->
<?php get_footer(); ?>
