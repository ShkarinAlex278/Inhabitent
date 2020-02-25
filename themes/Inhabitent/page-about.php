<?php get_header(); ?>
<section class="container about-page">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
<div class = 'about-page'>
<?php the_post_thumbnail();?>

</div>

<h1>ABOUT</h1>
   

    <h2><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
   
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<?php get_footer();?>