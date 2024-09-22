<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bootom">
    <div class="row c"> <div class="col-lq-12"> </div></div>
        <a class="navbar-brand" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
        <button class="navbar-toggler" type="button" onclick="toggleMenu()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="inputHeaderTwo" href="<?php echo home_url(); ?>">HOME</a>
                </li>
                <li class="nav-item kontaktPoziom">
                    <span  class="nav-link">KONTAKT</span>
                </li>
            </ul>
        </div>
    </nav>
   

