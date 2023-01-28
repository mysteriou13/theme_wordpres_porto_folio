<!DOCTYPE html>
<html lang = "fr">

    <body>


     
<?php 
require_once(get_template_directory()."/head.php");
get_header();

echo '
<main class = "d-flex">
           
<div class = "w-100">
';

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