<?php 
require_once "GameManager.php";


$gameManager = new GameManager();

$gameManager->loadGames();

$games = $gameManager->getGame();

// var_dump($games);
$games = $gameManager->getGame();

$gameManager->loadGames();
ob_start(); 

?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Nombres de joueurs</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($games as $game) : ?>
      <td><?= $game->getTitle() ?></td>
      <td><?= $game->getNb_players() ?></td>
      <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <?php endforeach; ?>
    <!-- <tr>
      <td>Valorant</td>
      <td>10</td>
      <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <tr>
      <td>Among US</td>
      <td>15</td>
      <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr> -->
  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="">Ajouter un jeu</a>

<?php

$content =ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";

?>