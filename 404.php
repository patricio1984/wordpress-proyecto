<?php
/*

The template for displaying 404 error.

This is the template that displays all not found pages pages. 

@package WordPress
@Subpackage WordPress_For_Web_Development
@since Wordpress For Web Development 0.1

*/
?>

<?php get_header(); ?>

<section id="container"> <!-- holds the content and sidebar panes -->

    <section id="content"> <!-- The main information panel for our theme -->

        <section class="error" id="post-error"> <!-- Opening line for headline and content -->

            <h2 class="wp-title">Content not found</h2>

                <h3>This template is <?php global $template; echo basename( $template ); ?></h3>

                <img src="http://localhost:8888/wp-dev/wp-content/uploads/2020/05/404.png" alt="What you were looking couldn't be found">

                <h3>This is embarassing</h3>

                <p>It looks like what you were looking for couldn't be found</p>

        </section> <!-- Closing line for headline and content -->

    </section> <!-- Closes content -->

    <?php get_sidebar('error'); ?>

    <!-- Placeholder for sidebar -->    

    <?php get_footer(); ?>

</section> <!-- Closes container -->