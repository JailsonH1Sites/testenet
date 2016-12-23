<?php 
/* Template name: Página protegida por cookie */ 


 $dominio= $_SERVER['HTTP_HOST'];
 $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
 $email_url = $_GET["track"];
 $nome_url = $_GET["nome"];
             
            

      $url_new = explode("/", $url); // explode faz uma string virar um array separado por /
         array_pop($url_new); //exclue o ultimo valor do array
         
         if ( !empty($email_url) && filter_var($email_url, FILTER_VALIDATE_EMAIL)): //se existe variavel $email_url e não é nula && filtra $email_url se é email valido e se existe $pass_url 

          $url = implode("/", $url_new); // faz o array virar string novamente
          setcookie("protegido", $email_url, (time() + (300 * 24 * 3600)), "/"); // grava no cookie do usuario
          setcookie("nome", $nome_url, (time() + (300 * 24 * 3600)), "/"); // grava no cookie do usuario
         header("Location: " .$url); // redireciona pra nova url sem o email falta tornar isto dinamico
         
          elseif(!empty($_COOKIE["protegido"]) /*and $_SERVER['HTTP_REFERER'] === $url*/): // se existe o cookie 
              
              //
      
              elseif(empty($_COOKIE["protegido"]) && $_SERVER['HTTP_REFERER'] == $url): //se não tiver o cookie e a pagina anterior for igual a pagina atual
              header("Location: ". get_permalink($post->post_parent)); // redireciona para pag mãe
              else:
                  header("Location: ".get_permalink( $post->post_parent )); //redireciona para pagina mãe
              
      endif;
      
      
get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>