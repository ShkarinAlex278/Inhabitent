<?php get_header(); ?>

<div class="search-result">
    <div class="results">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
           <h2> <?php the_title(); ?></h2>                     
                <p><?php echo wp_trim_words(get_the_content(), 40, '[...]'); ?></p> 
                <button type = "click">
        <a href="<?php the_permalink() ?>">    
        READ MORE &#8594
        </a>
    </button> 
    <?php endwhile;?>  
            <hr>
            <button> 1 </button> 
        
            
<?php else : ?>
        <p>No posts found</p>
        
<?php endif;?>
</div>
<div class="contact-info">
<?php dynamic_sidebar('sidebar-info'); ?> 
</div>

</div>
    
<?php get_footer();?>