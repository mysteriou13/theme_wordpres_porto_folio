<!DOCTYPE html>
<html lang = "fr" >

    <body>

    <style>
    <?php

    require_once(__DIR__."/style.css") ;

    ?>
    </style>

     
<?php 
require_once(get_template_directory()."/head.php");
get_header();

echo '
<main class = "d-flex h-100">
           
<div>
';


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $url = "https"; 
  else
    $url = "http"; 
    
  // Ajoutez // à l'URL.
  $url .= "://"; 
    
  // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
  $url .= $_SERVER['HTTP_HOST']; 
    
  // Ajouter l'emplacement de la ressource demandée à l'URL
  $url .= $_SERVER['REQUEST_URI']; 
      
  // Afficher page d'acceuil
  
  if($url == home_url()."/" || isset($_GET['nbpage'])  && !isset($_GET['page'])){
    
    require_once(get_template_directory()."/home_page.php");

  }

if(isset($_GET['page']) && !empty($_GET['page'])  ){

    $page = get_template_directory()."/page/".$_GET['page'].".php";

    if(file_exists($page)){

   require_once($page);
    
    }else{
        require_once(get_template_directory()."/404.php");
    }

    }
    
    ?>
  </div>


</main>

<?php
get_footer();
?>
</body>
</html>