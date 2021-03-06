<?php

/* Template Name: Display Off The Beaten Path Posts */

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
                'post_type' => 'post',
                'post-status' => 'publish',
                'cat' => '-3',
                'posts_per_page' => '6',
            );


            $cat1_posts = new WP_Query($args); 

        if ($cat1_posts->have_posts()) : while ($cat1_posts->have_posts()) : $cat1_posts->the_post(); ?>



        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <!-- Opening line for headline and content -->

            <h2 class="wp-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <h3>This template is <?php global $template; echo basename( $template ); ?></h3>


                <?php the_category(); ?>


                <?php the_content(); ?>

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

