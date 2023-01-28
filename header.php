

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