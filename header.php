<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage test-theme
 * @since 2016.06.08
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Layout</title>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/entry.css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom-navbar.css" />
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>

<body class="bg-basic font-basic">
<!-- NAVIGATION_BAR START -->
<nav id="header-navigator" class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
        <span class="sr-only">メニュー</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Brand</a>
    </div>
    <div id="gnavi" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>
