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
     <a href="www.facebook.com"><i class="fab fa-facebook-f"> </i>  LIKE</i></a>
    <a href="www.twitter.com"><i class="fab fa-twitter"> </i>  TWEET</a>
    <a href="www.pintrest.com"><i class="fab fa-pinterest"> </i>  PIN</a>
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