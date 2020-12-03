<?php get_header();?>

<?php //This structure starts in header.php, and ends in footer.php ?>


    
    <?php // the top of the container is in header because of custom header?>

        <div>
            <?php if (have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content(); ?> 

            <?php endwhile; endif;?>
        </div>
        
    </div>




<?php get_footer();?>