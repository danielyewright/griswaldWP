<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package griswald
 */

?>

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
