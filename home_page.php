<style>
  .card_home{
    position: relative;
 margin: auto;
 height: 78vh;
 overflow: hidden;
 width: 90%;

 max-width: 100%;
  }

  .menu_home{
    
  }


  .menu {
    position: relative;
    left: 5%;
    z-index: 11;
    width: 100%;
    bottom: 0;
    text-align: center;
}
  </style>

<?php 
$nb = 5;

	$defaults = array(
		'numberposts'      => $nb,
		'category'         => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => array(),
		'exclude'          => array(),
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'suppress_filters' => true,
	);

  $post = get_posts($defaults);

  $tab = [];

  /*tableau id post*/
 foreach($post as $val){

 array_push($tab,$val->ID);

 }
 
 /*boucle des slide*/

 echo '<div class = "card_home">';

 for($a = 4; $a >= 0; $a--){
 

  echo '
  <input class="slide-input" id="slide-dot-'.$a.'" for="slide-dot'.$a.'" type="radio" name="slides" checked>
  <div class="slide-img">
  
  <div style = "height:100%;" >
  <img class="" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide1.jpg"  style = "object-fit:cover; height:100%; width:100%;">
  </div>

  <div>
  '.get_post($tab[$a])->post_title.'
  </div>

  <div>
  '.get_the_excerpt($tab[$a]).'
  </div>
  
  </div>
  ';

 }

?>

</div>

<div class="menu d-flex">
  
  <?php 
   
   $a1 = 0;

   /* boucle des bouton de défilement des  slides */

   for($a1 =  0; $a1 < $nb-1; $a1++){

     echo '<div><label for="slide-dot-'.$a1.'"></label></div>';

   }

   ?>
 </div>

<?php
 
 echo '</div>';

?>

<!--
<div class = 'd-flex h-100'>

<div class="slider-container">
   
      <div>
      <input class="slide-input" id="slide-dot-1" for="slide-dot-1" type="radio" name="slides" checked>
      <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide1.jpg">

      <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
      <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide2.jpg">
      
      <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
      <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide3.jpg">
  </div>

    </div>

-->
   
  
  
</div>
