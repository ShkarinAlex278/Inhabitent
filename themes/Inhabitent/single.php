<?php get_header(); ?>
<div class="single-page">    
<div class="single-content">
<?php if( have_posts() ) :

    while( have_posts() ) :
        the_post(); ?>

<div class="single-picture-content" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
    <h2><?php the_title(); ?></h2>
    <h3><?php the_date();?>/0 Comments</h3>
    </div>
   
    
    <?php the_content()?>
    <div class="bottons">
    <a href="www.facebook.com"><i class="fab fa-facebook-f"> </i>  LIKE</i></a>
    <a href="www.twitter.com"><i class="fab fa-twitter"> </i>  TWEET</a>
    <a href="www.pintrest.com"><i class="fab fa-pinterest"> </i>  PIN</a>
    </div>

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