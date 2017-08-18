<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package griswald
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php griswald_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'underscores' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php underscores_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->




<div class="row text-block">
    <div class="col-lg-6">
        <h1>Blog</h1>
        <div class="blog-roll">
            <div class="post">
                <div class="post-title">
                    <h2><a href="blog-post.html">Blog Post Title</a></h2>
                </div>
                <div class="post-meta">
                    <ul class="inline">
                        <li>Posted by <a href="#">Author</a></li>
                        <li class="light-grey">/</li>
                        <li>January 1, 2014</li>
                        <li class="light-grey">/</li>
                        <li><a href="#">Web Design</a></li>
                    </ul>
                </div>
                <div class="post-excerpt">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <p><a href="#">Read More &rarr;</a></p>
                </div>
            </div><!-- .post //-->
        </div><!-- .blog-roll //-->
    </div>
</div>
