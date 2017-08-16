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
        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-12"> 
                
                
                <?php
                if(have_posts()) {
                    while(have_posts()) {
                        //initialize the post
                        the_post();
                        //Print the title and the content of the current post
                        the_title('<h2>', '</h2>');
                        the_content();
                    }
                }
                else {
                    echo 'No content available';
                }
                ?>
                </div>

                <div class="col-md-12">
                    <?php echo do_shortcode('[contact-form-7 id="78" title="Contact1"]') ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>