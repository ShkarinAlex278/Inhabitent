<?php get_header(); ?>

<div class = "jurnal-menu">
<h1>SHOP STAFF</h1>

<!-- Start Menu Post -->

<?php 
$terms = get_terms(array(
'taxonomy' => 'product-type',
'hide_empty'=>false
));

    // echo "<pre>";
    // print_r($terms);
    // echo"</pre>";

?>


<div class = "post-menu">
<?php
foreach($terms as $term) : 
    $menu_item = $term->name;?>
 
 <a href='<?php echo "http://localhost/Inhabitent/product-type/$term->slug"?>'>  
   
       <?php echo "<p>";
         echo $menu_item;
         echo "</p>";?> 

        </a>
  
    <?php endforeach;?>
    <!-- End of <div class="shop-sruff"> -->
    </div>
   <!-- End Menu Post -->
   
</div>
<!-- <hr class="hr"> -->


<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <!-- Loop ends -->
    <?php endwhile;?>

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
<div class="product">
    <?php the_post_thumbnail(); ?>    
    <span class = "price">       
    <?php echo the_title() .'...$' . get_field('price');?>
    </span>
         </div>
   
<?php endforeach; wp_reset_postdata(); ?>
</section> 


<?php get_footer();?>