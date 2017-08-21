<?php get_header();?>

<?php if ( get_header_image() ) : ?>
    <div id="site-header">
         <div id="banner-tekst"><h1>Wedstrijd</h1>
            </div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>

</br>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php get_template_part('partials/wedstrijd'); ?>
                


            </div>
            <div class="col-md-3 col-xs-12">
        <?php get_sidebar(); ?>
        </div>
        </div>

            <div class="col col-12">
            <?php get_footer(); ?>
            </div>
            
    </div>