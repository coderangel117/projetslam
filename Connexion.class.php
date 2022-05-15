<?php

class Connexion
{
    public $user;
    public $pass;
    public $connexion;
    private $attribute;

    public function __construct($user, $pass){
        $this->user = $user;
        $this->pass = $pass;
        $this->connexion = new PDO( 'mysql:host=127.0.0.1; dbname=test_stage', $this->user, $this->pass);
        $this->attribute = [PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION];
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }


    /**
     * @return mixed
     */
    public function getBdd()
    {
        return $this->bdd;
    }


    /**
     * @return array
     */
    public function getAttribute(): array
    {
        return $this->attribute;
    }


    /**
     * @return PDO
     */
    public function getConnexion(): PDO
    {
        return $this->connexion;
    }


    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }
    /**
     * @param mixed $pass
     */
    public function setPass($pass): void
    {
        $this->pass = $pass;
    }


    /**
     * @param mixed $bdd
     */
    public function setBdd($bdd): void
    {
        $this->bdd = $bdd;
    }


    public function setAttribute(array $attribute){
        $this->attribute = $attribute;
    }

    /**
     * @param PDO $connexion
     */
    public function setConnexion(PDO $connexion): void
    {
        $this->connexion = $connexion;
    }

}