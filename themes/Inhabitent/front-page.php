<?php get_header(); ?>




<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<span class = 'font-page'>
<img src="<?php echo get_template_directory_uri()?>/assets/images/home-hero3.jpg">
<img class = 'logotype' src="<?php echo get_template_directory_uri()?>/assets/images/logos/inhabitent-logo-full.svg">
</span>

        <h1>SHOP STUFF...</h1>
    
    <h2><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>