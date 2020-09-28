<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>o4m</title>
    <link rel="icon" type="image/png" sizes="800x600" href=<?php echo get_template_directory_uri() . "/assets/img/logo.png"; ?>>
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href=<?php echo get_template_directory_uri() . "/assets/img/logo.png"; ?>>
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href=<?php echo get_template_directory_uri() . "/assets/img/logo.png"; ?>>
    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark text-center">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="#">
            <img class="img-fluid" src=<?php echo get_site_url() . '/wp-content/uploads/2020/01/logo.png'; ?> width="32px" height="16px">
          </a>
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav text-center flex-grow-1 justify-content-center">
                <?php get_template_part('parts/navigation'); ?>
            </ul>
          </div>
        </div>
    </nav>

    <header class="d-flex flex-column justify-content-center align-items-center header" style="background-image: url('<?php echo get_site_url() . '/wp-content/uploads/2020/01/header.jpg'; ?>');background-position: center;background-size: cover;background-repeat: no-repeat;">
        <div>
            <h1 style="background-image: url('<?php echo get_site_url() . '/wp-content/uploads/2020/01/logo.png'; ?>');background-position: center;background-size: cover;background-repeat: no-repeat;"><?php bloginfo('name'); ?></h1>
        </div>
    </header>
    <main class="mt-5">
