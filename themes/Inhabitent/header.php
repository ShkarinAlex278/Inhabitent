<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<header>
 <nav class="<?php echo is_page(array('About', 'Home')) ? 'main-menu' : 'main-green' ;?>">
 <a href="http://localhost:3006/Inhabitent/">
 <img class = "logo" src="<?php echo is_page(array('About', 'Home')) ? 
get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent-white.svg' :
 get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent.svg' ;?> " > 
 </a> 

<?php wp_nav_menu(array ('theme_lacation'=>'main'))?>
</nav>
</header>




