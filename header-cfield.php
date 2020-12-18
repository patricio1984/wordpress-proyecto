<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> - <?php bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper"> <!-- Holds the whole website -->
        <header>
        
           <?php $webnameextend = get_post_meta( $post->ID, 'web-name-extension', true ); 

            if( !empty( $webnameextend ) ) :  ?>

                <h1 id="wp-name"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?><?php echo ' ' . $webnameextend ?></a></h1>

            <?php else : ?>

                <h1 id="wp-name"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

            <?php endif; ?>        

            <h3 id="site-description"><?php bloginfo( 'description' ); ?></h3>

        </header>

        <nav id="primary-menu">

            <?php wp_nav_menu( array ( 'theme_location' => 'main-menu', 'container_class' => 'main-nav' ) ); ?>
            
        </nav>

