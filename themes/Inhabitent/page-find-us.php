<?php get_header(); ?>


<div class="find-page">
    
<div class="find-us-page">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
  
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>
    </div>
  

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<div class="contact-find-us-page">
<?php dynamic_sidebar('sidebar-info'); ?> 
</div>

</div>


<?php get_footer();?>