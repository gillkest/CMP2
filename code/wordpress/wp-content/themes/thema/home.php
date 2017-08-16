<?php get_header();?>

<?php if ( get_header_image() ) : ?>
    <div id="site-header">
         <div id="banner-tekst"><h1>Win</h1>
            <h2>Prijzen</h2></div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>

    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="col-7">
<h2 style="background-color:white; color: red;" >Win je eigen gewicht in stella</h2>
<p>Doe mee met onze 100% plezier selfie en win 1 jgewicht in alcoholvrij
bier. Het enige wat je moet doen is een selfie
nemen met een 0,0 Stella samen met je vrienden. De selfie
moet plezier uitstralen en iets uniek bevatten.</p>
<h3 style="background-color:white; color: red;"> BEKIJK DE VORIGE WINNAARS HIER </h3>
<br>
<br> 

</div>
<div class="col-5">

</div>
<div class="col-12">
<h2 style="background-color:black; color: yellow;">DEEL JE 100% PLEZIER SELFIE MET DE HASHTAG #100%PLEZIER</h2>
<h3 style="background-color:yellow; color: black;">EN WIN TAL VAN PRIJZEN</h3>

<br>
<br> 
</div>
</div>
            <div class="col-12">
                <?php get_template_part('partials/wedstrijd'); ?>
                


            </div>
        </div>

            <div class="col col-12">
            <?php get_footer(); ?>
            </div>
            
    </div>