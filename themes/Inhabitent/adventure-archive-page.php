<?php get_header(); ?>

<?php if( have_posts() ) :

    while( have_posts() ) :
        the_post(); ?>
    <h1>Adventure archive page...</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endwhile;?>
    <?php the_posts_navigation();?>
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
    
<?php get_footer();?>