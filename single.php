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
                            <li>Posted by <a href=""><?php echo esc_html__( get_the_author() ); ?></a></li>
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

                <h2>Post a Comment</h2>
                <form role="form" class="comment-form">
                    <fieldset>
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" />
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" class="form-control" placeholder="Enter Your Email" />
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" placeholder="http://" />
                        </div>
                        <div class="form-group">
                            <label>Comment *</label>
                            <textarea class="form-control" rows="10">Enter your comment...</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Comment</button>
                    </fieldset>
                </form>

                <div class="divider"></div>

                <div class="comments-wrapper">
                    <h2>Comments</h2>
                    <div class="comment">
                        <h3><a href="#">Axl Rose</a></h3>
                        <div class="comment-meta">
                            <small>January 1, 2014 at 1:31 am .::. <a href="#">Reply</a></small>
                        </div>
                        <div class="comment-body">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div><!-- comment //-->
                    <div class="comment">
                        <h3><a href="#">Axl Rose</a></h3>
                        <div class="comment-meta">
                            <small>January 1, 2014 at 1:31 am .::. <a href="#">Reply</a></small>
                        </div>
                        <div class="comment-body">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div><!-- comment //-->
                    <div class="comment">
                        <h3><a href="#">Axl Rose</a></h3>
                        <div class="comment-meta">
                            <small>January 1, 2014 at 1:31 am .::. <a href="#">Reply</a></small>
                        </div>
                        <div class="comment-body">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div><!-- comment //-->
                    <div class="comment comment-child">
                        <h3><a href="#">Axl Rose</a></h3>
                        <div class="comment-meta">
                            <small>January 1, 2014 at 1:31 am .::. <a href="#">Reply</a></small>
                        </div>
                        <div class="comment-body">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div><!-- comment //-->
                    <div class="comment comment-child">
                        <h3><a href="#">Axl Rose</a></h3>
                        <div class="comment-meta">
                            <small>January 1, 2014 at 1:31 am .::. <a href="#">Reply</a></small>
                        </div>
                        <div class="comment-body">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div><!-- comment //-->
                    <div class="comment">
                        <h3><a href="#">Axl Rose</a></h3>
                        <div class="comment-meta">
                            <small>January 1, 2014 at 1:31 am .::. <a href="#">Reply</a></small>
                        </div>
                        <div class="comment-body">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div><!-- comment //-->
                    <div class="comment">
                        <h3><a href="#">Axl Rose</a></h3>
                        <div class="comment-meta">
                            <small>January 1, 2014 at 1:31 am .::. <a href="#">Reply</a></small>
                        </div>
                        <div class="comment-body">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div><!-- comment //-->
                </div>
            </div><!-- .blog-roll //-->
            <?php endwhile; ?>
        </div>
    </div>

<?php
get_sidebar();
get_footer();
