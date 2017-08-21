<?php get_header();?>
<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
</br>
            <h1>OEPS</h1>
            <h2>Hier staan geen fietsen</h2>
            <h2>GA TERUG NAAR HOME</h2>
        </div>

        <div class="col col-12">
        <?php get_footer(); ?>
    </div>
</div>