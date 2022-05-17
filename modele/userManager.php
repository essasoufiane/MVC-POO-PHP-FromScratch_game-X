<?php
require_once "Manager.php";
require_once "user.php";

class userManager extends ManagerU {

    private $users;

    public function adduser($user){
        $this->users[] = $user;
    }
    public function getuser(){
        return $this->users;
    }

    public function loadusers(){
        $req = $this->getBdd()->prepare("SELECT * FROM user");
        $req->execute();
        $myusers = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($myusers as $user) {
            $u = new user($user['id'],$user['prenom'], $user['age']);
            $this->adduser($u);
        }

        // var_dump($g);
    }

}