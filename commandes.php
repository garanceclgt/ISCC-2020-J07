<?php 
$historique_commandes = array ("5.49", "9.99", "5.49", "15.99", "25"); 
function afficher_commandes ($historique_commandes)
{     
    foreach ($historique_commandes as $commande)  
    {      echo "Une commande de $commande euros a été reçus" . "</br>" ; 
    } 
    }   afficher_commandes($historique_commandes);   
    function afficher_total ($historique_commandes)   
    {       echo "le total des commandes est de". 
        array_sum($historique_commandes) . "euros". "</br>";   
    }   
        afficher_total($historique_commandes); 
        ?>