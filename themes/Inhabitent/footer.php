<?php wp_footer();?>

<footer style= "background-image: url(<?php echo get_template_directory_uri()?>/assets/images/dark-wood.png")>
 <!-- <h1>Footer...</h1> -->
 <div class="foorer-content">
 <?php dynamic_sidebar('sidebar-info'); ?> 
 <img class = 'logo' src="<?php echo get_template_directory_uri()?>/assets/images/logos/inhabitent-logo-text.svg">
 </div>
 <p class = 'back' >COPYRIGHT &copy 2020 INHABITENT</p>
</footer>
</body>
</html>