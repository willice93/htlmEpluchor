<html>
 <head>
<meta charset="UTF-8">
  <title>Test PHP</title>
 </head>
 <body>
 <?php echo '<p>Bonjour le monde</p>'; 

				//variables de connection a mettre a part dans une fonction 
				$server='localhost';
				$user='root';
				$pass='cyberabonnes';
				$db='bd_dsd';
				$prefix='ovjh0';
				$cat=7;//vetement






			$ligne = 1; // compteur de ligne
			$fic = fopen("test.csv", "a+");
			echo '</br>';

		while($tab=fgetcsv($fic,1024,';'))
      {
				$champs = count($tab);//nombre de champ dans la ligne en question
				$ligne ++;  


				    for($i=0;$i>=$champ;si++){
				    $tab[$i]=utf8_decode($tab[$i]);}

				       echo '</br>';



				// partie du traitement du csv a faire en fuction a part 
				$ref=$tab[0];
				$name=$tab[1];
				$prix=$tab[2];
				$description='ceci est un grande description';
				$des='Ceci est une petite description';
				$photo=$tab[4];
				$img=$tab[4];
				$champ6=$tab[6];
				$champ7=$tab[7];
				$urlimg='images/stories/virtuemart/product/'.$photo ;//marque sous la forme photo.jpg
				 $name= utf8_encode ($name);
				 $description= utf8_encode ($description);

				echo 'la reference de ce produit **'.$ref.'<br>';
				echo 'la nom de ce produit **'.$name.'<br>';


				//connexion a la base de donnée 
                mysql_connect($server, $user, $pass) or die('Erreur de connexion');
                  mysql_select_db($db) or die('Base inexistante');


				//on recuopere id  max existante
				$queryid ="SELECT MAX(virtuemart_product_id) FROM ".$prefix."_virtuemart_products_fr_fr";

				$rid=mysql_query($queryid) or die('Erreur SQL !'.$queryid.'<br>'.mysql_error());

				$max=mysql_fetch_array($rid);

				 $id=$max[0];

				//j'ajoute 1 a celui existant pour creer lid du nouveau produit
				$id=$id+1;
				// debug echo $id;

				// on écrit la requête sql
				  


				 $sql = "INSERT INTO `".$prefix."_virtuemart_products_fr_fr` (`virtuemart_product_id`, `product_s_desc`, `product_desc`, `product_name`, `metadesc`, `metakey`, `customtitle`, `slug`) VALUES
				($id, '$des', '$description', '$name', 'meta decription', 'meta mots clés', 'titre de la page ', '$ref.$id')";
				// on insère les informations du formulaire dans la table
				  mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

				 //on insere le reste du produit 

				 $sql2 = "INSERT INTO `".$prefix."_virtuemart_products` (`virtuemart_product_id`, `virtuemart_vendor_id`, `product_parent_id`, `product_sku`, `product_gtin`, `product_mpn`, `product_weight`, `product_weight_uom`, `product_length`, `product_width`, `product_height`, `product_lwh_uom`, `product_url`, `product_in_stock`, `product_ordered`, `low_stock_notification`, `product_available_date`, `product_availability`, `product_special`, `product_sales`, `product_unit`, `product_packaging`, `product_params`, `hits`, `intnotes`, `metarobot`, `metaauthor`, `layout`, `published`, `pordering`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES
				($id, 1, 1200, NULL, NULL, NULL, 3.9000, 'KG', 25.0000, NULL, NULL, 'M', NULL, 0, 0, 0, '0000-00-00 00:00:00', NULL, 0, 54, 'KG', NULL, '', NULL, NULL, NULL, NULL, NULL, 1, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0)";



				      
				    mysql_query($sql2) or die('Erreur SQL !'.$sql2.'<br>'.mysql_error());



				// on le place dans une categorie 

				$sql3 ="INSERT INTO `".$prefix."_virtuemart_product_categories` (`id`, `virtuemart_product_id`, `virtuemart_category_id`, `ordering`) VALUES (NULL, '$id', '$cat', '0')";
				mysql_query($sql3) or die('Erreur SQL !'.$sql3.'<br>'.mysql_error());


				//on rentre les detail prix etc



				$sql5 ="INSERT INTO `".$prefix."_virtuemart_product_prices` (`virtuemart_product_id`, `virtuemart_shoppergroup_id`, `product_price`, `override`, `product_override_price`, `product_tax_id`, `product_discount_id`, `product_currency`, `product_price_publish_up`, `product_price_publish_down`, `price_quantity_start`, `price_quantity_end`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES
				($id, 0, '$prix', 0, 0.00000, -1, -1, 47, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '2016-09-21 22:09:44', 223, '2016-09-21 22:14:48', 223, '0000-00-00 00:00:00', 0)";
				mysql_query($sql5) or die('Erreur SQL !'.$sql5.'<br>'.mysql_error());
				//fournisseur
				$sql6 ="INSERT INTO `".$prefix."_virtuemart_product_manufacturers` ( `virtuemart_product_id`, `virtuemart_manufacturer_id`) VALUES
				( $id, 1)";
				mysql_query($sql6) or die('Erreur SQL !'.$sql6.'<br>'.mysql_error());

				$sql7="INSERT INTO `".$prefix."_virtuemart_medias` (`virtuemart_media_id`, `virtuemart_vendor_id`, `file_title`, `file_description`, `file_meta`, `file_class`, `file_mimetype`, `file_type`, `file_url`, `file_url_thumb`, `file_is_product_image`, `file_is_downloadable`, `file_is_forSale`, `file_params`, `file_lang`, `shared`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES
				(NULL, 1, '$photo', 'VirtueMart Sample', 'virtuemart sample', '', 'image/png', 'product', '$urlimg', '', 1, 0, 0, '', '', 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0)";

				mysql_query($sql7) or die('Erreur SQL !'.$sql7.'<br>'.mysql_error());

				// on recupere l'id du produit 
				 $query ="SELECT MAX(virtuemart_media_id) FROM ".$prefix."_virtuemart_medias";
				$req=mysql_query($query) or die('Erreur SQL !'.$query.'<br>'.mysql_error());
				$max1=mysql_fetch_array($req);
				 $Id=$max1[0];

				echo $Id;



				$sql8="INSERT INTO `".$prefix."_virtuemart_product_medias` (`id`, `virtuemart_product_id`, `virtuemart_media_id`, `ordering`)
				VALUES (
				NULL , '$id', '$Id', '1'
				)";


				mysql_query($sql8) or die('Erreur SQL !'.$sql8.'<br>'.mysql_error());


                           mysql_close();  // on ferme la connexion
    
  











;}



?>
 </body>
</html>