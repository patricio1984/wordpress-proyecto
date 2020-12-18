<section id="sidebar" class="col-md-3">

    <!-- Content of sidebar -->
    <?php if ( is_active_sidebar ( 'main-sidebar' )) : ?>

        <?php dynamic_sidebar( 'main-sidebar' ); ?>

    <?php else :  ?>

        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

    <?php endif ?>

</section>