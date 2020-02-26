<?php get_header(); ?>


<h1>Shop Stuff..</h1>

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

<div class = "jurnal-menu">
<?php
foreach($terms as $term) : 
    $menu_item = $term->name;?>
    <div class = "post-menu">
        <?php 
         echo "<p>";
         echo $menu_item;?>  
     <?php echo "</p>";
    ?>
   </div>
    <?php endforeach;?>
    <!-- End of <div class="shop-sruff"> -->
   <!-- End Menu Post -->
</div>
<hr>

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

    <h3><?php the_permalink();?></h3>
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