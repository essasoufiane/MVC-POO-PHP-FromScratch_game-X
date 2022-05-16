<?php

class user {

    public $id;
    public $prenom;
    public $age;

    public function __construct($id,$prenom,$age)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->age = $age;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
            return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
            $this->age = $age;

            return $this;
    }
}