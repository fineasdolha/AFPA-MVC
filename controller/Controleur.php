
<?php

require './model/Model.php';
// Affiche la liste de tous les billets du blog


function accueil()
{
    $billets = getBillets();
    require './vues/vueAccueil.php';
}
// Affiche les détails sur un billet
function billet($idBillet)
{
    $billet = getBillet($idBillet);
    $commentaires = getComments($idBillet);
    require './vues/vueBillet.php';
}
// Affiche une erreur
function erreur($msgErreur)
{
    require './vues/vueErreur.php';
}
