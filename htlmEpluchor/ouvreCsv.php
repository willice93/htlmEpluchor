<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 

 <?php 

include_once ('inc.description.php');
 echo '<p>Bonjour le monde</p>'; 

//ouvre le csv


$ligne = 1; // compteur de ligne
$fic = fopen("kodakFranceClean.csv", "a+");



while($tab=fgetcsv($fic,1024,';'))
{
$champs = count($tab);//nombre de champ dans la ligne en question
$ligne ++;  

//echo $tab[$i].'</br>';



      // partie du traitement du csv a faire en fuction a part 
     $ref=$tab[0];

$ean=$tab[1];
$name=$tab[2];
$input=$tab[3];
$base=$tab[4];
$watts=$tab[5];
$cct=$tab[5];
$lumens=$tab[6];
$lifeHour=$tab[7];
$irc=;
$angle=$tab[8];
$dim=$tab[9];
$price=$tab[11];



$ref=explode('-', $ref);
//echo $ref[0].'<br>';


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
                   //fonction description

              descriptionProd()

                    //if($numeroItem[0]==$ref){echo $numeroItem[0];.' '.$ref[0];}
                    if (strcasecmp($numeroItem[0], $ref[0]) == 0) {
                      echo $numeroItem[0].';'.$file.';'.$description.';'.$prix.';</br> ';
                         
                      //ecrire dans un fichier les resultat                                                                                       








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
