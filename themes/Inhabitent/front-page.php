<?php get_header(); ?>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<span class = 'font-page'>
<img src="<?php echo get_template_directory_uri()?>/assets/images/home-hero3.jpg">
<img class = 'logotype' src="<?php echo get_template_directory_uri()?>/assets/images/logos/inhabitent-logo-full.svg">
</span>
        <h1 class = "shop-stuff-h1">SHOP STUFF</h1>
        <div class="shop-sruff">  
    
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php 
$terms = get_terms(array(
'taxonomy' => 'product-type',
'hide_empty'=>false
));

foreach($terms as $term) : 
    $file_name = $term->slug . '.svg';?>
    <div class = "post-catecory">
     <img src='<?php echo get_template_directory_uri() . "/assets/images/product-type-icons/$file_name"?>'>
   <?php 
         echo "<p>";
         echo $term->description;?>  
         <a href="<?php the_permalink() ?>"> 
   <button type='button'> <?php echo $term->name;?> STUFF</button> </a>
    <?php echo "</p>";
    ?>
   </div>
    <?php endforeach;?>
    <!-- End of <div class="shop-sruff"> -->
    </div> 

    <h1>INHABITENT JOURNAL</h1>
<!-- INhabet Jurnal.. -->

<div class="inhabit-jurnal">
<?php
   $args = array( 
       'post_type' => 'post', 
       'order' => 'ASC',
       'numberposts' => 3
    );
   $product_posts = get_posts( $args ); // returns an array of posts

?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<div class = "jurnals">

   <?php the_post_thumbnail() ?>
        <div class = "topic-jurnal"> 
            <p class = "journal-date"> <?php the_date()?> / 0 Comments</p>
   <?php the_title() ?>
   
   <button type='button'> 
   <a href="<?php the_permalink() ?>">  
   READ ENTRY
   </a>
</button> 
  
        </div>
   </div>
<?php endforeach; wp_reset_postdata(); ?>
</div> <!-- End Jurnal div -->


<!-- ADVENTURES start -->
<?php
   $args = array( 
       'post_type' => 'post', 
       'order' => 'ASC',
       'Categories' => 'Adventures',
       'numberposts' => -1
    );
   $product_posts = get_posts( $args ); // returns an array of posts

?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<div class = "content-adventure">

  
        <div class = "gering-back"> 
       
   <?php the_title() ?>
   
   <?php get_posts?>
   <button type='button'> 
   <a href="<?php the_permalink() ?>">  
   READ ENTRY
   </a>
</button> 
  
        </div>
   </div>
<?php endforeach; wp_reset_postdata(); ?>
<!-- ADVENTURES End -->

    
<?php get_footer();?>