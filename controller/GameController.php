<?php
require_once "GameManager.php";


class GameController {
    private $gameManager;

    public function __construct(){
        
        
        $this->gameManager = new GameManager();
        
        $this->gameManager->loadGames();
        
    }

    public function displayGames(){
        $games = $this->gameManager->getGame(); 
        require_once "view/games.view.php";
    }
}



// $games = $gameManager->getGame();
// var_dump($games);
