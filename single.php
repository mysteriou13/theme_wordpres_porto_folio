<?php 

wp_head();

get_header();

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    

$id = url_to_postid($url);

$post = get_post($id);

?>

<main>

<?php
echo "<center>".$post->post_title."</center> </br>";

 echo $post->post_content;
?>
</main>
<?php
 get_footer();

