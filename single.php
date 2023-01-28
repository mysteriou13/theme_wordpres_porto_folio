<!DOCTYPE html>
<html lang = "fr">

    <body>

<?php 

require_once(get_template_directory()."/head.php");

get_header();

?>
<main>

<main class = "d-flex">
           
<div class = "w-100">

<?php
echo "<center>".$post->post_title."</center> </br>";

 echo $post->post_content;
?>
</div>
</main>
<?php
 get_footer();
 ?>

 </body>
 </html>

