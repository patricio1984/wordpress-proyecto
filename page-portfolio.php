<?php

/* Template Name: Portfolio Gallery */

?>

<?php
/*
@package WordPress
@Subpackage WordPress_For_Web_Development
@since Wordpress For Web Development 0.1

*/
?>

<?php get_header(); ?>

<section id="container"> <!-- holds the content and sidebar panes -->

    <section id="content"> <!-- The main information panel for our theme -->
            

        <?php
            $args = array(
                'post_type' => 'portfolio',
                'post-status' => 'publish',
                'posts_per_page' => '8',
            );


            $art_posts = new WP_Query($args); 

        if ($art_posts->have_posts()) : while ($art_posts->have_posts()) : $art_posts->the_post(); ?>



        <section <?php post_class(); ?> id="portfolio-<?php the_ID(); ?>"> <!-- Opening line for headline and content -->

                <p id="published-date"><?php $post_date = get_the_date( 'l, F j, Y' ); echo $post_date ?></p>

                <p id="category-slug">In the category <?php the_category(); ?></p>

            <h2 class="wp-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <h3>This template is <?php global $template; echo basename( $template ); ?></h3>


                <?php 
                    //check to see if the thumbnail exist before displaying it
                if( has_post_thumbnail() ) : ?>

                <div class="post-featured-image">

                    <?php the_post_thumbnail ( 'thumbnail' ) ?>

                </div>

                <?php endif; ?>


                <?php the_excerpt(); ?>

        </section> <!-- Closing line for headline and content -->

        <?php endwhile; ?>


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

