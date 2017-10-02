<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package adp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creative Drinking</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>



<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicon/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Facebook OpenGraph Meta Tags -->
<meta property="og:title" content="We Create Memories."/>
<meta property="og:description" content="Creative Drinking is a Los Angeles based full service studio. We are designers, photographers, producers, and developers. We create memorable design, branding, web applications, photography, print digital media production and editorial, video, and arts & culture programing." />
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://creativedrinkingla.com/"/>
<meta property="og:site_name" content="Creative Drinking"/>
<meta property="og:image:url" content="<?php echo get_template_directory_uri(); ?>/img/cd-logo-600-reverse-sm2.png" />
<meta property="og:image:height" content="600"/>
<meta property="og:image:height" content="600"/>
<!-- Facebook OpenGraph Meta Tags -->

<meta name="google-site-verification" content="DAoeNSw88RYLO42Ieml__UqPHEJgge86Efzi_e-RE5Y" />
</head>

<body <?php body_class(); ?>>
<div class="fadein" style="background:white; position:fixed; top:0; left:0; right:0; bottom:0; z-index:99999"></div>
