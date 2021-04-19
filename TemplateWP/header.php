<!DOCTYPE html>
<html lang="en">

<head>
   
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="/images/logo.png">

    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Theme CSS -->
    <!-- <link rel="stylesheet" href="wp-content/themes/TemplateWP/style.css"> -->
    <?php
      wp_head();
    ?>

</head>

<body>

    <header class="header text-center">
        <a class="site-title pt-lg-4 mb-0" href="index.html">
        <?php echo get_bloginfo('name'); ?>
        </a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
if(function_exists('the_custom_logo')){
   $custom_logo_id = get_theme_mod('custom_logo');
   $logo = wp_get_attachment_image_src($custom_logo_id);
}
?>

                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0]?>" alt="logo">


<?php
wp_nav_menu(
array(
     'menu'=>'primary',
     'container'=>'',
     'theme_location'=>'primary',
     'items_wrap'=>'<ul id="" class"navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
)
);
?>

   
                <hr>
               
                <?php
                  dynamic_sidebar('sidebar-1');
                ?>
            </div>






        </nav>
    </header>
    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php the_title();?></h1>
        </header>