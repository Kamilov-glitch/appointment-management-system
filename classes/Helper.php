<?php

include_once "Database.php";

class Helper
{
    private $db;

    public function __construct()
    {
       $this->db = new Database();
    }

    public function exists($username)
    {
        $sql = "SELECT count(username) FROM users WHERE username = :username";
        $count = $this->db->getAll($sql, ":username", $username);
        return count > 0;
    }

    public function passwordsMatch($pw1, $pw2) {
        return $pw1 === $pw2;
    }
}