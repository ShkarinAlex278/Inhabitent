<?php get_header(); ?>
<div class="jurnal-menu">

<?php $term = get_term_by('slug', 'product-type', 'category'); 
$name = $term->name;
$terms = get_the_terms(get_the_ID(),'product-type');
?>
<div class = "type-post-menu">
<?php foreach ( $terms as $term ) : setup_postdata( $post ); ?>

   <h1><?php echo $term->name; ?></h1> 
   <h3><?php echo $term->description; ?></h3>
 
<?php endforeach; wp_reset_postdata(); ?>
</div>
    </div>
    <section class="type-archive-page">  
           
<?php if( have_posts() ) :
    while( have_posts() ) :
        the_post(); ?>       
    <a class="type-product" href="<?php the_permalink() ?>"> 
    <?php the_post_thumbnail(); ?>    
    <span class = "price">       
    <?php echo the_title() .'...$' . get_field('price');?>
    </span>
    </a>
 
    <?php endwhile;?>
    </section> 

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


<?php get_footer();?>