<?php

/**
	* Template Name: Our Team Page
	*
	* @package Catalyst Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-image-banner">
				<div class="page-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="banner-text">
						<?php echo CFS()->get( 'bannertext' ); ?>
					</p>
				</div><!-- .page-header -->
			</div>

			<p class="intro-copy">
                <?php echo CFS()->get( 'intro_copy' ); ?>
            </p>

				 <div class="staff-profiles-wrapper">

                <?php
                    $args = array( 'post_type' => 'staff', 'order' => 'ASC', 'numberposts' => -1 );
                    $staff_profiles = get_posts( $args ); // returns an array of posts
                ?>

                <?php foreach ( $staff_profiles as $post ) : setup_postdata( $post ); ?>
                    <?php get_template_part( 'template-parts/content', 'staff' ); ?>
                <?php endforeach; wp_reset_postdata(); ?>

                </div>

                <div class="board-profiles-wrapper">

                    <?php
                        $args = array( 'post_type' => 'board', 'order' => 'ASC', 'numberposts' => -1 );
                        $board_profiles = get_posts( $args ); // returns an array of posts
                    ?>

                    <?php foreach ( $board_profiles as $post ) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'template-parts/content', 'board' ); ?>
                    <?php endforeach; wp_reset_postdata(); ?>

                </div>

                <div class="advisors-profiles-wrapper">

                    <?php
                        $args = array( 'post_type' => 'advisors', 'order' => 'ASC', 'numberposts' => -1 );
                        $advisor_profiles = get_posts( $args ); // returns an array of posts
                    ?>

                    <?php foreach ( $advisor_profiles as $post ) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'template-parts/content', 'advisors' ); ?>
                    <?php endforeach; wp_reset_postdata(); ?>

                </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>