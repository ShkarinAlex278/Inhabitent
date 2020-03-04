<?php get_header(); ?>

    <h1>Single product...</h1>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
        
    <?php the_post_thumbnail(); ?>

    <?php echo '$' . get_field('price');?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>