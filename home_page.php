

<div style = "
position: relative;  left: 34%;
">
<h2>
  mes derniere créations
</h2>
</div>

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

?>

<div class="menu d-flex" style = " position: relative; left: 35%;">
  
  <?php 
   
   $a1 = 0;

   /* boucle des bouton de défilement des  slides */

   for($a1 =  0; $a1 < $nb-1; $a1++){

     echo '<div><label for="slide-dot-'.$a1.'"></label></div>';

   }

   ?>
 </div>

<?php
 echo '<div class = "card_home">';

 for($a = 4; $a >= 0; $a--){

  $post = get_post($tab[$a]);

  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
 $first_img = $matches [1] [0];


  echo '
  <input class="slide-input" id="slide-dot-'.$a.'" for="slide-dot'.$a.'" type="radio" name="slides" checked>
  <div class="slide-img">
  <a href = "'.get_permalink($tab[$a]).'" class = "text-dark text-decoration-none">
  ';
  
  if(!empty($first_img)){ 
  
  echo ' <div class = "div_slide" >
  <img class="" src="'.$first_img.'"  style = "object-fit:cover; height: 100%;">
  </div>';
  }

  echo '<div  style = "position: relative;  left: 34%;">
  <h1>
  '.get_post($tab[$a])->post_title.'
  </h1>
  </div>

  <div class = "except">
  '.get_the_excerpt($tab[$a]).'
  </div>
  
  </div>
  </a>
  ';

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
