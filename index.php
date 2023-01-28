<!DOCTYPE html>
<html lang = "fr">
    <head>
  
    <title> massa anthony </title>

    <?php


    ?>        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name = "description" content = "">

        </head>

    <body>
        <header class = "d-flex justify-content-around flex-wrap header border border-dark">

        <div> <a href = "<?php echo  site_url()?>" class = 'text-decoration-none link_header'> mon acceuil </a> </div>
         <div> 
         <a  href = "<?php echo site_url()."/creation";?>" class = 'link_header text-decoration-none'> mes créations</a> 
        </div> 

        <div>
        
        <a href = '<?php echo site_url()."/service"?>' class = 'link_header text-decoration-none'> mes services </a>

       </div>

        <div> <a href = "<?php echo site_url()."/contact" ?>" class = 'link_header text-decoration-none'>contact</a></div> 
        
        <div> <a href = "<?php echo site_url()."/presentation"?>" class = 'link_header text-decoration-none'> a propos</a> </div>

            </header>
        
            <main class = "d-flex">
           
            <div class = "w-100">
          
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

$creation = site_url()."/creation";

$tab = [];

/*recuperation des id des post*/
foreach($myposts as $value){

    array_push($tab,$value->ID);

}

/*  nombre de page de post */

$ligne = array_chunk($tab,3);

/*affichage page d'acceuil */
if($url == $creation || isset($_GET['nbpage'])){

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

}

            ?>
          
             </div>


            </main>

                <footer class = ' border border-dark'>
                    footer
                    </footer>
        </body>
    </html>