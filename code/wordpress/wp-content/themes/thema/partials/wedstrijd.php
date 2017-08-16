<?php
            if(have_posts()) {
                while(have_posts()) {
                    //initialize the post
                    the_post();
                    //Print the title and the content of the current post
                    ?>
<div class="col-3 selfie">
                    <?php
                    the_title('<h2>', '</h2>');
                    the_content();
                    ?>
</div>
                    <?php
                }
            }
            else {
                echo 'No content available';
            }
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnail');
            }
?>