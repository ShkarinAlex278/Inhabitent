<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<header style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo get_template_directory_uri()?>/assets/images/home-hero3.jpg")>
<img class = 'logo' src="<?php echo get_template_directory_uri()?>/assets/images/logos/inhabitent-logo-tent-white.svg">
   <div class = 'big-logo'>
   <img class = 'logotype' src="<?php echo get_template_directory_uri()?>/assets/images/logos/inhabitent-logo-full.svg">
</div>
    <nav class='main-menu'>
<?php wp_nav_menu(array ('theme_lacation'=>'main'))?>
</nav>

</header>

