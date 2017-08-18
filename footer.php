<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package griswald
 */

?>

	</div><!-- #container -->

    <div class="footer-wrapper">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="inline credits">
                            <li class="footer-title"><?php bloginfo( 'name' ); ?></li>
                            <li>Copyright &copy; <?php echo esc_html__( get_the_date( 'Y' ) ); ?></li>
                            <li>/</li>
                            <li><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'griswald' ) ); ?>"><?php
                                /* translators: %s: CMS name, i.e. WordPress. */
                                printf( esc_html__( 'Proudly powered by %s', 'griswald' ), 'WordPress' );
                            ?></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 social-media">
                        <ul class="inline pull-right">
                            <li><a href="<?php echo esc_attr( get_theme_mod( 'footer_options_facebook', '#' ) ); ?>"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="<?php echo esc_attr( get_theme_mod( 'footer_options_twitter', '#' ) ); ?>"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="<?php echo esc_attr( get_theme_mod( 'footer_options_instagram', '#' ) ); ?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="<?php echo esc_attr( get_theme_mod( 'footer_options_dribbble', '#' ) ); ?>"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="<?php echo esc_attr( get_theme_mod( 'footer_options_linkedin', '#' ) ); ?>"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="mailto:<?php echo esc_attr( get_theme_mod( 'footer_options_contact_email', '#' ) ); ?>"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php wp_footer(); ?>

</body>
</html>
