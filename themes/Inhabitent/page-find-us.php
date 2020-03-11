<?php get_header(); ?>


<div class="find-page">
    
<div class="find-us-page">

<?php if( have_posts() ) :

    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
  
    <p><?php the_content(); ?></p>
    
    <!-- Loop ends -->
    <?php endwhile;?>
    </div>
  

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<div class="contact-info">
<?php dynamic_sidebar('sidebar-info'); ?> 
</div>

</div>


<?php get_footer();?>