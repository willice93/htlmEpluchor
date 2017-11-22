
<html>
 <head>
  <title>extraction de données</title>
 </head>
 <body>
 <?php 

$pizza  = "../../../../cdn.shopify.com/s/files/1/1011/5098/products/42082_25W_09b9d88f-aa7c-43a9-a11a-78ce1f56165a_grande27cc.png?v=1448290760";
$pieces = explode("/", $pizza);
echo $pieces[11]; // piece1
echo $pieces[1]; // piece2


?>

 </body>
</html>
