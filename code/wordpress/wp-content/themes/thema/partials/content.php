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
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnail');
            }
?>