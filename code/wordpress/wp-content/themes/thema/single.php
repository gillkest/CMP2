<?php get_header();?>
<small>single.php</small>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-xs-12">
           
            <?php get_template_part('partials/content'); ?>

                        <div class="comments">
                                <?php comments_template(); ?>
                        </div>
          
        </div>
        <div class="col-md-3 col-xs-12">
        <?php get_sidebar(); ?>
        </div>

        <div class="col col-12">
        <?php get_footer(); ?>
    </div>
</div>