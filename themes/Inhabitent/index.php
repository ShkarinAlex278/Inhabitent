<?php get_header(); ?>

<div class="home-page">    
<div class="journal-page">
<?php if( have_posts() ) :

    while( have_posts() ) :
        the_post(); ?>
<div class="picture-content" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
    <h2><?php the_title(); ?></h2>
    <h3><?php the_date();?>/0 Comments</h3>
    </div>
    <p><?php echo wp_trim_words(get_the_content(), 50, '[...]'); ?></p>
    
 
    
     <a href="<?php the_permalink() ?>">  
    READ MORE &#8594
   </a>
  <!-- Contact Info -->
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