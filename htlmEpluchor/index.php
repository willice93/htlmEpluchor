<?php 
echo 'Modele de recherche dans une page web';
include_once ('simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('41161-br-60w-a19.html');

// Find the DIV tag with an id of "myId"
foreach($html->find('div.product-single__description') as $e)
    echo $e->outertext . '<br>';
echo $e->outertext[1];





echo 'ok';



?>
