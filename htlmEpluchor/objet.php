
<?php
class Personnage // Présence du mot-clé class suivi du nom de la classe.

{

   private $_force;        // La force du personnage

  private $_localisation; // Sa localisation

  private $_experience=50;   // Son expérience

  private $_degats;



 public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).

  {


  }

        

  public function frapper() // Une méthode qui frappera un personnage (suivant la force qu'il a).

  {


  }

        

  public function gagnerExperience() // Une méthode augmentant l'attribut $experience du personnage.

  {
             $this->_experience = $this->_experience + 1;

  }

   public function afficherExperience()

  {

    echo $this->_experience;

  }
 public function parler()
  {
    echo 'Je suis un personnage !';
  }
}


$perso = new Personnage;

$perso->parler();
$perso->afficherExperience();
$perso->gagnerExperience();
$perso->afficherExperience();





















  ?>