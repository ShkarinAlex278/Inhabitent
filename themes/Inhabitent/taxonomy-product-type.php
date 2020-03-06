<?php get_header(); ?>
<div class="jurnal-menu">

<?php $term = get_term_by('slug', 'product-type', 'category'); 
$name = $term->name;
$terms = get_the_terms(get_the_ID(),'product-type');
?>

<?php foreach ( $terms as $term ) : setup_postdata( $post ); ?>

   <h1><?php echo $term->name; ?></h1> 
 
<?php endforeach; wp_reset_postdata(); ?>


      <div class="post-menu">    
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
 
<h2><?php the_title()?></h2>

    
    <!-- Loop ends -->
    <?php endwhile;?>
    



<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
        </div>
    </div>
<?php get_footer();?>