<?php
if(have_posts()) 
{
    while(have_posts()) 
    {
            //initialize the post
            the_post();
            //Print the title and the content of the current post
?>
    

        <section class="portfolio">

            <?php the_content(); ?>
            <?php if($hyperlink) : ?>
                <a href="<?php echo get_post_meta(get_the_ID(), 'hyperlink', true);?>" class="btn btn-primary">
                Bekijk De Website
                </a>
            <?php endif; ?>

        </section>

<?php
        }
    }
else 
{
echo 'No content available';
}

?>