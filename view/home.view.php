<?php  ob_start(); 


class Mere {
    public $bdd = "connexion";
}























?>


<p>Bienvenue sur notre store !</p>




<?php

$content =ob_get_clean();
$title = "Bienvenue chez Game-X";
require_once "base.html.php";

?>