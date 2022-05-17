<?php
require_once "Manager.php";
require_once "Game.php";

class GameManager extends Manager {

    private $games;

    public function addGame($game){
        $this->games[] = $game;
    }
    public function getGame(){
        return $this->games;
    }

    public function loadGames(){
        $req = $this->getBdd()->prepare("SELECT * FROM games");
        $req->execute();
        $myGames = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($myGames as $game) {
            $g = new Game($game['id'],$game['title'], $game['nb_players']);
            $this->addGame($g);
        }

        // var_dump($g);
    }

}