<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 

 <?php 


 echo '<p>Bonjour le monde</p>'; 

//ouvre le csv


$ligne = 1; // compteur de ligne
$fic = fopen("kodak.csv", "a+");
echo '</br>';


while($tab=fgetcsv($fic,1024,';'))
{
$champs = count($tab);//nombre de champ dans la ligne en question
$ligne ++;  

echo $tab[$i].'</br>';



      // partie du traitement du csv a faire en fuction a part 
     $ref=$tab[0];
$name=$tab[1];
$prix=$tab[2];
$description=$tab[3];
$des=$tab[4];
$title=$tab[5];
$img=$tab[5];
$champ6=$tab[6];
$champ7=$tab[7];
$urlimg='images/stories/virtuemart/product/'.$title ;//marque sous la forme photo.jpg


$ref=explode('-', $ref);
echo $ref[0].'<br>';


//class permettant ca 
include_once ('simple_html_dom.php');

//chemin du dossier 
$dir = "/var/www/html/htmlEpluchor/images";



     if (is_dir($dir)) 
   {
    if ($dh = opendir($dir)) 
    {
        while (($file = readdir($dh)) !== false) 
        {
            
            $test=$dir.'/'.$file ;
            // echo $test;
            
            $url  = $test;
   
            //j'empeche les dossier parent ';
 
           if($test!== $dir.'/.'&& $test!== $dir.'/..')
           {
           
               $sansSlash = explode("/", $url);
                  // echo $sansSlash[6].'</br>';

            $photo= explode("?",$sansSlash[6] );

            // echo $photo[0].'</br>';
             
             $numeroItem= explode("_", $photo[0]);

                    //echo '"'.$numeroItem[0].'";"'.$photo[0].'"</br>';
                    
                    //echo $numeroItem[0].' '.$ref[0].'</br>';

                    //if($numeroItem[0]==$ref){echo $numeroItem[0];.' '.$ref[0];}
                    if (strcasecmp($numeroItem[0], $ref[0]) == 0) {
                      echo '$var2 est égale à $var2 '.$numeroItem[0].'(comparaison insensible à la casse)';
                         
}

                     }


        }
     
        closedir($dh);
    }


   }


}

   ?>
 </body>
</html>
