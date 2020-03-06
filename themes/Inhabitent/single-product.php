<?php get_header(); ?>
<div class="singl-page">
    
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
     <div class="single-image">        
    <?php the_post_thumbnail(); ?>
    </div>
        <div class="single-content">
        <h2><?php the_title();?></h2>
        <h3><?php echo '$' . get_field('price');?></h3>
        <?php the_content();?>

        <div class="bottons">
    <button> LIKE </button> 
    <button> TWEEN </button> 
    <button> PIN </button> 
        </div>
   
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>    
<?php get_footer();?>