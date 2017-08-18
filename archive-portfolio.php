<?php
/**
 * The template for displaying archive pages for the 'portfolio' custom post type
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package griswald
 */

get_header(); ?>

<div class="row text-block">
    <div class="col-lg-6">
        <h1>Portfolio</h1>
    </div>
</div>

<div class="portfolio-thumbs-wrapper">
    <div class="row portfolio-thumbs leading">

        <?php
            $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
            $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-3 col-xs-6">
                    <a href="<?php the_permalink(); ?>">
                        <span><?php the_title(); ?></span>

                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>

    </div>
</div>

<?php
get_footer();
