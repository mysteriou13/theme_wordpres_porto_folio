<!DOCTYPE html>
<html lang = "fr">

    <body>

<?php 

require_once(get_template_directory()."/head.php");

get_header();

?>
<main class = "d-flex">
           
<div class = "w-100">

<div>
<?php
echo "<center>".$post->post_title."</center>";
?>
</div>

<div>
<?php
 echo $post->post_content;
?>
</div>

</div>
</main>
<?php
 get_footer();
 ?>

 </body>
 </html>

