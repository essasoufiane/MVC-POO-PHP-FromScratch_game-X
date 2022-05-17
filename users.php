<?php 
require_once "userManager.php";


$userManager = new userManager();

$userManager->loadusers();

$users = $userManager->getuser();

// var_dump($users);
$users = $userManager->getuser();

$userManager->loadusers();
ob_start(); 

?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">Utilisateur</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($users as $user) : ?>
      <td><?= $user->getId() ?></td>
      <td><?= $user->getPrenom() ?></td>
      <td><?= $user->getAge() ?></td>
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

<!-- <a class="btn btn-success w-25 d-block m-auto" href="">Ajouter un utilisateur</a> -->

<?php

$content =ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";

?>