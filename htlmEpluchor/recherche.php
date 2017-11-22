<?php 
echo 'Modele de recherche dans une page web';
include_once ('simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('https://www.diouda.fr/soins-visage/soins-hydratants-et-nourrissants/');
/*
// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>'; 

// Find the DIV tag with an id of "myId"
foreach($html->find('dic#myId') as $e)
    echo $e->outertext . '<br>';
foreach($html->find('p') as $element)
       echo $element->outertext . '<br>';
foreach($html->find('div.product-single__description') as $e)
    echo $e->outertext . '<br>';





// Find the DIV tag with an class of "myId"
foreach($html->find('div.product-list') as $e)
    echo $e->outertext . '<br>';
foreach($html->find('div.productMainLink') as $e1)
    echo $e1->outertext ;


*/



//to fetch all images from a webpage
$images = array();
foreach($html->find('img') as $img) {
 $images[] = $img->src;}
$atl = array();

foreach($html->find('img') as $img) {
 $alt[] = $img->alt;
}
$title = array();
foreach($html->find('img') as $img) {
 $title[] = $img->title;}
$taille=count($images);
for($i=0;$i<=$taille;$i++){

echo $images[$i].';'.$alt[$i].';'.$title[$i].';<br>';}

echo 'ok';



?>
