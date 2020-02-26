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


// echo "<pre>";
// print_r($terms);
// echo"</pre>";

//-----

foreach($terms as $term) : 
    $file_name = $term->slug . '.svg';?>
    <div class = "post-catecory">
     <img src='<?php echo get_template_directory_uri() . "/assets/images/product-type-icons/$file_name"?>'>
   <?php 
         echo "<p>";
         echo $term->description;?>  
   <button type='button'> <?php echo $term->name;?></button> 
    <?php echo "</p>";
    ?>
   </div>
    <?php endforeach;?>
    <!-- End of <div class="shop-sruff"> -->
    </div> 

    <h1>INHABITENT JURNAL</h1>
<!-- INhabet Jurnal -->

<div class="inhabit-jurnal">

<?php 
$terms = get_terms(array(
'taxonomy' => 'product-type',
'hide_empty'=>false
));


// echo "<pre>";
// print_r($terms);
// echo"</pre>";

//-----

foreach($terms as $term) : 
    $file_name = $term->slug . '.svg';?>
    <div class = "post-catecory2">
     <img src='<?php echo get_template_directory_uri() . "/assets/images/blog-photos/assets\images\blog-photos2.jpg"?>'>
   <?php 

         echo "<p>";
         echo $term->description;?>
   
   <button type='button'> <?php echo $term->name;?></button> 

    <?php echo "</p>";
    ?>
   </div>
    <?php endforeach;?>
    <!-- End of <div class="shop-sruff"> -->
    </div> 

<!-- End Inh Jurnal -->
<!-- Custom POst Loop Starts -->
<?php
$args = array( 
    'post_type' => 'post', 
'order' => 'ASC',
'numberposts'=> 1 ); // Some added...
   $products = new WP_Query( $args ); // instantiate our object
?>
<?php
   $args = array( 'post_type' => 'product', 'order' => 'ASC' );
   $product_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <?php the_title() ?>
<?php endforeach; wp_reset_postdata(); ?>


    
<?php get_footer();?>