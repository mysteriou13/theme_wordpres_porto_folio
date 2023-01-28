

<?php 

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
       else  
            $url = "http://";   
       // Append the host(domain name, ip) to the URL.   
       $url.= $_SERVER['HTTP_HOST'];   
       
       // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];    
         

/*argument par l'affichage des post*/
$defaults = array(
    'numberposts'      => -1,
    'category'         => 0,
    'orderby'          => 'date',
    'order'            => 'ASC',
    'include'          => array(),
    'exclude'          => array(),
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'suppress_filters' => true,
);

$myposts = get_posts($defaults);


$tab = [];

/*recuperation des id des post*/
foreach($myposts as $value){

    array_push($tab,$value->ID);

}

/*  nombre de page de post */

$ligne = array_chunk($tab,3);

/*affichage page d'acceuil */


echo "<div class = 'd-flex justify-content-around'>";

for($p = 0; $p < count($ligne); $p++){

    echo "<div><a href = '".$creation."?nbpage=$p'>page ".$p."</a></div>";

}

echo "</div>";
if(isset($_GET['nbpage']) && !empty($_GET['nbpage'])){

    $nbpage = $_GET['nbpage'];

}else{

    $nbpage = 0;
}

$el_ligne = array_chunk($ligne[$nbpage],2);

/*affichage des ligne*/

for($a1 = 0; $a1 < count($el_ligne); $a1++){

echo "<div class = 'd-flex justify-content-evenly ligne_box' >";


   foreach($el_ligne[$a1] as  $el){

    $link = get_permalink($el);
    
    $title = get_post($el)->post_title;

    echo "<div class ='div_box border border-dark'> 
    
    <a href ='$link' class = 'text-reset text-decoration-none'> <p> <u> ".$title." </u> </p>
    
    <p style = 'height:80%'>
       ".get_the_excerpt($el)."

       </p>

    </div></a>";

    
   }

    echo "</div>";

}


?>