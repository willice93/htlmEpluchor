<?php 
function descriptionProd ($heures,$ans,$wat,$irc,$dim,$lumens,$faisceau)
{

 $text="Caractéristiques

    Durée de vie : ".$heures." Heures
    Garantie : ".$ans." ans
    Puissance consommée :".$wat."
    IRC : ".$irc."
    Dimmable : ".$dim."
    600 Lumens ".$lumens."
    Faisceau Lumineux : ".$faisceau."
    Pas d'UV / aucun IR
    Température de fonctionnement : -10 ° C à + 40 ° C, -24 ° F à + 104 ° F";
    return $text;

}


$test=descriptionProd('00h30',3,60,82,5,67,360);
echo $test;



?>