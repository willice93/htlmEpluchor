
<?php
include_once ('simple_html_dom.php');
$dir = "/var/www/html/htmlEpluchor/dos";

// Ouvre un dossier bien connu, et liste tous les fichiers
if (is_dir($dir)) 
{
    if ($dh = opendir($dir)) 
    {
        while (($file = readdir($dh)) !== false) 
        {
            
            $test=$dir.'/'.$file ;
            echo $test ;
            $html = file_get_html($test);

            
        foreach($html->find('div.product-single__description') as $e)
    echo $e->outertext . '<br>';

       
        }
        closedir($dh);
    }
}
?>
