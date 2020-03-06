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
$name = get_queried_object_id();

echo "<pre>";
print_r($name);
echo"</pre>";


foreach($terms as $term) : 
    $file_name = $term->slug . '.svg';?>
    <div class = "post-catecory">
     <img src='<?php echo get_template_directory_uri() . "/assets/images/product-type-icons/$file_name"?>'>
   <?php 
         echo "<p>";
         echo $term->description;?>  
         <a href="<?php echo $term->taxonomy?>/<?php echo $term->slug?>"> 
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

    // echo "<pre>";
    // print_r($args);
    // echo"</pre>";
?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<div class = "jurnals">

   <?php the_post_thumbnail() ?>
        <div class = "topic-jurnal"> 
            <p class = "journal-date"> <?php the_date()?> / 0 Comments</p>
   <?php the_title() ?>
   <?php echo get_terms() ?>
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
<h1> LATEST ADVENTURES</h1>
<?php
   $args = array( 
       'post_type' => 'adventure', 
       'order' => 'ASC',
       'numberposts' => 4
    );
   $product_posts = get_posts( $args ); // returns an array of posts
   $counter = 1;
   $containerName = 'Item' . $counter; 
   
?>

<div class="content-adventure">
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<?php $containerName = 'Item' . $counter; ?>
    <div class=<?php echo $containerName?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.33), rgba(0, 0, 0, 0.33)), url(<?php echo get_the_post_thumbnail_url()?>)">      
    
    <?php $counter++;?>

    <p><?php the_title()?></p>
        <button type = "click">
        <a href="<?php the_permalink() ?>">    
        READ ME
        </a>
</button> 
         </div>
   
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- ADVENTURES End -->

    
<?php get_footer();?>