<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
           <h2> <?php the_title(); ?></h2>
             <h3><?php the_permalink();?></h3>
                 <?php the_content(); ?>
                       <?php the_posts_navigation();?>
            <?php endwhile;?>
 
  
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


    
<?php get_footer();?>