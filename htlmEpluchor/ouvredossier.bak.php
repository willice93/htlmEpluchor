
<?php

//ouvre tous les fichier dans un dossier et lit une balise

//class permettant ca 
include_once ('simple_html_dom.php');

//chemin du dossier 
$dir = "/var/www/html/htmlEpluchor/images";



// Ouvre un dossier bien connu, et liste tous les fichiers
if (is_dir($dir)) 
{
    if ($dh = opendir($dir)) 
    {
        while (($file = readdir($dh)) !== false) 
        {
            
            $test=$dir.'/'.$file ;
             //echo $test;
            
            $url  = $test;
   
            //echo $url.'</br>';
 
           if($test!== $dir.'/.'&& $test!== $dir.'/..')
           {
           
               $pieces = explode("/", $url);
                  // echo $pieces[6].'</br>';

            $photo= explode("?",$pieces[6] );

            // echo $photo[0].'</br>';
             
             $numeroItem= explode("_", $photo[0]);

                    echo '"'.$numeroItem[0].'";"'.$photo[0].'"</br>';

                     }


        }
        closedir($dh);
    }
}
?>
