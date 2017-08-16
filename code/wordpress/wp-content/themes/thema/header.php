<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Wordpress site</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    
    <?php wp_head(); ?>

</head>
<body>


<header>   
    <nav class="navbar navbar-default navbar-toggleable-md">

        <button class="navbar-default navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-default navbar-toggler-icon"><i class="fa fa-bars"></i></span>
        </button>


                <a class="navbar-brand navbar-default" href="#">
                        <?php 
                        //custom logo toevoegen in navbar
                           $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            //als er een custom logo is, gebruik dat ...
                            if ( has_custom_logo() ) {
                                echo '<img class="logo" src="'. esc_url( $logo[0] ) .'">';
                                //indien niet display bloginfo 'name'...
                            } else {
                                echo esc_attr( get_bloginfo( 'name' ) );
                            }
                        ?>
                </a>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--
                        <ul class="navbar-nav mr-auto">
                        -->
                            <?php wp_nav_menu( 
                                            array( 
                                                    'theme_location' => 'primary-menu',
                                                    'menu_class' => 'navbar-nav mr-auto',
                                                ) 
                                            ); 
                            ?>


                        <!--Hier staat de zoekfunctie -->
                        <!-- 
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        -->
                        
                    </div>
    </nav>
</header>