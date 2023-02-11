<!DOCTYPE html>
<html lang = "fr">

    <body>

<style>
    <?php

    require_once(__DIR__."/style.css") ;

    ?>
    </style>

<?php 
wp_head();

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

