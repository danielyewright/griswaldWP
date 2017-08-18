<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underscores
 */

get_header(); ?>

    <div class="row text-block">
        <div class="col-lg-6">
            <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <div class="blog-roll">
                <div class="post">
                    <div class="post-meta">
                        <ul class="inline">
                            <li>Posted by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo esc_html__( get_the_author() ); ?></a></li>
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
                    <div class="post-body">
                        <?php the_content(); ?>
                    </div>
                </div><!-- .post //-->

                <div class="divider"></div>

                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </div><!-- .blog-roll //-->
            <?php endwhile; ?>
        </div>
    </div>

<?php
// get_sidebar();
get_footer();
