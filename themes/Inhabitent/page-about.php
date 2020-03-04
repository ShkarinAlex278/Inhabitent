<?php get_header(); ?>
<section class="container-about-page">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    

    
<div class = 'about-page' style="background-image: linear-gradient(rgba(0, 0, 0, 0.33), rgba(0, 0, 0, 0.33)), url(<?php echo get_template_directory_uri() . "/assets/images/about-hero.jpg"?>)">

<h1>ABOUT</h1>
</div>
  
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<?php get_footer();?>