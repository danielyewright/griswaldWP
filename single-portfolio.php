<?php

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="row text-block">
        <div class="col-lg-6">
            <h1><?php the_title(); ?></h1>
            <?php the_excerpt(); ?>
            <ul class="unstyled">
                <li><strong>Website:</strong> <a href="<?php echo esc_url( get_post_meta( $post->ID, 'website', true ) ); ?>" target="_blank"><?php echo esc_url( get_post_meta( $post->ID, 'website', true ) ); ?></a></li>
                <li><strong>Year:</strong> <?php echo esc_html__( get_post_meta( $post->ID, 'year', true ) ); ?></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <?php the_content(); ?>

        </div>
    </div>
<?php endwhile; ?>

<div class="portfolio-thumbs-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>Related Projects</h2>
        </div>
    </div>
    <div class="row portfolio-thumbs leading">
        <!--
        <div class="col-lg-3 col-xs-6">
            <a class='current' href="">
                <span>
                    Item Name
                </span>
                <img src="img/portfolio/13t.jpg" />
            </a>
        </div>
        -->
        <div class="col-lg-3 col-xs-6">
            <i><?php esc_html_e( 'Nothing Found', 'griswald' ); ?></i>
        </div>
    </div>
</div>

<?php
get_footer();
