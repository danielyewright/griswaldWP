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
 * @package underscores
 */

get_header(); ?>

    <div class="row text-block">
        <div class="col-lg-6">
            <!--// <h1>Blog</h1> //-->
            <div class="blog-roll">

                <?php
                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

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
