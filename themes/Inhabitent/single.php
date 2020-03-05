<?php get_header(); ?>

<div class="single-page">    
<!-- <div class="single-journal-page"> -->
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
<span class = 'single-picture-image'>
<img src="<?php echo get_the_post_thumbnail_url();?>">
</span>
<div class = "single-picture-content">
    <h1><?php the_title();?></h1>
   
    
    <?php the_content()?>
    <div class="bottons">
    <button> LIKE </button> 
    <button> TWEEN </button> 
    <button> PIN </button> 
    </div>
    <?php endwhile;?>
    </div>
  
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


</div>
    
<?php get_footer();?>