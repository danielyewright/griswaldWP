<?php

get_header(); ?>

<div class="row text-block">
    <div class="col-lg-6">
        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
        <ul class="unstyled">
            <li><strong>Website:</strong> <a href="#">www.website.com</a></li>
            <li><strong>Year:</strong> 2013</li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php
            while ( have_posts() ) : the_post();

                the_content();

            endwhile;
        ?>
    </div>
</div>

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
