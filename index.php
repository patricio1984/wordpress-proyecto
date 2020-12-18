<?php get_header(); ?>

<section id="container" class="row"> <!-- holds the content and sidebar panes -->

    <section id="content" class="col-md-9"> <!-- The main information panel for our theme -->
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <!-- Opening line for headline and content -->

            <h2 class="wp-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <h3>This template is <?php global $template; echo basename( $template ); ?></h3>

                <?php if( has_post_thumbnail() ) :  ?>
                    
                    <div class="post-featured-image">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail( 'medium' ); ?>    
                        </a>
                    </div>

                <?php endif; ?>

                <?php the_content(); ?>

        </section> <!-- Closing line for headline and content -->

        <?php endwhile; ?>

        <section class="post-nav"> <!-- Opening line for post navigation -->

            <p><?php previous_post_link( "%link", "Previous post" ); ?></p>
            <p><?php next_post_link( "%link", "Next post" ); ?></p>

        </section> <!-- Closing line for post navigation -->

        <?php else :  ?>

        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <!-- Opening line for not found -->

            <h3>Sorry, couldn't find what you were looking for</h3>

        </section> <!-- Closing line for not found -->

        <?php endif; ?>

    </section> <!-- Closes content -->

    <?php get_sidebar(); ?>

    <!-- Placeholder for sidebar -->    

    <?php get_footer(); ?>

</section> <!-- Closes container -->