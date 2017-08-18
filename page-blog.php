<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package griswald
 *
 * Template Name: Blog
 */

get_header(); ?>

    <div class="row text-block">
        <div class="col-lg-6">
            <h1>Blog</h1>
            <div class="blog-roll">

                <?php
                    $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
                    $query = new WP_Query( $args );
                ?>

                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="post">
                            <div class="post-title">
                                <h2><a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="post-meta">
                                <ul class="inline">
                                    <li>Posted by <a href="#"><?php echo esc_html__( get_the_author() ); ?></a></li>
                                    <li class="light-grey">/</li>
                                    <li><?php echo get_the_date( 'F j, Y' ); ?></li>
                                    <li class="light-grey">/</li>
                                    <li>
                                        <a href="#">
                                            <?php
                                            if ( has_category() ) :
                                                echo the_category();
                                            endif;
                                            ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                                <p><a href="<?php esc_url( the_permalink() ); ?>">Read More &rarr;</a></p>
                            </div>
                        </div><!-- .post //-->
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>

            </div><!-- .blog-roll //-->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <ul class="pager">
                <li><a href="#" class="btn btn-primary">&larr; Previous</a></li>
                <li><a href="#" class="btn btn-primary">Next &rarr;</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="divider"></div>
        </div>
    </div>

<?php
get_footer();
