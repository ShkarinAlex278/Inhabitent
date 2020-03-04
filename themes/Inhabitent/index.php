<?php get_header(); ?>


<div class="home-page">
<hr>
<div class="journal-page">

<?php if( have_posts() ) :



//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
<div class="picture-content" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
    <h1><?php the_title(); ?></h2>
    <h2><?php the_date();?>/0 Comments</h3>
    </div>
    <?php the_content(); ?>
    <button type='button'> READ MORE &#8594</button> 
<!-- Contact Info -->
   <!-- Loop ends -->
    <?php endwhile;?>
    </div>
  
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<div class="contact-journel-page">
<?php dynamic_sidebar('sidebar-info'); ?> 
</div>


</div>


    
<?php get_footer();?>