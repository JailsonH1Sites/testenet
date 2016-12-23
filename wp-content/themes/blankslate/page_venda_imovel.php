<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<script src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>

<!--rastreamento DO VISITANTE LOGADO-->
<?php get_template_part( 'wp-track' ); ?>






<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">

</header>
<div id="container">
<?php 
/* Template name: Página venda imovel */ 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php 
    $img = wp_get_attachment_image_src( get_post_thumbnail_id(), full );
 
        
   // if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    <div class="chamada-principal" style="background-image: url('<?php echo ($img[0]); ?>')">
        
        <header>
            <h1>Inscreva-se e descubra porque você deve conhecer este empreendimento</h1>
        </header>
    </div>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>