<?php get_header(); ?>
<div class="jurnal-menu">
<h1>Product Type...</h1>

      <div class="post-menu">    
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    
    <!-- Loop ends -->
    <?php endwhile;?>
    <?php 
$terms = get_terms(array(
'taxonomy' => 'product-type',
'hide_empty'=>false
));?>


   <?php echo "<pre>";
    print_r($description);
    echo"</pre>";?>
  


    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

  
<?php
   $args = array( 
       'post_type' => 'product', 
       'order' => 'ASC',
       'numberposts' => 16
    );
   $product_posts = get_posts( $args );      
?>
<section class="container-archive-page"> 
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<a href="<?php the_permalink() ?>"> 
<div class="product">
    <?php the_post_thumbnail(); ?>    
    <span class = "price">       
    <?php echo the_title() .'...$' . get_field('price');?>
    </span>
         </div>
         </a> 
<?php endforeach; wp_reset_postdata(); ?>
</section> 


</div>
</div>
<?php get_footer();?>