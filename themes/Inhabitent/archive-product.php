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
 
    <a href="<?php echo $term->taxonomy?>/<?php echo $term->slug?>"> 
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

<section class="container-archive-page"> 
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
        <div class="product">
    <?php the_post_thumbnail(); ?>
    
    <span class = "price">       
    <?php echo '$' . get_field('price');?>
    </span>

     <?php the_content(); ?>
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>    

<?php get_footer();?>