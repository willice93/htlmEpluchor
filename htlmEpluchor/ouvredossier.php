<?php

//ouvre tous les fichier dans un dossier et lit une balise

//class permettant ca 
include_once ('simple_html_dom.php');

//chemin du dossier 
$dir = "/var/www/html/htmlEpluchor/dos";

// Ouvre un dossier bien connu, et liste tous les fichiers
if (is_dir($dir)) 
{
    if ($dh = opendir($dir)) 
    {
        while (($file = readdir($dh)) !== false) 
        {
            
            $test=$dir.'/'.$file ;
            
            $html = file_get_html($test);

            // j'enleve les dossier parent

            while ( $test!== $dir.'/.'&& $test!== $dir.'/..') {
               

                   // cherche la boone div
                        foreach($html->find('div.product-single__description') as $e)
                          //echo $e->outertext . '<br>';
                # code...
                              $description=$e->outertext;

              foreach($html->find('img#ProductPhotoImg') as $element)
               //echo $element->src . '<br>';


                $url  = $element->src;
                       $pieces = explode("/", $url);

                       //echo $pieces[11].'</br>'; // piece1

                              // extrait la photo

                            $photo= explode("?",$pieces[11] );

                                //echo $photo[0].'</br>';;





// extrait numero item

                                   $numeroItem= explode("_", $pieces[11]);



                                           echo $numeroItem[0].';'.$photo[0].';';
                                           //.$description.';'.'*';









            }

            
        

       
        }
        closedir($dh);
    }
}
?>