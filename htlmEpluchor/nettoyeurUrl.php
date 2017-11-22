
<html>
 <head>
  <title>extraction de données</title>
 </head>
 <body>
 <?php 
//garde adresse img
$url  = "../../../../cdn.shopify.com/s/files/1/1011/5098/products/42082_25W_09b9d88f-aa7c-43a9-a11a-78ce1f56165a_grande27cc.png?v=1448290760";
$pieces = explode("/", $url);

echo $pieces[11].'</br>'; // piece1

// extrait la photo

$photo= explode("?",$pieces[11] );

echo $photo[0].'</br>';;





// extrait numero item

$numeroItem= explode("_", $pieces[11]);



echo $numeroItem[0].';'.$photo[0];

?>

 </body>
</html>
