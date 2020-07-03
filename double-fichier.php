<?php

$tableau1 = array ('t-shirt rouge','15.50','5') ;
$tableau2 = array("T-shirt vert" ,'15.50','6');
$tableau3 = array("T-shirt argent" ,'15.50','8');
$tableau4 = array('Short bleu' ,'16.50','5');
$tableau5 = array('Short vert' ,'19,99','5');
$tableau6 = array('Veste argent' ,'19,99' ,'10');
$tableau7 = array('Veste argent', '35' ,'3');
$panier = array ($tableau1, $tableau2, $tableau3, $tableau4, $tableau5, $tableau6, $tableau7);

function afficher_panier ($panier)
{
    foreach ( $panier as $article) 
{
        foreach($article as $value)    
        {
            echo"<li>" . $value ; 

}
    } 
afficher_panier($panier);