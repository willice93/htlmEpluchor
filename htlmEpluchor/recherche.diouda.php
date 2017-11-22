<?php 
echo 'Modele de recherche dans une page web';
include_once ('simple_html_dom.php');

// Create DOM from URL or file

$url[0]='https://www.diouda.fr/soin-cheveux/shampooing-shampoing/';
$url[1]='https://www.diouda.fr/leave-in-conditioner-lait-lotion/';
$url[2]='https://www.diouda.fr/gels-coiffants-cheveux/';
$url[3]='https://www.diouda.fr/apres-shampooings-co-wash-masques/';
$url[4]='https://www.diouda.fr/coiffure-et-hydratation-cheveux-crepus/';
$url[5]='https://www.diouda.fr/spray-cheveux/';
$url[6]='https://www.diouda.fr/cremes-de-coiffage-pour-cheveux-boucles-et-crepus/';
$url[7]='https://www.diouda.fr/defrisants/';
$url[8]='https://www.diouda.fr/cheveux/laques-et-cires-coiffantes/';
$url[9]='https://www.diouda.fr/soins-cheveux/thermoprotecteurs/';
$url[10]='https://www.diouda.fr/soin-cheveu/bain-d-huile-cheveux/';
$url[11]='https://www.diouda.fr/soin-cheveu/traitement-capillaire/';
$url[12]='https://www.diouda.fr/soin-cheveux/accessoires-cheveux/';
$url[13]='https://www.diouda.fr/coloration-teinture-cheveux/';
$url[14]='https://www.diouda.fr/mousses-coiffantes/';
$url[15]='https://www.diouda.fr/coiffure-tresse-africaine/meches-a-tresser/';
$url[16]='https://www.diouda.fr/coiffures/extensions-tissage-afro/';
$url[17]='https://www.diouda.fr/coiffures/perruque-afro/';
$url[18]='https://www.diouda.fr/coiffure/perruque-demi-tete/';

$taillej=count($url);

print_r($url);

for($j=0;$j<=$taillej;$j++){

	
	
$html = file_get_html($url[$j]);



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
}

echo 'ok';



?>
